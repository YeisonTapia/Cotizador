@extends('admin.template')
@section('content')
	<div class="row">
	 	<div class="col-md-10 col-md-offset-1">
        	<div class="panel panel-default">
            	<div class="panel-heading">
					<i class="fa fa-user" aria-hidden="true"></i> <strong> Autores</strong>
					<a href="/author/create" class="pull-right">Añadir <i class="fa fa-plus-circle" aria-hidden="true"></i></a>
				</div>
	            <div class="panel-body">
	            	@include('errors.alerts')
	            	<table class="table table-bordered">
						<tr>
							<th>Nombres</th>
							<th>Opciones</th>
						 </tr>
						 @foreach($authors as $author)
							 <tr>
							 	<td>{{ $author->name }}</td>
							 	<td class="text-center">
							 		<a href="/author/{{ $author->id }}/edit" class="btn btn-warning btn-sm">
								 		<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
									</a>
									<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
									 	<i class="fa fa-close" aria-hidden="true"></i>
									</button>
							 	</td>
							 </tr>
						 @endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
@include('errors.confirmationauthor')
@endsection



