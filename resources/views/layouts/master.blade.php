
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('title')</title>
		
		<!-- Stylesheets -->
		<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

		
	</head>
	
	<body>
		@yield('content')

		<!-- Scripts -->
		<script src="{{ asset('assets/js/jquery.js') }}" ></script>
		<script src="{{ asset('assets/js/app.js') }}"></script>
	</body>
</html>