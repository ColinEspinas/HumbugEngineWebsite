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
	<div id="app">
		<button class="nav-btn"><i data-feather="menu"></i><span>Menu</span></button>
		@auth
			<span class="user-display">Connected as&nbsp;<strong>{{ Auth::user()->name }}</strong><a class="logout-btn" href="{{ route("logout") }}"><i data-feather="log-out"></i></a></span>
		@endauth
		<nav class="main-nav">
			<div class="brand-header">
				<img src="{{ asset('images/logo_subtext.png') }}" alt="">
				{{-- <h1>Humbug Engine</h1> --}}
				{{-- <button class="main-menu-open"><i data-feather="chevron-left"></i></button> --}}
			</div>
			<ul class="main-menu">
				<li class="@if(Request::is('/')) active @endif"><a href="{{ route('home') }}"><i data-feather="home"></i>Home</a></li>
				<li class="@if(Request::is('about')) active @endif"><a href="{{ route("about") }}"><i data-feather="image"></i>About</a></li>
				<li class="@if(Request::is('docs') || Request::is('docs/*')) active @endif"><a href="{{ route("docs.index") }}"><i data-feather="book"></i>Documentation</a></li>
				<li class="@if(Request::is('blog') || Request::is('blog/*')) active @endif"><a href="{{ route("blog.index") }}"><i data-feather="file-text"></i>Blog</a></li>
				<li class="@if(Request::is('contact')) active @endif"><a href="{{ route("contact") }}"><i data-feather="message-square"></i>Contact</a></li>
			</ul>
		</nav>

		<header>
			@yield('header')
		</header>

		<main>
			@yield('content')
		</main>
	</div>

	<!-- Icons render -->
	<script>feather.replace()</script>

	<!-- Custom scripts -->
	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
