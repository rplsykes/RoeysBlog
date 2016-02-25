@extends('layout')

@section('content')

	<h3> Roey Swainston Blog </h3>
	<sub> Something, something, darkside ... </sub>

	<hr />

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