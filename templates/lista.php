
<?php
	include ("includes/header.php");
	?>
	

<script>
function cambiacolor_over(celda){ celda.style.backgroundColor="#ff0000" } 
function cambiacolor_out(celda){ celda.style.backgroundColor="#ffffff" }
</script>

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
    <section id="directorio" class="home-section text-center bg-gray">
		
		<div class="container"><!--plantilla-->
		<div class="row">
			<div class="col-md-2">
			</div>
			<div class="col-md-8">
				<table id="jsonTable" class="table table-striped table-bordered">
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
			<div class="col-md-2">
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
<script>
	$('#jsonTable').dynatable();
</script>
</html>
