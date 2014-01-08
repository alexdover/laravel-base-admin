@extends('admin.layout.main')

@section('title', 'Dashboard')

@section('content')
<div class="container">

	<h1>{{ Config::get('app.site_name') }}</h1>

	<p>Welcome to the dashboard.</p>
	
</div>
@stop
