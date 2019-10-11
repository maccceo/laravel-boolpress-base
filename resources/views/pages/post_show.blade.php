@extends('layouts.baseLayout');

@section('content')


<div class="box--big">
	<h3>{{ $element -> title }}</h3>
	<p class="box__author">di {{ $element -> author }}</p>
	<p><strong>Genere:</strong> {{ $element -> category -> name }}
	<br>
	{!! $element -> content !!}
	<a class="box__read" href="{{ url()->previous() }}">Torna indietro</a>
</div>


@endsection