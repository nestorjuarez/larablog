@csrf
			<div class="form-group">
				<label for="ltitle">Título</label>
				<input class="form-control" type="text" name="title" id="ltitle" value="{{ old('title',$post->title)}}">
			</div>
			<div class="form-group">
				<label for="lurl">Url Limpia</label>
				<input class="form-control" type="text" name="url_clean" value="{{ old('url_clean',$post->url_clean)}}">
				
			</div>

			<div class="form-group">
				<label for="catego">Categorias</label>
				<select name="category_id" class="form-control" id="catego">
					
					@foreach($categorias as $title => $id)
					   <option value="{{ $id }}" {{ $post->category_id == $id ? 'selected="selected" ' : ''}}>{{ $title }}</option>
					@endforeach
				</select>
				
			</div>

			<div class="form-group">
				<label for="opt">Posteado?</label>
				<select name="posted" id="opt" class="form-control">
					@include('dashboard.partials.option-yes-not',['val' => $post->posted])
				</select>
			</div>
			<div class="form-group">
				
					<label >Contenido</label>
				<textarea name="content" class="form-control" id="contenido">{{ old('content',$post->content)}}</textarea>
				
				
				
			</div>
		
