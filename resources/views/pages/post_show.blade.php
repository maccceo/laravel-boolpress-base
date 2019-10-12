@extends('layouts.baseLayout');

@section('content')


<div class="box--big">
	<h3>{{ $element -> title }}</h3>
	<p class="box__author">di {{ $element -> author }}</p>
	<p><strong>Genere:</strong> {{ $element -> category -> name }}
	<br>
	{!! $element -> content !!}
	<br>
	<p><strong>Tags:</strong>
		@foreach($element -> tags as $tag)
		<a href="{{ route('tag.show', $tag -> id) }}">#{{ $tag -> name }}</a> 
		@endforeach
	</p>

	<a class="box__read" href="{{ route('post.index') }}">Torna alla home</a>
</div>


@endsection