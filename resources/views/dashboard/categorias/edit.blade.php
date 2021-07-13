@extends('dashboard.master')

@section('title','Actualizar Categorias')

@section('content')

    @include('dashboard.partials.validation-error')
      <form  action="{{ route('categorias.update',$categoria->id) }}" method="POST">
      	@method("put")
  	@include('dashboard.categorias._form')
	 
	  <button type="submit" class="btn btn-primary btn-block">Actualizar</button>
	  <a href="{{route('categorias.index')}}" class="btn btn-block btn-outline-primary">Back</a>
</form>
@endsection