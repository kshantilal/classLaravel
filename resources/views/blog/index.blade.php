@extends('layouts.master')

@section('title', 'Blog Page')
@section('description', 'This is our blog page, all of our blog posts are listed here')
@section('styles')

@endsection
@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="title">This is the blog page</h1>
				@if(Auth::user())
				<a  class="btn btn-primary" href="{{ route('blog.create') }}">Create new blog post</a>
				@endif
			</div>
		</div>

	</div>

@endsection
@section('scripts')

@endsection