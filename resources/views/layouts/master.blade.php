<!DOCTYPE html>
<html>
<head>
	<title>Paul</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="{{ elixir('css/all.css') }}" />
</head>
<body>

	@include('partials.topnav')

	@yield('content')

	<script src="{{ elixir('js/all.js') }}"></script>

	@include('flash')
</body>
</html>