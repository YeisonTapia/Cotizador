<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,600,900" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Cotizador</title>
    <!-- Bootstrap core CSS -->
    {!!Html::style ('vendor/bootstrap/css/bootstrap.min.css')!!}
    {!!Html::style ('https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css')!!}
    <!-- Custom styles for this template -->
    {!!Html::style ('css/estilos.css')!!}

</head>
<body>
	
	<div id="wrapper" class="toggled">	
		@include('front.lateral')
		<a href="#" id="menu-toggle" onclick="ocultarmenu()">  <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
		<div id="page-content-wrapper">

		    <div class="container-fluid">
				<!-- ///////////////// CABECERA IMAGEN /////////////////////-->
				<div class="cabecera">
				    <h2 class="title-cabecera">Cotizador</h2>
				</div>
				<!-- ///////////////// CABECERA IMAGEN /////////////////////-->
				<!-- Barra Informacion -->
				<div class="barra-info">
				</div>
				<!-- Barra Informacion -->
				
				<div id="tabla"></div>
		    </div>
    		<!-- /#page-content-wrapper -->
		</div>
		@include('front.modal')
	</div>
	<!-- Scripts -->
    {!!Html::script('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js')!!}
    {!!Html::script('//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js')!!}
    {!!Html::script('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js')!!}
    {!!Html::script('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js')!!}
    {!!Html::script('js/script.js')!!}
    <!-- Bootstrap core JavaScript -->
</body>
</html>
