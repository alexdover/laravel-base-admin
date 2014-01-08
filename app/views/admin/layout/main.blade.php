<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title') | Admin Dashboard</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
		<link href="{{ asset('css/admin.css') }}" rel="stylesheet" media="screen">

		<!--[if lt IE 9]>
			<script src="{{ asset('js/html5shiv.js') }}"></script>
			<script src="{{ asset('js/respond.min.js') }}"></script>
		<![endif]-->
	</head>
<body>

@include('admin.includes.navbar')

<div class="admin-main-content">
	@yield('content')
</div>

<script src="//code.jquery.com/jquery.js"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

</body>
</html>