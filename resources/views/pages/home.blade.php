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
			<h2 class="section-title">Recent Posts:</h2>
			<p class="section-desc">Check our latest posts on the engine development:</p>
			<ul class="post-list">
				<li class="post-display">
					<a href="{{ route('blog.post.show', ['post'=>1]) }}">
						<h3 class="title">Exemple Title</h3>
						<span class="author">By Bastien Legoy</span>
						<span class="date">3 days ago</span>
					</a>
				</li>
				<li class="post-display">
					<a href="">
						<h3 class="title">Exemple Title</h3>
						<span class="author">By Bastien Legoy</span>
						<span class="date">3 days ago</span>
					</a>
				</li>
				<li class="post-display">
					<a href="">
						<h3 class="title">Exemple Title</h3>
						<span class="author">By Bastien Legoy</span>
						<span class="date">3 days ago</span>
					</a>
				</li>
			</ul>
		</section>
	</div>
@endsection
