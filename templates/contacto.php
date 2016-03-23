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

	
	

	<!-- Section: contact -->
    <section id="contact" class="home-section text-center">
		<div class="heading-contact">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>CONTACTENOS</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
    <div class="row">
        <div class="col-lg-8">
            <div class="boxed-grey">
                <form id="contact-form" method="post" action="/envio_msg">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Nombre</label>
                            <input type="text" class="form-control" id="name" placeholder="Ingrese su nombre" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Correo Electronico</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Ingrese su e-mail" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Para</label>
                            <input type="email" class="form-control" id="email-dev" value="directoriobarranca@gmail.com" required="required" disabled/>
                            <!--select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">General Customer Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Product Support</option>
                            </select-->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Mensaje</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Escribanos"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
                            Enviar!</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
		
		<div class="col-lg-4">
			<div class="widget-contact">
				<h5>Escribanos</h5>
				
				<address>
				 Responderemos cualquiera de sus consultas<br></br>
				  <strong>Barranca, Lima Peru.</strong><br>
				  <!--abbr title="">Celular:</abbr> <strong>979 270771</strong-->
				</address>

				<!--address>
				  <strong>E-mail</strong> para desarrollo web<br>
				  <a href="mailto:#">christianavalosc@gmail.com</a>
				</address-->	
				<address>
				  <strong>Encuentranos en facebook</strong><br>
                       	<ul class="company-social">
                            <li class="social-facebook"><a href="https://www.facebook.com/directoriobarranca" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <!--li class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li class="social-dribble"><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                            <li class="social-google"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li-->
                        </ul>	
				</address>					
			
			</div>	
		</div>
    </div>	

		</div>
	</section>
	<!-- /Section: contact -->

	<section id="contactoIntro" class="contactoIntro"></section>

</body>
<?php
	include ("includes/footer.php");
	?>
</html>
