
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
			<div class="col-md-12" align="center">
							<ul class="nav nav-pills">
                                <li class="">
                            <a href="/lista" class="list-group-item" id="lgi0"><span class="glyphicon glyphicon-time" aria-hidden="true"></span> Menos de 2 meses</a>
                                </li>
                                <li class=""><a href="/lista_todo" class="list-group-item" id="lgi1"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Todos los anuncios</a>
                                </li>
                                <li class=""><a href="/inmobiliaria" class="list-group-item" id="lgi2"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Terrenos/Cuartos/Locales</a>
                                </li>
                                <li class=""><a href="/lista?pagina=1&queries[search]=trabajo" class="list-group-item" id="lgi3"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span> Trabajos</a>
                                </li>
                                <li class=""><a href="/lista?pagina=1&queries[search]=publicidad" class="list-group-item" id="lgi4"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span> Publicidad</a>
                                </li>
                                <li class=""><a href="/lista?pagina=1&queries[search]=mascotas" class="list-group-item" id="lgi5"><span class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></span> Mascotas</a>
                                </li>
                                <li class=""><a href="/vatodo" class="list-group-item" id="lgi6"><span class="glyphicon glyphicon-credit-card" aria-hidden="true"></span> Venta y Alquiler de Todo</a>
                                </li>
                            </ul>   
              </div>
              </div>
              <div class="row">
			<div class="col-md-12"><br>
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
	<section id="contactoIntro" class="contactoIntro"></section>

	

	<!-- Section: contact -->
    


</body><?php
include ("includes/footer.php");
	?>
<script src="js/jquery.dynatable.js"></script>
<script type="text/javascript">$('#jsonTable').dynatable();</script>
</html>
