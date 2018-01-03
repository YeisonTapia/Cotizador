@extends('admin.template')
@section('content')
	<div class="row">
	 	<div class="col-md-10 col-md-offset-1">
        	<div class="panel panel-default">
            	<div class="panel-heading">
					<i class="fa fa-user" aria-hidden="true"></i> <strong>Crear Autor</strong>
				</div>
	            <div class="panel-body">
	            	{!!Form::open(['route'=>'author.store','method'=>'POST','class'=>''])!!}
						 @include('author.forms.form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection
