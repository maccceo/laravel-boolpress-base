@extends('layouts.baseLayout');

@section('content')

@foreach($elements as $element)
	<div class="box">
		<h3>{{ $element -> title }}</h3>
		<p class="box__author">di {{ $element -> author }}</p>
		<p><strong>Genere:</strong> {{ $element -> category -> name }}
		<br>
		{{ $element -> content }}
		<a class="box__read" href="#">Leggi l'articolo</a>
	</div>
@endforeach

@endsection
