@extends('layout')
@section('content')

<div class="blog-post">
	<h2 class="blog-post-title">{{ $post->title }}</h2>
	<p class="blog-post-meta"><h4>{{ $post->body }}</h4>  {{ $post->created_at->diffForHumans() }}   
	</div>

	<div class="container">
		<a href="/" class="btn btn-primary">Home</a> 
	</div><br>
	@stop