@extends('layout')

@section('content')

	<h3> Create new post </h3>

	<form action="/admin/posts/create" method="post">
		<!-- Title -->
		<div class="row">
			<div class="col-md-12">
				<label for="post-title">Post Title</label>
				<input type="text" name="title" id="post-title" class="form-control" placeholder="Post Title" title="The title of your post." required />
			</div>
		</div>

		<!-- Content -->
		<div class="row">
			<div class="col-md-12">
				<label for="post-content">Post Content</label>
				<textarea name="content" id="post-content" class="form-control" title="The content of your post." required >
				</textarea>
			</div>
		</div>

		<div class="row">
			<div class="col-md-2">
				<button type="submit" class="btn btn-success"> Post </button>
			</div>
		</div>

	</form>

@endsection