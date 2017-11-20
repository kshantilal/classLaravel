<!DOCTYPE html>
<html>
<head>
	<title>Blog - @yield('title')</title>
	<meta charset="utf-8">
	<meta name="description" content="@yield('description')">
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	@yield('styles')
</head>
<body>

	@include('partials._nav')

	@yield('content');

	@include('partials._footer')

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
	@yield('scripts')
</body>
</html>