<?php $message=Session::get('message') ?>
@if($message == 'store')
	<div class="alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		Registro creado de manera correcta
	</div>
@elseif ($message == 'update')
	<div class="alert alert-warning alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		Registro actualizado de manera correcta
	</div>
@elseif ($message == 'destroy')
	<div class="alert alert-danger alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		Registro eliminado de manera correcta
	</div>
@endif

