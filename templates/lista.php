
<?php
	include ("includes/header.php");
	?>
	


<link href="css/jquery.dynatable.css" rel="stylesheet" type="text/css">
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- Preloader -->
	<div id="preloader">
	  <!--div id="load"></div-->
	</div>
	<?php
	include ("includes/nav.php");
	$array = $inmuebles;
	?>
	<!-- Section: services -->
    <section id="directorio" class="home-section text-center bg-white">
		
		<div class="container"><!--plantilla-->
		<div class="row">
			<div class="col-md-3">
			<div class="list-group">
                            <a href="/lista" class="list-group-item" id="lgi0">Menos de 2 meses</a>
                            <a href="/lista_todo" class="list-group-item" id="lgi1">Todos los anuncios</a>
                            <a href="/inmobiliaria" class="list-group-item" id="lgi2">Terrenos/Cuartos/Locales</a>
                            <a href="/lista?pagina=1&queries[search]=trabajo" class="list-group-item" id="lgi3">Trabajos</a>
                            <a href="/lista?pagina=1&queries[search]=publicidad" class="list-group-item" id="lgi4">Publicidad</a>
                            <a href="/lista?pagina=1&queries[search]=mascotas" class="list-group-item" id="lgi5">Mascotas</a>
                            <a href="/vatodo" class="list-group-item" id="lgi6">Venta y Alquiler de Todo</a>
                        </div>
			</div>
			<div class="col-md-9">
				<table id="jsonTable" class="table table-hover table-striped table-bordered">
					<thead><th>Titulo</th><th>Tipo de Anuncio</th><th>Especificacion</th><th>Descripcion</th><th>Telefono #1</th><th>Telefono #2</th>
					</thead>
					<tbody>
						<?php foreach($array as $inmu)
						{
						echo "<tr onmouseover='cambiacolor_over(this)' onmouseout='cambiacolor_out(this)'><td>".$inmu['titulo']."</td><td>".$inmu['tipo']."</td><td>".$inmu['tipo_in']."</td><td>".$inmu['ubicacion']."</td><td>".$inmu['cel']."</td><td>".$inmu['cel2']."</td></tr>";
						}
						?>
					</tbody>
				</table>
			</div>
		</div>

	</section>
	<!-- /Section: services -->
	

	

	<!-- Section: contact -->
    
<?php
include ("includes/footer.php");
	?>

</body>
<script src="js/jquery.dynatable.js"></script>
<script type="text/javascript">$('#jsonTable').dynatable();</script>
</html>
