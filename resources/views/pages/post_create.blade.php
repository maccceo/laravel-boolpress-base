@extends('layouts.baseLayout');

@section('content')


<div class="box--big">
	<form method="post" action="{{ route('post.store') }}">
		@csrf
		@method('POST')
		<label for="title">Titolo:</label><br>
		<input type="text" name="title"><br>

		<label for="author">Autore:</label><br>
		<input type="text" name="author"><br>

		<label for="category_id">Categoria:</label><br>
		<select name="category_id">

		<?php $categories = []; ?>
		@foreach($elements as $element)
			{{-- se non è già stato inserito aggiungilo --}}
			@if (!in_array($element -> category -> id, $categories))

				<option value="{{ $element -> category -> id }}">{{ $element -> category -> name }}</option>

				{{-- non lo faccio aggiungere più --}}
				<?php $categories[] = $element -> category -> id ?>

			@endif
		@endforeach
		</select><br>

		<label for="content">Testo articolo:</label><br>
		<textarea rows="20" cols="50" name="content"></textarea><br><br>

		<input type="submit" value="Invia articolo"></form>
	</form>

	<a class="box__read" href="{{ route('post.index') }}">Torna indietro</a>
</div>


@endsection