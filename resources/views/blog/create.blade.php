@extends('layouts.master')

@section('title', 'Create Page')
@section('description', 'This is our blog page, all of our blog posts are listed here')
@section('styles')

@endsection
	
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 class="title">This is the create blog page</h1>
			<form>
				<div class="form-group">
					<label for="">Title</label>
					<input type="text" class="form-control" id="title">
		  		</div>
				<div class="form-group">
					<label for="">Description</label>
					<textarea class="form-control" rows="5" id="comment"></textarea>
				</div>
				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>
	</div>
</div>
@endsection
@section('scripts')

@endsection