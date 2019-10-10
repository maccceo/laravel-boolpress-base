@extends('layouts.baseLayout');

@section('content')

<div class="category-switch">
	<p id="category-switch__title">Seleziona per categoria:</p>
	@foreach($categories as $category)
		<p>{{ $category }}</p>
	@endforeach
</div>

@foreach($elements as $element)

	<div class="box">
		<h3>{{ $element -> title }}</h3>
		<p class="box__author">di {{ $element -> author }}</p>
		<p><strong>Genere:</strong> {{ $element -> category -> name }}
		<br>
		{{ $element -> content }}
		<a class="box__read" href="{{ route('post.show', $element -> id) }}">Leggi l'articolo</a>
	</div>
@endforeach

@endsection
