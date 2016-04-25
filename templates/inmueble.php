<?php
    
        
    if(count($inmuebles)==0) {?><script type="text/javascript">window.location="http://directoriobarranca.azurewebsites.net";</script>
    

	<?php } include ("includes/header.php");?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69457617-2', 'auto');
  ga('send', 'pageview');

</script>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5&appId=176871602514740";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

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
       <br>

		<div class="alert alert-info" role="alert">
        Si desea publicar envie un mensaje a <strong>directorionortechico@gmail.com</strong><button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
      </div>

      <br><br>
		<div class="row">
					<?php if(isset($array_dividida[0])){  foreach ( $array_dividida[0] as $inmueble ): ?>
                    <div class="col-sm-3 col-lg-3 col-md-3">
                    	<div class="thumbnail">
                       		<?php
                        	$ruta = "img/inmuebles/temp/".$inmueble['imagen'];                        	
                        	if (file_exists($ruta)){
                        	?>

                            <a  id="single_image" href=<?php echo "/img/inmuebles/temp/".$inmueble['imagen'] ?>><img src=<?php echo "/img/inmuebles/temp/".$inmueble['imagen'] ?> alt="" style="height: 110px"></a>
                           
                            <?php
                        	}
                            ?> 

                            <div class="caption">
                                <h4><?php echo $inmueble['titulo'] ?></h4>
                                 

                                <p><b>Tipo:</b> <?php echo $inmueble['tipo']." - ".$inmueble['tipo_in'] ?><br>

                                
                                <b>Descripcion:</b> 
                               <?php if($inmueble['ubicacion']=="") echo "No especificado";
                                else {echo $inmueble['ubicacion']; }
                                ?><br>

                                <?php if($inmueble['area']!=0){ ?><b>Area:</b> <?php echo $inmueble['area']."m<sup>2</sup><br>"; }?> 
                                <span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> <b> Telefono/Celular: </b> 
                                <?php  if($inmueble['cel']!=0) echo $inmueble['cel'];
									if($inmueble['cel2']!=0) echo " / ".$inmueble['cel2'].'<br>';?>
                                <?php 
                                if($inmueble['diferencia']==0) echo '<div class=""><span class="glphicon glyphicon-time" aria-hidden="true"></span> Subido hoy día!</div>';
                                else { echo '<div class=""><span class="glyphicon glyphicon-time" aria-hidden="true"></span> Hace '.$inmueble['diferencia'].' dia(s)</div>'; }
                                 ?><br>
                                 <h4 style="cursor: pointer"><span id="report<?php echo $inmueble['id']?>" 
                                 onClick="realizaProceso(<?php echo $inmueble['id']?>);" 
                                 class="label label-warning" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Reportar</span></h4>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; }?>
                </div>


             <div class="fb-like" data-href="http://directoriobarranca.azurewebsites.net/" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
             <br><br>

                <div class="row">
					<?php if(isset($array_dividida[1])){ foreach ( $array_dividida[1] as $inmueble ): ?>
                    <div class="col-sm-3 col-lg-3 col-md-3">
                        <div class="thumbnail">
                            <a id="single_image" href=<?php echo "/img/inmuebles/temp/".$inmueble['imagen'] ?>><img src=<?php echo "/img/inmuebles/temp/".$inmueble['imagen'] ?> alt="" style="height: 110px">
                            </a>
                            <div class="caption">
                                <h4><?php echo $inmueble['titulo'] ?></h4>
                                <p><b>Tipo:</b> <?php echo $inmueble['tipo_in']." - ".$inmueble['tipo'] ?><br>
                                <b>Descripcion:</b> <?php if($inmueble['ubicacion']=="") echo "No especificado"; 
                                else {echo $inmueble['ubicacion']; }
                                ?><br>
                                <?php if($inmueble['area']!=0){ ?><b>Area:</b> <?php echo $inmueble['area']."m<sup>2</sup><br>"; }?> 
                                <b><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Telefono/Celular: </b><?php echo $inmueble['cel'];
                                if($inmueble['cel2']!=0) echo " / ".$inmueble['cel2'].'<br>';
                                if($inmueble['diferencia']==0) echo '<div class=""><span class="glyphicon glyphicon-time" aria-hidden="true"></span> Subido hoy día!</div>';
                                else { echo '<div class=""><span class="glyphicon glyphicon-time" aria-hidden="true"></span> Hace '.$inmueble['diferencia'].' dia(s)</div>'; }
                                 ?><br>
                                 <h4 style="cursor: pointer"><span id="report<?php echo $inmueble['id']?>" onClick="realizaProceso(<?php echo $inmueble['id']?>);" class="label label-warning" data-toggle="modal" data-target="#myModal"><span class="
glyphicon glyphicon-remove" aria-hidden="true"></span> Reportar</span></h4>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; }?>
                </div>

                <!--fin-->
		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-1">
			</div>
		</div>
		<?php if($var>8) {?>
			<center>
				<ul class="pagination pagination-lg">
				<?php 
                    $ultimaPagina=0;
                    for($i=0; $i<ceil($var/8); $i++){
                        $ultimaPagina=$i;
                    }
                    
                    if((int)$num_page!=0) echo '<li><a href="/page/'.($num_page-1).'"">Pagina Anterior</a></li>';
					for($i=0; $i<ceil($var/8); $i++){
						if(isset($num_page) && $num_page==$i) echo '<li class="active"><a href="/page/'.$i.'">'.$i.'</a></li>';
						else echo '<li><a href="/page/'.$i.'">'.$i.'</a></li>';
					}
                    if((int)$num_page!=$ultimaPagina) echo '<li><a href="/page/'.($num_page+1).'"">Pagina siguiente <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a></li>';
				?>
				</ul>
			</center><?php } ?>
             <br><br>
		</div>
	</section>
	<!-- /Section: services -->
	

	


  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-search" aria-hidden="true"></span> Anuncio Reportado</h4>
      </div>
      <div class="modal-body">
        Gracias por su informacion, los datos seran revisados y verificados
        <p align="right">BarrancaJS</p>
      </div>
    </div>
  </div>
</div>  

</body>
<?php
include ("includes/footer.php");
	?>
  <script>

$(document).ready(function() {
    eliminarBotones();
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
