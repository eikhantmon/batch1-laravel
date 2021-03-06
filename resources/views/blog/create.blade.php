@extends('layouts.master')

@section('content')

<h1>Blog Create</h1>

<hr>
@include('partials.errors')

@if(Session::has('success_blog'))
	<div class="alert alert-success">
		{{Session::get('success_blog') }}
	</div>
 @endif

<form action="{{ route( 'blog.store') }}" method="post">
	{{ csrf_field()}}

	<div class="form-group">
		<label for="title" class="control-label">Title</label>
		<input type="text" name="title" class="form-control">
	</div>

	<div class="form-group">
		<label for="description" class="control-label">Description</label>
		<textarea name="description" class="form-control" id="summernote"></textarea>
	</div>

	<button type="submit" class="btn btn-primary">Create New Blog</button>
</form>

<!-- include libraries(jQuery, bootstrap) -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
<!-- include summernote css/js -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>

<script>
	$('document').ready(function(){
		$('#summernote').summernote();
	});
</script>

@stop