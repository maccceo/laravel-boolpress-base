@extends('layouts.baseLayout');

@section('content')


<div class="box--tag">
	<h3>#{{ $element -> name }}</h3>
	<p>{{ $element -> description }}</p>
	<a class="box__read" href="{{ route('post.index') }}">Torna alla home</a>
</div>

	@foreach($element -> posts as $post)
		<div class="box">
			<h3>{{ $post -> title }}</h3>
			<p class="box__author">di {{ $post -> author }}</p>
			<p><strong>Genere:</strong> {{ $post -> category -> name }}
			<br>
			{!! $post -> content !!}
			<a class="box__read" href="{{ route('post.show', $post -> id) }}">Leggi l'articolo</a>
		</div>
	@endforeach



@endsection