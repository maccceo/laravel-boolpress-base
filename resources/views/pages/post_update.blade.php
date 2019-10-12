@extends('layouts.baseLayout');

@section('content')


<div class="box--big">
	<form method="post" action="{{ route('post.update', $element -> id) }}">
		@csrf
		@method('POST')
		<label for="title">Titolo:</label><br>
		<input type="text" value="{{ $element -> title }}" name="title"><br>

		<label for="author">Autore:</label><br>
		<input type="text" value="{{ $element -> author }}" name="author"><br>

		<label for="category_id">Categoria:</label><br>
		<select name="category_id">

		<?php $duplicates = []; ?>
		@foreach($categories as $category)
			{{-- se non è già stato inserito aggiungilo --}}
			@if (!in_array($category -> category -> id, $duplicates))

				{{-- se è la stessa categoria del post da modificare la imposto come default--}}
				@if ($category -> category -> id == $element -> category -> id)
					<option value="{{ $category -> category -> id }}" selected>{{ $category -> category -> name }}</option>
				@else 
					<option value="{{ $category -> category -> id }}">{{ $category -> category -> name }}</option>
				@endif

				{{-- categoria da non aggiungere più --}}
				<?php $duplicates[] = $category -> category -> id ?>

			@endif
		@endforeach
		</select><br>

		<label for="content">Testo articolo:</label><br>
		<textarea rows="20" cols="50" name="content">{{ $element -> content }}</textarea><br><br>

		<input type="submit" value="Invia articolo"></form>
	</form>

	<a class="box__read" href="{{ route('post.index') }}">Torna alla home</a>
</div>


@endsection