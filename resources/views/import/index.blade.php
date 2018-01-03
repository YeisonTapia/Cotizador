@extends('admin.template')
@section('content')
	<div class="container-fluid">
		<h3>Importador</h3>
		{!!Form::open(['route'=>'import.store','method'=>'POST','class'=>''])!!}
			 {!!Form::file('importaciones')!!}
			 {!!Form::submit('Procesar',['class'=>'btn'])!!}
		{!! Form::close() !!}
	</div>
@endsection

