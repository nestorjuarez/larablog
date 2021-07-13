@extends('dashboard.master')

@section('title','Crear Post')

@section('content')

	
	<div class="col-md-6 fondo border border-secondary fondocreate rounded mt-4 p-2">
	
	  @include('dashboard.partials.validation-error')
		<form action={{ route('posts.store')}} method="POST">
			
			@include('dashboard.posts._form')
			<input type="submit" value="Enviar">
		</form>
	</div>
	

@endsection
