@extends('layouts.app')

@section('header')
<div class="lil-row">
	<div class="lil-col 12-12 header-container">
		<img class="picture" src="{{ asset('images/screenshot.png') }}">
	</div>
</div>
@endsection

@section('content')
<div class="lil-row">
	<section class="lil-col center xs-11-12 sm-10-12 md-8-12 lg-8-12 xl-6-12 content-box post">
		<h2 class="section-title">Create a post</h2>
		<form class="post-form" action="{{ route('blog.post.add') }}" method="POST" enctype="multipart/form-data">
			@csrf
			<input type="text" name="post-title" class="width-100 block" placeholder="Name" required>
			<input type="text" name="post-description" class="width-100 block" placeholder="Description" required>
			<label class="switch"> Is the project's image online ?
				<input type="checkbox" name="post-image-online" id="img-checkbox" value="1">
			</label>
			<select name="post-tag" class="tag-select">
				<option selected="selected">Select a tag</option>
				@foreach ($tags as $tag)
					<option value="{{ $tag->id }}">{{ $tag->name }}</option>
				@endforeach
			</select>
			<input type="text" name="post-image-link" id="post-image-url" class="width-100 block"
				placeholder="Image url" required>
			<input type="file" name="post-image-file" id="post-image-file" class="width-100 block" required>
			<textarea name="post-content" class="width-100 block"></textarea>

			<button type="submit" class="right btn">Add project</button>
			<div class="lil-clear"></div>
		</form>
	</section>
</div>

<script>
	imgCheckbox = document.querySelector("#img-checkbox");
	if (imgCheckbox.checked == true) {
		document.querySelector("#post-image-url").style.display = "block";
		document.querySelector("#post-image-url").disabled = false;
		document.querySelector("#post-image-file").style.display = "none";
		document.querySelector("#post-image-file").disabled = true;
	} else {
		document.querySelector("#post-image-url").style.display = "none";
		document.querySelector("#post-image-url").disabled = true;
		document.querySelector("#post-image-file").style.display = "block";
		document.querySelector("#post-image-file").disabled = false;
	}
	imgCheckbox.addEventListener("click", function() {
		if (imgCheckbox.checked == true) {
			document.querySelector("#post-image-url").style.display = "block";
			document.querySelector("#post-image-url").disabled = false;
			document.querySelector("#post-image-file").style.display = "none";
			document.querySelector("#post-image-file").disabled = true;
		} else {
			document.querySelector("#post-image-url").style.display = "none";
			document.querySelector("#post-image-url").disabled = true;
			document.querySelector("#post-image-file").style.display = "block";
			document.querySelector("#post-image-file").disabled = false;
		}
	});
	
</script>
@endsection
