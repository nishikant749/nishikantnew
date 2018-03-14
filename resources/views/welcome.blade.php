@extends('layout')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<p><a href="post/create" class="btn pull-right btn-primary">Create Post</a></p>
		</div>
	</div>
</div>
<div class="blog-post">
	@foreach($posts as $post)
	<h2 class="blog-post-title"><a href="/show/{{ $post->id }}">{{ $post->title }}</a></h2>
	<p class="blog-post-meta"><h4>{{ $post->body }}</h4>  {{ $post->created_at->diffForHumans() }}           @endforeach
</div>
<div class="comments">
	@foreach($posts ->comments as $comment)
			
	<article>
		
		{{ $comment->body }}
	</article>
	@endforeach
</div>
	@stop