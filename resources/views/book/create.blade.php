@extends('admin.template')
@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading text-center ">
                    <strong>AÑADIR LIBRO</strong>
                </div>
                 <div class="panel-body">
                 	@include('errors.errors')
					{!!Form::open(['route'=>'book.store','method'=>'POST','class'=>'form', 'files' => true])!!}
						 @include('book.forms.form')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection
