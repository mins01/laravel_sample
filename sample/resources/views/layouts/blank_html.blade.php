<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>@yield('title',config('app.name', ''))</title>
	<meta charset="utf-8">
	<meta http-equiv="Content-Script-Type" content="text/javascript">
	<meta http-equiv="Content-Style-Type" content="text/css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- meta og -->
	<meta property="og:title" content="@yield('title',config('app.name', ''))">
	<meta property="og:description" content="@yield('title',config('app.name', ''))">
	<meta property="og:site_name" content="@yield('title',config('app.name', ''))" />
	<meta property="og:type" content="website">
	<!-- //meta og -->

    <!-- addtion head -->
	@yield('head','')
	<!-- //addtion head -->
</head>
<body spellcheck="false" >
	@yield('content')
</body>
</html>