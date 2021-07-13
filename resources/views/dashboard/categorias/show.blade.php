@extends('dashboard.master')
@section('title','Categoria')

@section('content')
 <div class="form-group">
				<label for="ltitle">Título</label>
				<input class="form-control" type="text" name="title" id="ltitle" value="{{ $categoria->title}}">
			</div>
			<div class="form-group">
				<label for="lurl">Url Limpia</label>
				<input class="form-control" type="text" name="url_clean" value="{{ $categoria->url_clean}}">
				
			</div>
			
			<a href="{{route('categorias.index')}}" class="btn btn-success">Back</a>
@endsection