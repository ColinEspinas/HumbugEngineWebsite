@extends('layouts.app')

@section('header')
	<div class="lil-row">
		<div class="lil-col 12-12 home-header">
			<img class="picture" src="{{ asset('images/screenshot.png') }}" alt="">
			<img class="logo" src="{{ asset('images/logo_text.png') }}" alt="">
		</div>
	</div>
@endsection

@section('content')
	<div class="lil-row">
		<section class="lil-col center xs-11-12 sm-10-12 md-8-12 lg-8-12 xl-6-12 content-box">
			<h2 class="section-title">Welcome</h2>
			<p class="section-desc">Feel free to check the blog for dev updates or the docs for API references:</p>
			<ul>
				<li><a href="{{ route("blog.index") }}">Check the Blog</a></li>
				<li><a href="{{ route("docs.index") }}">Check the documentation</a></li>
			</ul>
		</section>
	</div>
@endsection
