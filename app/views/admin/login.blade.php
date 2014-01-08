@extends('admin.layout.main')

@section('title', 'Log in')

@section('content')
<div class="container">
	{{ Form::open(array('url' => Config::get('app.admin_url') . '/login', 'role' => 'form', 'class' => 'form-login' )) }}

		<h1 class="form-login-title">{{ Config::get('app.site_name') }}</h1>

		@if(Session::has('failed'))
			<div class="alert alert-danger">
				<p>Login failed, please try again.</p>
			</div>
		@endif

		{{ Form::label('email', 'Email', array('class' => 'hidden')) }}
		{{ Form::text('email', Session::get('email'), array('class' => 'form-control', 'placeholder' => 'Email', 'autofocus')) }}

		{{ Form::label('password', 'Password', array('class' => 'hidden'))}}
		{{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) }}

		{{ Form::submit('Log in', array('class' => 'btn btn-lg btn-primary btn-block')) }}

	{{ Form::close() }}
</div>
@stop
