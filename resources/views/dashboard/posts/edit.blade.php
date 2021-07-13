@extends('dashboard.master')

@section('title','Editar Post')

@section('content')

	
	<div class="col-md-6 fondo border border-secondary fondocreate rounded mt-4 p-2">

	  @include('dashboard.partials.validation-error')
		<form action={{ route('posts.update',$post->id) }} method="POST">
			@method('put') 
			@include('dashboard.posts._form')

			<input type="submit" value="Actualizar" class="btn btn-primary btn-block">
		</form>
		<form action="{{ route('posts.image',$post) }}" method="POST" enctype="multipart/form-data">@csrf
			<div class="row mt-3">
				<div class="col-10">
					<input type="file" name="image" id="" class="form-control">
				</div>
				<div class="col-2">
					<input type="submit" value="Subir" class="btn btn-primary">		
				</div>
			</div>
			
			
		</form>
	</div>
@endsection