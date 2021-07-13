@extends('dashboard.master')

@section('title','Listado de categorias')

@section('content')

<a href="{{ route('categorias.create')}}" class="btn btn-success btn-sm">Crear</a>
{{-- {{ dd($categorias) }} --}}
	<table class="table table-dark mt-1">
		  <thead>
		    <tr>
		      <th scope="col">Id</th>
		      <th scope="col">Title</th>
		      <th scope="col">Url Clean</th>
		      <th scope="col">Updated</th>
		      <th scope="col">Acciones</th>
		    </tr>
		  </thead>
		  <tbody>
		  	@foreach($categorias as $categoria)
		    <tr>
		      <th scope="row">{{$categoria->id}}</th>
		      <td>{{$categoria->title}}</td>
		      <td>{{$categoria->url_clean}}</td>
		      <td>{{$categoria->updated_at->format('d-M-Y')}}</td>
		      <td>
		      	<a href="{{route('categorias.show',$categoria->id)}}" class="btn btn-info btn-sm">Ver</a>
		      	<a href="{{ route('categorias.edit',$categoria->id)}}" class="btn btn-success btn-sm">Editar</a>
		      	<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal" data-id="{{ $categoria->id}}">Eliminar</button>

		      </td>
		    </tr>
		   @endforeach
		  </tbody>
		</table>
     {{$categorias->links()}}



<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Esta seguro de borrar la categoria?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <form id="formDelete"action="{{ route('categorias.destroy',0)}}" data-action="{{ route('categorias.destroy',0)}}" method="POST">
        	@csrf @method('DELETE')
        	<button type="submit" class="btn btn-danger">Borrar</button>	
        </form>
        
      </div>
    </div>
  </div>
</div>

<script>
 window.onload=function(){
	$('#deleteModal').on('show.bs.modal', function (event) {
		console.log('hola')
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('id') 
  action = $('#formDelete').attr('data-action').slice(0,-1);
  action += id;
  $('#formDelete').attr('action',action)

  var modal = $(this)
  modal.find('.modal-title').text('Vas a borrar la Categoria ' + id)
 
});
}
</script>
@endsection

