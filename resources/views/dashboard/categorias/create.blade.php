@extends('dashboard.master')
@section('title','Crear Categoria')

@section('content')
  @include('dashboard.partials.validation-error')
  <form  action="{{ route('categorias.store') }}" method="POST">
  	@include('dashboard.categorias._form')
	 
	  <button type="submit" class="btn btn-primary">Saved</button>
</form>
@endsection