@extends('layout')

@section('content')

	<h3> Posts </h3>

	<div class="row">

		<div class="col-md-2">
			<a href="/admin/posts/create">
				<button class="btn btn-success"> Add new post <span class="glyphicon glyphicon-plus"></span></button>
			</a>
		</div>

		<div class="col-md-2">
			<button class="btn btn-danger"> Delete Checked <span class="glyphicon glyphicon-trash"></span></button>
		</div>

	</div>

	@if (count($posts) > 0 )
		<div class="row">
			<div class="col-md-12">
				<table class="table table-striped table-hover">
					<tr>
						<th></th>
						<th></th>
						<th> Title </th>
						<th> Created </th>
						<th> Delete? </th>
					</tr>

					@foreach($posts as $post)
						<tr>
							<td> <input type="checkbox" name="delete-item" value="{{$post->id}}" /> </td>
							<td> #{{ $post->id }} </td>
							<td><a href="/posts/{{$post->id}}">{{ $post->title }}</a></td>
							<td> {{ $post->created_at }} </td>

							<td> 
								<a href="/admin/posts/delete/{{$post->id}}">
									<span class="glyphicon glyphicon-remove"></span> 
								</a>
							</td>
						</tr>
					@endforeach
				</table>

				{!! $posts->links() !!}
			</div>
		</div>
	@else
		<p> There are currently no posts. <a href="/admin/posts/create">Create one now</a>. </p>
	@endif

@endsection