@extends('layouts.app')

@section('header')
<div class="lil-row">
    <div class="lil-col 12-12 header-container">
		<img class="picture" src="{{ asset('images/screenshot.png') }}" alt="">
		<div class="lil-col center xs-11-12 sm-10-12 md-8-12 lg-8-12 xl-6-12">
			<h1 class="main-title">About</h1>
		</div>
    </div>
</div>
@endsection

@section('content')
<div class="lil-row">
	<section class="lil-col center xs-11-12 sm-10-12 md-8-12 lg-8-12 xl-6-12 content-box">
		<h2 class="section-title">What is Humbug Engine ?</h2>
		<p class="section-desc">Humbug engine is a non-euclidean capable game engine that is developped as a scholar project.</p>
	</section>
</div>
<div class="spacer-25"></div>
<div class="lil-row">
	<section class="lil-col center xs-11-12 sm-10-12 md-8-12 lg-8-12 xl-6-12 content-box">
		<h2 class="section-title">Who are we ?</h2>
		<p class="section-desc">We are a student team from the IUT of Puy en Velay (France).</p>
	</section>
</div>
<div class="spacer-25"></div>
{{-- <div class="lil-row">
	<section class="lil-col center xs-11-12 sm-10-12 md-8-12 lg-8-12 xl-6-12 content-box">
		<h2 class="section-title">Who are we ?</h2>
		<p class="section-desc">We are a student team from the IUT of Puy en Velay (France).</p>
	</section>
</div>
<div class="spacer-25"></div>
<div class="lil-row">
	<section class="lil-col center xs-11-12 sm-10-12 md-8-12 lg-8-12 xl-6-12 content-box">
		<h2 class="section-title">Who are we ?</h2>
		<p class="section-desc">We are a student team from the IUT of Puy en Velay (France).</p>
	</section>
</div> --}}
@endsection
