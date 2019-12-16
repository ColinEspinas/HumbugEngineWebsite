@extends('layouts.app')

@section('header')
<div class="lil-row">
    <div class="lil-col 12-12 header-container">
		<img class="picture" src="{{ asset('images/screenshot.png') }}" alt="">
		<div class="lil-col center xs-11-12 sm-10-12 md-8-12 lg-8-12 xl-6-12">
			<h1 class="main-title">Blog</h1>
		</div>
    </div>
</div>
@endsection

@section('content')
<div class="lil-row">
    <section class="lil-col center xs-11-12 sm-10-12 md-8-12 lg-8-12 xl-6-12 content-box">
        <p class="section-desc">Find out what we are working on and how we are doing it.</p>
    </section>
</div>
<div class="spacer-25"></div>
<div class="lil-row">
    <section class="lil-col center xs-11-12 sm-10-12 md-8-12 lg-8-12 xl-6-12 content-box">
        <h2 class="section-title">Devlogs & Previsions:</h2>
        <p class="section-desc">Check our latest posts on the project development:</p>
        <ul class="post-list">
            @foreach ($posts as $post)
                @component('components.post-display', ['post' => $post])
                @endcomponent
            @endforeach
            @if (count($posts) == 0)
            <li class="post-display">
                <p class="empty">Sorry, there is no posts yet.</p>
            </li>
            @endif
        </ul>
    </section>
</div>
@endsection
