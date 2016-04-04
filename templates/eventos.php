
<?php
	include ("includes/header.php");
	?>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- Preloader -->
	<div id="preloader">
	  <div id="load"></div>
	</div>
	<?php
	include ("includes/nav.php");
	?>
	<!-- Section: services -->
    <section id="directorio" class="home-section text-center bg-gray">
		
		<div class="container"><!--plantilla-->
		<div class="row">
					<div class="col-md-2">
					</div>
					<?php foreach ( $inmuebles as $inmueble ){ ?>
					<div class="col-md-8">
                <div class="thumbnail">
                    <img class="img-responsive" src=<?php echo "/img/eventos/temp/".$inmueble['imagen']; ?> alt="">
                    <br><br>
                    <div class="caption-full">
                    	<h4 class="pull-right">
                    		<?php if($inmueble['diferencia']>0) echo "Faltan ".$inmueble['diferencia']." días!"; 
                    		if($inmueble['diferencia']==0) echo "El evento es hoy!";
                    		if($inmueble['diferencia']<0) echo "Evento finalizado";
                    		?>
                    	</h4>
                        <h4><a href="#"><?php echo $inmueble['titulo']; ?></a>
                        </h4>
                        <p><?php echo $inmueble['descripcion']; ?></p>
                    </div>
                </div>

            		</div>
        
        <?php } ?>
        <div class="col-md-2">
		</div>    
		</div>
        </div>   
	</section>
	<!-- /Section: services -->
	

	

	<!-- Section: contact -->
    


</body>
<?php
include ("includes/footer.php");
	?>
</html>
