@extends('layouts.app')

@section('header')
	<div class="lil-row">
		<div class="lil-col 12-12 header-container">
			<img class="picture" src="{{ "/storage/post-image/" . $post->image }}" alt="{{ $post->title }}">
		</div>
	</div>
@endsection

@section('content')
	<div class="lil-row">
		<section class="lil-col center xs-11-12 sm-10-12 md-8-12 lg-8-12 xl-6-12 content-box post">
			<h2 class="section-title">{{ $post->title }}</h2>
			<p class="section-desc">{{ $post->description }}</p>
			<div class="info">
				<span class="author">{{ $post->author->name }}</span>
				<span class="date"> - {{ $post->getDate() }}</span>
			</div>
			<div class="content">
				<?php include storage_path() . '/app/public/posts-content/' . $post->title . ".html"; ?>
			</div>
		</section>
	</div>
@endsection
