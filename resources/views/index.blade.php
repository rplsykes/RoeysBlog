@extends('layout')

@section('content')

	@if( count($posts) > 0 )
		<!-- Begin  Blog Posts --> 
		@foreach ($posts as $post)
			<h2> {{ $post->title }} </h2>
			<p style="word-wrap: break-word;"> {{ $post->content }} </p>

			<hr />
		@endforeach
		<!-- End Blog Posts -->
	@else
		<p> There are no blog posts currently created. </p>
	@endif

@endsection