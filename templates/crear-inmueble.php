
<?php
	include ("includes/header.php");

?>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- Preloader -->
	<!--div id="preloader">
	  <div id="load"></div>
	</div-->
	<?php
	include ("includes/nav.php");
	?>
	<!-- Section: services -->
    <section id="directorio" class="home-section text-center bg-gray">
		<div class="container">
		<!--plantilla-->
		<?php if(!isset($mensajes)) { ?>
		<div class="alert alert-info">
                    <strong>Atencion!</strong> Tu nombre y DNI <strong>NO</strong> seran publicados.
                    Los anuncios que se pongan <strong>seran revisados antes de ser publicados</strong>.
                    No introducir datos falsos, incorrectos o vulgaridades, de lo contrario, nuestros gatos altamente entrenados no publicaran su anuncio
                </div><?php } 

                else {?><div class="alert alert-warning">
                <?php
                	foreach ( $mensajes as $mensaje ): ?>
                		<strong><?php echo $mensaje.'<br>'; ?></strong>
                		<?php
                	endforeach;?>
                		No se preocupe, si lo ha hecho correctamente su anuncio sera publicado. <a href="/inmueble/">Volver a inmuebles</a>
                	</div>
                	<?php
                }
                ?>

		<div class="row"><form id="contact-form" method="post"  enctype="multipart/form-data" action="christian08">
                    <div class="col-md-4">
                    <div class="form-group">
                      <label>Titulo del aviso / anuncio</label>
					  <input type="text" class="form-control" placeholder="Lo que publica" name="tit" autocomplete="off">
					</div>

					</div>
					<div class="col-md-4">


					<div class="form-group">
                      <label>Opcion</label>
					  <select id="opciones" class="form-control" name="tip_ven">
						  <option value="Venta">Venta</option>
						  <option value="Alquiler">Alquiler</option>
						  <option value="Trabajo">Trabajo</option>
					</select>
					</div>

					<div class="form-group" >
                      <label>Subopcion</label><div id="nuevoInput"></div>
					  <select class="form-control" id="subopciones" name="tip_inm">
						  <option value="Terreno">Terreno</option>
						  <option value="Casa">Casa</option>
						  <option value="Departamento">Departamento</option>
						  <option value="Local Comercial">Local Comercial</option>
					</select>
					</div>
					<div class="form-group">
                      <label>Ubicacion / Descripcion</label>
					  <textarea class="form-control" rows="3" name="ubi"></textarea>
					</div>

					<div class="form-group">
                      <label>Area</label><div class="input-group">
					  <input type="text" class="form-control" placeholder="" name="are" autocomplete="off"><span class="input-group-addon">m<sup>2</sup></span></div>
					</div>

					</div>
					<div class="col-md-4">

					<div class="form-group">
                      <label>Celular nº1</label><div class="input-group">
					  <input type="text" class="form-control" placeholder="" name="cel1" autocomplete="off"><span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span></div>
					</div>

					<div class="form-group">
                      <label>Celular nº2</label><div class="input-group">
					  <input type="text" class="form-control" placeholder="" name="cel2" autocomplete="off"><span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span></div>
					</div>

					<div class="form-group">
 					  <label for="ejemplo_archivo_1">Adjuntar Imagen</label>
 					  <input type="file" id="ejemplo_archivo_1" name="img">
 					  <p class="help-block">Suba la imagen del inmueble o del aviso.</p>
 					</div>
                    
                    </div>
					<div class="col-md-12">
						<input type="submit" value="Enviar!" class="btn btn-success btn-lg">
					</div> 
                    </form>

                </div>
                <!--fin-->
		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
		</div>
	</section>
	<!-- /Section: services -->
	

	

	<!-- Section: contact -->
    
<?php
include ("includes/footer.php");
	?>
<script>
 $(document).ready(function(){
 	function cambiar(index){
 		/*var newOptions = {"Option 1": "value1",
		  "Option 2": "value2",
		  "Option 3": "value3"
		};*/
		
		var $el = $("#subopciones");
		 // 2 = Trabajo
		if(index == 2){
			/*$el.empty();
				$.each(newOptions, function(value,key) {
			  		$el.append($("<option></option>")
			    	 .attr("value", value).text(key));
			});*/
			$("#subopciones").remove();
			$("#nuevoInput").append('<input type="text" class="form-control" placeholder="Trabajo" name="tip_inm" autocomplete="off">');
		}
 	}

    $("#opciones").change(function(){
		cambiar($("#opciones")[0].selectedIndex);
	});
});
</script>
</body>

</html>
