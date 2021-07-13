@csrf
	  <div class="form-group">
	    <label for="exampleInputEmail1">Titulo</label>
	    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('title',$categoria->title) }}">
	 
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Url Clean</label>
	    <input type="text" name="url_clean" class="form-control" id="exampleInputPassword1" value="{{ old('url_clean',$categoria->url_clean)}}">
	  </div>