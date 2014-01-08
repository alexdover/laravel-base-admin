<?php

/*
|--------------------------------------------------------------------------
| The admin site
|--------------------------------------------------------------------------
*/
Route::group(array('prefix' => Config::get('app.admin_url')), function()
{
	/*
	|-------------------------------------
	| Login required (auth filter applied)
	|-------------------------------------
	*/
	Route::group(array('before' => 'admin_auth'), function()
	{

		Route::get('/', 'AdminController@home');

		Route::get('logout', 'AdminController@logout');

	});

	/*
	|-------------------
	| Public routes
	|-------------------
	*/
	Route::get('login', 'AdminController@login');
	Route::post('login', 'AdminController@loginAttempt');

});

/*
|---------------------------------
| Other public routes placed here
|---------------------------------
*/

/*
|-------------------
| Default home page
|-------------------
*/
Route::get('/', function()
{
	return View::make('home');

});