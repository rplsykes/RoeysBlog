@extends('layout')

@section('content')

	<h2> {{ $post->title }} </h2>
	<p style="word-wrap: break-word;"> {{ $post->content }} </p>
		
@endsection