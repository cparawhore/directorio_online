
<?php
	include ("includes/header.php");
	?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69457617-2', 'auto');
  ga('send', 'pageview');

</script>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- Preloader -->
	<div id="preloader">
	  <div id="load"></div>
	</div>
	<?php
	include ("includes/nav.php");
	$array_dividida = array_chunk($inmuebles, 4);
	?>
	<!-- Section: services -->
    <section id="directorio" class="home-section text-center bg-gray">
		
		<div class="container"><!--plantilla-->
		Haga click en las imagenes para agrandar. Si desea publicar envie un mensaje a <b>directoriobarranca@gmail.com</b><br><br>
		<div class="row">
					<?php if(isset($array_dividida[0])){  foreach ( $array_dividida[0] as $inmueble ): ?>
                    <div class="col-sm-3 col-lg-3 col-md-3">
                        <div class="thumbnail">
                        	<?php
                        	$ruta = "img/inmuebles/temp/".$inmueble['imagen'];                        	
                        	if (file_exists($ruta)){
                        	?>
                            <a id="single_image" href=<?php echo "/img/inmuebles/temp/".$inmueble['imagen'] ?>><img src=<?php echo "/img/inmuebles/temp/".$inmueble['imagen'] ?> alt=""></a>
                            <?php
                        	}
                            ?>
                            <div class="caption">
                                <h4><?php echo $inmueble['titulo'] ?></h4>
                                <p><b>Tipo:</b> <?php echo $inmueble['tipo']." - ".$inmueble['tipo_in'] ?><br>

                                <?php if($inmueble['tipo']=='Trabajo') {?>
                                <b>Descripcion:</b> 
                                <?php } else {?><b>Descripcion: </b> <?php } ?>
                                <?php echo $inmueble['ubicacion'] ?><br>

                                <?php if($inmueble['area']!=0){ ?><b>Area:</b> <?php echo $inmueble['area']."m<sup>2</sup><br>"; }?> 
                                <b>Telefono/Celular: </b><?php  if($inmueble['cel']!=0) echo $inmueble['cel'];
                                if($inmueble['cel2']!=0) echo " / ".$inmueble['cel2'].'<br>';
                                echo '<div class="text-right">Hace '.$inmueble['diferencia'].' dia(s)</div>';
                                 ?>
                                </p>
                                
                            </div>
                            <!--div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div-->
                        </div>
                    </div>
                    <?php endforeach; }?>

                    <!--div class="col-sm-3 col-lg-3 col-md-4">
                        <div class="thumbnail">
                            <img src="http://placehold.it/320x150" alt="">
                            <div class="caption">
                                <h4 class="pull-right">$74.99</h4>
                                <h4><a href="#">Third Product</a>
                                </h4>
                                <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">31 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div-->


                </div>
                <div class="row">
					<?php if(isset($array_dividida[1])){ foreach ( $array_dividida[1] as $inmueble ): ?>
                    <div class="col-sm-3 col-lg-3 col-md-3">
                        <div class="thumbnail">
                            <a id="single_image" href=<?php echo "/img/inmuebles/temp/".$inmueble['imagen'] ?>><img src=<?php echo "/img/inmuebles/temp/".$inmueble['imagen'] ?> alt="">
                            </a>
                            <div class="caption">
                                <h4><?php echo $inmueble['titulo'] ?></h4>
                                <p><b>Tipo:</b> <?php echo $inmueble['tipo_in']." - ".$inmueble['tipo'] ?><br>
                                <b>Ubicacion:</b> <?php echo $inmueble['ubicacion'] ?><br>
                                <?php if($inmueble['area']!=0){ ?><b>Area:</b> <?php echo $inmueble['area']."m<sup>2</sup><br>"; }?> 
                                <b>Telefono/Celular: </b><?php echo $inmueble['cel'];
                                if($inmueble['cel2']!=0) echo " / ".$inmueble['cel2'].'<br>';
                                echo '<div class="text-right">Hace '.$inmueble['diferencia'].' dia(s)</div>';
                                 ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; }?>
                </div>

                <!--fin-->
		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
		<?php if($var>8) {?>
			<center>
				<ul class="pagination">
				<!--li><a href="#">&laquo;</a></li-->
				<?php
					for($i=0; $i<ceil($var/8); $i++){
						if(isset($numpage) && $num_page==$i) echo '<li class="active"><a href="/page/'.$i.'">'.$i.'</a></li>';
						else echo '<li><a href="/page/'.$i.'">'.$i.'</a></li>';
					}
				?>
				<!--li><a href="#">&raquo;</a></li-->
				</ul>
			</center><?php } ?>
		</div>
	</section>
	<!-- /Section: services -->
	

	

	<!-- Section: contact -->
    

</body>
<?php
include ("includes/footer.php");
	?><script>
$(document).ready(function() {
	$("a#single_image").fancybox({
		'transitionIn'	:	'elastic',
		'transitionOut'	:	'elastic',
		'speedIn'		:	600, 
		'speedOut'		:	200, 
		'overlayShow'	:	false
	});
})
</script>
</html>
