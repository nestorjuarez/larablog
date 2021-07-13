<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>

	<link rel="stylesheet" href="{{ asset('css/app.css')}}">
	
	{{-- <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script> --}}



	<style>
		.fondo{
			 background-image: url('https://image.freepik.com/free-photo/young-brown-french-bulldog-playing-isolated-white-studio-wall_155003-31898.jpg') ;
            /* Full height */
            height: 100%;
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
			/*-webkit-filter: blur(5px);
		    -moz-filter: blur(5px);
		    -o-filter: blur(5px);
		   -ms-filter: blur(5px);
			   filter: blur(5px);*/
		}
	</style>
    

</head>
<body>
	<div id="app">
		
		@include('dashboard.partials.nav-header-main')
		<div class="container p-2 bg-white m-2 mx-auto">
		    @include('dashboard.partials.session-flash-status')
			@yield('content')
		</div>

	</div>
	
	

<script>
  window.onload=function(){
      $('#deleteModal').on('show.bs.modal', function (event) {
        console.log("modal abierto")
      var button = $(event.relatedTarget) // Button that triggered the modal
      var id = button.data('id') 
      action = $('#formDelete').attr('data-action').slice(0,-1);
      action += id;
      $('#formDelete').attr('action',action);


      var modal = $(this)
      modal.find('.modal-title').text('Vas a borrar el post: ' + id)
      // modal.find('.modal-body input').val(recipient)
    });
    };
</script>

<script src="{{ asset('js/app.js')}}"></script>
</body>

	
</html>