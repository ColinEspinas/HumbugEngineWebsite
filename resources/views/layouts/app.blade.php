<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ 'Humbug Engine' }}</title>

	<link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}" />
	<!-- Scripts -->
	

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel='stylesheet' href='https://cdn.jsdelivr.net/gh/ColinEspinas/lilcss/css/grid.min.css'>
	<link rel='stylesheet' href='https://cdn.jsdelivr.net/gh/ColinEspinas/lilcss/css/utility.min.css'>

	<!-- Icons -->
	<script src="https://unpkg.com/feather-icons"></script>

</head>
<body>
	<div id="app" class="lil-row">
		<nav class="lil-col 4-12 main-nav">
			<div class="brand-header">
				<img src="{{ asset('images/logo_subtext.png') }}" alt="">
				{{-- <h1>Humbug Engine</h1> --}}
				{{-- <button class="main-menu-open"><i data-feather="chevron-left"></i></button> --}}
			</div>
			<ul class="main-menu">
				<li class="active"><a href="#"><i data-feather="home"></i>Home</a></li>
				<li><a href="#"><i data-feather="book"></i>Documentation</a></li>
				<li><a href="#"><i data-feather="file-text"></i>Blog</a></li>
				<li><a href="#"><i data-feather="message-square"></i>Contact</a></li>
			</ul>
		</nav>
		<main class="lil-col 8-12">
			@yield('content')
		</main>
	</div>

	<!-- Icons render -->
	<script>feather.replace()</script>
</body>
</html>
