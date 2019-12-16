<li class="post-display">
	<a href="{{ route('blog.post.show', ['post'=>$post->id]) }}">
		<ul class="tags">
			@foreach ($post->tags as $tag)
				<li class="tag">$tag->name</li>
			@endforeach
		</ul>
		<h3 class="title">{{ $post->title }}</h3>
		<span class="author">By {{ $post->author->name }}</span>
		<span class="date">{{ $post->getRelativeTime() }}</span>
	</a>
</li>