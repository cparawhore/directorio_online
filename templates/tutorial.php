<?php
	include ("includes/header.php");
	?>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<div id="preloader">
	  <div id="load"></div>
	</div>
	<?php
	include ("includes/nav.php");
	?>
    <section id="directorio" class="home-section text-center">
		
		<div class="container">
		<div class="row">
			<div class="col-md-10 text-left">
				<h2>Empezando</h2>
				
				<h3>Pagina principal</h3>
				<p>En la pagina principal se veran los 8 ultimos anuncios/avisos registrados en la base de datos. Estos contienen una imagen en miniatura del aviso. Haciendo click a esta se podra ver la foto completa, debajo de esta estan los datos mas importantes.<br>
				<b>Tipo:</b> Se describe en la primera palabra un 'genero' del aviso, seguido de un 'sub-genero', esto para realizar una mejor busqueda en la base de datos.<br>
				<b>Descripción:</b> UBICACION (si es que se da) y descripcion general.<br>
				Luego se indica los numeros de telefono y la antiguedad del aviso. Luego de 60 dias el aviso ya no se mostrará.<br>
				<img src="img/tut4.jpg" alt="Herramientas">
				</p>
				<p><h3>Boton REPORTAR</h3>
				El boton REPORTAR se debe usar solamente en caso de que el aviso proporcione informacion falsa o los servicios, celulares, etc. ya no esten disponibles<br>
				<img src="img/tut5.jpg" alt="Herramientas">
				</p>
				<p><h3>Pestañas</h3>
				Por ahora en la pagina hay 4 pestañas, la pagina esta en constante cambio.<br><br>
				<img src="img/tut1.jpg" alt="Herramientas">
				<b>Buscar</b><br>
				En la parte superior hay unos botones con unas cuantas categorias, debajo de esta al costado de la palabra Mostrar una cantidad para mostrar.<br>
				En la caja de busqueda se escribe un solo termino y se presiona la tecla 'enter'<br>
				<img src="img/tut2.jpg" alt="Herramientas"><br>
				Se mostraran los resultados parecidos, se busca en cada campo de las tablas
				<img src="img/tut3.jpg" alt="Herramientas">
				</p>
				*Las imagenes son referenciales, la pagina esta en constante cambio
			</div>  
		</div>
        </div>  

	</section>
</body>

<?php
include ("includes/footer.php");
	?>
</html>
