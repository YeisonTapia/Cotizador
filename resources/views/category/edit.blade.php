@extends('admin.template')
@section('content')
	<div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong>EDITAR CATEGORÍA</strong>
                </div>
                 <div class="panel-body">
					{!!Form::model($category,['route'=> ['category.update',$category->id],'method'=>'PUT','class'=>''])!!}
			 			@include('category.forms.form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection