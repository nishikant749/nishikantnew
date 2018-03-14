@extends('layout')
@section('content')

<form action="/posts" method="post">
	<div class="form-group">
		{{ csrf_field() }}
		<label for="exampleInputEmail1">Title</label>
		<input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter title here" name="title">
	</div>
	<div class="form-group">
		<label for="exampleInputPassword1">Body</label>
		<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Message here" name="body">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">Submit</button> <a href="/" class="btn btn-primary float-right">Home</a>
		<br>

		
		@include('partials.errors')
		
	</form>
	@stop