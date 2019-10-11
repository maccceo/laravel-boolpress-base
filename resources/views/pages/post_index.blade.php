@extends('layouts.baseLayout');

@section('content')

<div class="category-switch">
	<p id="category-switch__title">Seleziona per categoria:</p>

	@foreach($elements as $element)

		{{-- se non è già stato inserito aggiungilo --}}
		@if (!in_array($element -> category -> id, $categories))

			{{-- stampa --}}
			<a href="{{ route('category.show', $element -> category -> id) }}">{{ $element -> category -> name }}</a>

			{{-- non lo faccio aggiungere più --}}
			<?php $categories[] = $element -> category -> id ?>

		@endif
		
	@endforeach
</div>

@foreach($elements as $element)

	<div class="box">
		<h3>{{ $element -> title }}</h3>
		<p class="box__author">di {{ $element -> author }}</p>
		<p><strong>Genere:</strong> {{ $element -> category -> name }}
		<br>
		{!! $element -> content !!}
		<a class="box__read" href="{{ route('post.show', $element -> id) }}">Leggi l'articolo</a>
	</div>
@endforeach

@endsection
