<!DOCTYPE html>
<html>
<head>
	<title>Paul</title>
	<link rel="stylesheet" href="{{ elixir('css/all.css') }}" />
</head>
<body>

	@include('partials.topnav')

	@yield('content')

	<script src="{{ elixir('js/all.js') }}"></script>

	@include('flash')
</body>
</html>