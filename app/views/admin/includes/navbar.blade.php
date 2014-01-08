{{-- Only show the navbar is we have a user --}}
@if (Auth::check())
<header class="navbar navbar-inverse navbar-fixed-top admin-header">
	<div class="container">
		<a class="navbar-brand" href="{{ URL::to('/' . Config::get('app.admin_url') . '/') }}">{{ Config::get('app.site_name') }}</a>
		<span class="navbar-text pull-right">Hello {{ Auth::user()->name }}, want to <a href="{{ URL::to('/' . Config::get('app.admin_url') . '/logout') }}">log out</a>?</span>
	</div>
</header>
@endif