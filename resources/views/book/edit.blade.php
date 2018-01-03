@extends('admin.template')
@section('content')
	<div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading text-center ">
                    <strong>EDITAR LIBRO</strong>
                </div>
                 <div class="panel-body">
					{!!Form::model($book,['route'=> ['book.update',$book->id],'method'=>'PUT','class'=>'form', 'files' => true])!!}
						 @include('book.forms.formedit')
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
@endsection