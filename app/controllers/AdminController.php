<?php

class AdminController extends BaseController {

	private $admin_url;
	
	public function __construct()
	{
		$this->admin_url = Config::get('app.admin_url');
	}

	public function login()
	{
		return View::make('admin.login');
	}

	public function loginAttempt()
	{
		$user_details = array(
						'email' => Input::get('email'),
						'password' => Input::get('password')
					);

		$validation_rules = array(
				'email' => 'required',
				'password' => 'required'
			);

		$validator = Validator::make($user_details, $validation_rules);

		if ($validator->fails())
		{
		    return Redirect::to($this->admin_url . '/login')->with('failed', 'true')->with('email', Input::get('email'));
		}

		if(Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))))
		{
			Event::fire('user.login', array(Auth::user()));
	    	return Redirect::to('/' . $this->admin_url);
		}

	    return Redirect::to($this->admin_url . '/login')->with('failed', 'true')->with('email', Input::get('email'));
	}

	public function logout()
	{
		Auth::logout();

		return Redirect::to($this->admin_url);
	}

	public function home()
	{
		return View::make('admin.index');
	}

}