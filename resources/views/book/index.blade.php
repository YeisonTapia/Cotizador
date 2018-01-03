@extends('admin.template')
@section('content')
	<div class="row">
		 <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
					<i class="fa fa-book" aria-hidden="true"></i><strong> Libros</strong>
					<a href="/book/create" class="pull-right">Añadir <i class="fa fa-plus-circle" aria-hidden="true"></i> </a>
                </div>
                <div class="panel-body">
                	@include('errors.alerts')
                	<div class="table table-responsive">
						<table class="table table-bordered">
							<tr>
								<th>ISBN</th>
								<th>Título</th>
								<th>Precio</th>
								<th>Año</th>
								<th>Autores</th>
								<th>Categorías</th>
								<th>Opciones</th>
							 </tr>
							 @foreach($books as $book)
								 <tr>
								 	<td>{{ $book->isbn }}</td>
								 	<td>{{ $book->title }}</td>
								 	<td>{{ $book->price }}</td>
								 	<td>{{ $book->year }}</td>
								 	<td>
								 	@foreach($book->authors as $author)
								 		<span class="badge badge-info"> <i class="fa fa-user" aria-hidden="true"></i> {{ $author->name }}</span><br>
							 		@endforeach
							 		</td>
							 		<td>
							 		@foreach($book->categories as $category)
							 			<div class="badge badge-success"> <i class="fa fa-tags" aria-hidden="true"></i> {{ $category->name }} </div><br>
							 		@endforeach
							 		</td>
							 		<td class="text-center">
							 			<a href="/book/{{ $book->id }}/edit" class="btn btn-warning btn-sm">
							 				<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
							 			</a>
										<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
										 	<i class="fa fa-close" aria-hidden="true"></i>
										</button>
							 		</td>
								 </tr>
							 @endforeach
						</table>
						<div class="col-md-offset-5">
							{!!$books->render()!!}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@include('errors.confirmationbook')
@endsection



