@extends('dashboard.master')

@section('title','Listado de Posts')

@section('content')
{{-- {{dd($posts)}} --}}

 <a class="btn btn-success mt-3 mb-3" href="{{ route('posts.create')}}">
 	Crear
 </a>
  <table class="table bg bg-light table-responsive">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Posteado</th>
      <th scope="col">Categoria</th>
      <th scope="col">Creacion</th>
      <th scope="col">Actualizacion</th>
      <th scope="col">Acciones</th>

    </tr>
  </thead>
  <tbody>
  	 @foreach($posts as $post)
    <tr>
      <th scope="row">{{ $post->id}}</th>
      <td>{{ $post->title }}</td>
      <td>{{ $post->posted  }}</td>
      <td>{{ $post->categoria->title}}</td>
      <td>{{ $post->created_at->format('d-m-Y') }}</td>
      <td>{{$post->updated_at}}</td>
      <td>
      	<a href="{{ route('posts.show',$post->id)}}" class="btn btn-info">ver</a>
      	<a href="{{ route('posts.edit',$post->id)}}" class="btn btn-success">Edit</a>
      	
      		<button class="btn btn-danger" data-toggle="modal" data-target="#deleteModal"  data-id = "{{ $post->id }}">Eliminar</button>
      		{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-bs-whatever="@mdo">Open modal for @mdo</button> --}}

      
      </td>
    </tr>
    @endforeach

  </tbody>

</table>


 {{ $posts->links() }}

 





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
         Seguro que desea borrar el Post?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <form id="formDelete" action="{{ route('posts.destroy',0)}}" data-action="{{ route('posts.destroy',0)}}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">BORRAR</button>
        </form>
        
      </div>
    </div>
  </div>
</div>



@endsection