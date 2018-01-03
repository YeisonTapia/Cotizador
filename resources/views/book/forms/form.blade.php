<div class="form-group">
	{!!Form::text('title',null,['class'=>'form-control','required'=>'', 'placeholder'=>'Título'])!!}
</div>
<div class="form-group">
	{!! Form::label('cover', 'Imagen de portada') !!}
	{!!Form::file('cover',['class'=>'form-control-file'])!!}
</div>
<div class="form-group">
	{!!Form::textarea('description',null,['class'=>'form-control','required'=>'required', 'placeholder'=>'Descripción'])!!}
</div>
<div class="form-group">
	{!!Form::number('isbn',null,['class'=>'form-control','required'=>'required', 'placeholder'=>'ISBN'])!!}
</div>
<div class="form-group">
	{!!Form::select('authors[]', $authors, null, ['class' => 'form-control js-example-basic-multiple', 'multiple', 'placeholder'=>'Autores'])!!}
</div>
<div class="form-group">
	{!!Form::select('categories[]', $categories, null, ['class' => 'form-control js-example-basic-multiple', 'multiple', 'placeholder'=>'Categorias'])!!}
</div>
<div class="form-group">
	{!!Form::number('price',null,['class'=>'form-control','required'=>'required', 'placeholder'=>'Precio'])!!}
</div>
<div class="form-group">
	{!!Form::number('year',null,['class'=>'form-control','required'=>'required', 'placeholder'=>'Año'])!!}
</div>
<div class="form-group">
	{!!Form::submit('Guardar',['class'=>'btn btn-success btn-block'])!!}
</div>