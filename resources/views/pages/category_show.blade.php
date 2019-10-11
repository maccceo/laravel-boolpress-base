@extends('layouts.baseLayout')

@section('content')

<div class="category-switch">
	<p id="category-switch__title">Genere: {{ $elements[0] -> category -> name }}</p>
	<a href="{{ route('post.index') }}">Torna alla homepage</a>
</div>

@foreach($elements as $element)

	<div class="box">
		<h3>{{ $element -> title }}</h3>
		<p class="box__author">di {{ $element -> author }}</p>
		<br>
		{{ $element -> content }}
		<a class="box__read" href="{{ route('post.show', $element -> id) }}">Leggi l'articolo</a>
	</div>
@endforeach

@endsection