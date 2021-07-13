@extends('dashboard.master')

@section('title','Mostrar Post')

@section('content')

	
	<div class="col-md-6 fondo border border-secondary fondocreate rounded mt-4 p-2">

	  @include('dashboard.partials.validation-error')
		
			<div class="form-group">
				<label for="ltitle">Título</label>
				<input readonly class="form-control" type="text" name="title" id="ltitle" value="{{ $post->title}}">
			</div>
			<div class="form-group">
				<label for="lurl">Url Limpia</label>
				<input readonly class="form-control" type="text" name="url_clean" value="{{ $post->url_clean}}">
				
			</div>
			<div class="form-group">
				<label for="content">Contenido</label>
				<textarea readonly name="content" id="content" cols="30" rows="10" class="form-control">{{ $post->content }}</textarea>
			
			</div>

		
	</div>
	

@endsection
