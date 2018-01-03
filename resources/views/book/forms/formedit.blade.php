<div class="form-group">
	{!!Form::text('title',null,['class'=>'form-control','required'=>'required', 'placeholder'=>'Titulo'])!!}
</div>
<div class="form-group">
	<div class="row">
		<div class="col-md-6">
			{!! Form::label('cover', 'Imagen de portada') !!}
			{!!Form::file('cover',['class'=>'form-control-file'])!!}
		</div>
		<div class="col-md-6">
			<img src="/covers/{{$book->cover}}" style="width: 50px;">
		</div>
	</div>
</div>
<div class="form-group">
	{!!Form::textarea('description',null,['class'=>'form-control','required'=>'required', 'placeholder'=>'Descripcion'])!!}
</div>
<div class="form-group">
	{!!Form::text('isbn',null,['class'=>'form-control','required'=>'required', 'placeholder'=>'isbn'])!!}
</div>
<div class="form-group">
	<select class="form-control js-example-basic-multiple" multiple name="authors[]" >
	  	@foreach ($authors as $author)
		   	@if ($selectedauthors->contains($author->id))
		        <option value="{{ $author->id}}" selected> {{ $author->name}} </option>
		    @else
		        <option value="{{ $author->id}}"> {{ $author->name}} </option>
		    @endif  		
	  	@endforeach
	</select>
</div>
<div class="form-group">
	<select class="form-control js-example-basic-multiple" multiple name="categories[]" >
	  	@foreach ($categories as $category)
		   	@if ($selectedcategories->contains($category->id))
		        <option value="{{ $category->id}}" selected> {{ $category->name}} </option>
		    @else
		        <option value="{{ $category->id}}"> {{ $category->name}} </option>
		    @endif  		
	  	@endforeach
	</select> 
</div>
<div class="form-group">
	{!!Form::text('price',null,['class'=>'form-control','required'=>'required', 'placeholder'=>'precio'])!!}
</div>
<div class="form-group">
	{!!Form::text('year',null,['class'=>'form-control','required'=>'required', 'placeholder'=>'Año'])!!}
</div>
<div class="form-group">
	{!!Form::submit('Actualizar',['class'=>'btn btn-success btn-block'])!!}
</div>
