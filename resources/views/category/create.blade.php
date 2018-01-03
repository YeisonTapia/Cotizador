@extends('admin.template')
@section('content')
	<div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading text-center ">
                    <strong>CREAR CATEGORÍA</strong>
                </div>
                 <div class="panel-body">
					{!!Form::open(['route'=>'category.store','method'=>'POST','class'=>''])!!}
						 @include('category.forms.form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection
