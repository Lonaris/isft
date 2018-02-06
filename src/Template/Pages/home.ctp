<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;


$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ISFT N° 179 - "Dr. Carlos Pellegrinni"</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/jquery.bxslider.css">
		<link href="css/style.css" rel="stylesheet">
	</head>
<body>

  	<!-- Menu bootstrapp -->
	<nav class="navbar-default" role="presentation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
				<span class="sr-only">Noticias</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/isft/"><span>ISFT N° 179</span></a>
			</div>
			<div class="navbar-collapse collapse">							
				<div class="menu">
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation"><a href="static/historia.html">Institucional</a></li>
						<li role="presentation"><a href="static/carreras.html">Carreras</a></li>
						<li role="presentation"><a href="contests">Concursos</a></li>
						<li role="presentation"><a href="static/requisitos.html">Requisitos</a></li>
						<li role="presentation"><a href="static/contacto.html">Contacto</a></li>
      					<li><a href="users/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					</ul>
				</div>
			</div>			
		</div>
	</nav>



	<!-- Noticias Slider Carousel -->

  	<div class="container">
    	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      		<ol class="carousel-indicators">
        	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        	<li data-target="#carousel-example-generic" data-slide-to="1"></li>
        	<li data-target="#carousel-example-generic" data-slide-to="2"></li>
      		</ol>

      		<!-- Wrapper for slides -->
	      	<div class="carousel-inner">
	        	<div class="item active">
	          		<img src="img/9.jpg" alt="" style="width:100%"/>
	          			<div class="carousel-caption">
	            			<h2>Promocion de nuestras carreras en Escuelas de Moreno</h2>
	         			</div>
	       		</div>
	        	<div class="item">
	          		<img src="img/10.jpg" alt="" style="width:100%"/>
	          			<div class="carousel-caption">
	            			<h2>Pizza Party hecho por los aumnos de Gastronomia</h2>
	          			</div>
	        	</div>
	        	<div class="item">
	          		<img src="img/11.jpg" alt="" style="width:100%"/>
	          			<div class="carousel-caption">
	            			<h2>Directivos del Instituto</h2>
	          			</div>
	        	</div>
	        	<div class="item">
	          		<img src="img/12.jpg" alt="" style="width:100%"/>
	          			<div class="carousel-caption">
	            			<h2>Comenzaron las Inscripciones</h2>
	          			</div>
	        	</div>
	      	</div>

      		<!-- Controls -->
      		<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
    			<span class="glyphicon glyphicon-chevron-left"></span>
      		</a>
      		<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
        		<span class="glyphicon glyphicon-chevron-right"></span>
      		</a>
    	</div>
  	</div>



  	<!-- Seccion mas noticias - Bootstrapp -->

	<div class="container">
		<div class="row blog-row">
		   	<div class="jumbotron">
				<h1>Mas Noticias</h1>
			</div>
<!-- acá arrancan los posts -->
	<?php foreach($posts as $post):	?>
	<div class="col-md-12 col-sm-12 col-xs-12 margin_bottom30">
		<a href="#">
			<img class="img-responsive center-block" src=" <?= h($post->thumbnail) ?>" width=100% height="250">
		</a>
		<div class="blog-content bg-white">
			<h3><?= h($post->title) ?></h3>
			<p><?= h($post->content) ?></p>
			<p><span>Compartir: : 
			<a href="javascript::;"><i class="fa fa-facebook margin_left10" aria-hidden="true"></i></a>
			<a href="javascript::;"><i class="fa fa-twitter margin_left10" aria-hidden="true"></i></a>
		 	</span> 
			<span class="pull-right">Subido por : <strong> <?= h($post->author_name) ?></strong></span> </p>
		</div>
		<hr>
	</div>
	<?php endforeach; ?>
	<script src="https://use.fontawesome.com/1dec14be15.js"></script>



	<!-- Carreras -->

	<div class="jumbotron">
		<h1>Encontrá tu carrera</h1>
		<p>El espíritu del Instituto Superior es establecer una articulación entre el proceso de enseñanza y la sociedad actual, ya sea hacia la vinculación en lo laboral como hacia la capacitación académica que habilite la continuidad en carreras universitarias.<br>
		</p>
	</div>
	<section class="box">
		<div class="container">
			<div class="row">				
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
						<div class="services">
							<div class="icons">
								<img src="img/1.jpg" alt="" style="width:100%"/>
							</div>
							<h4>Administracion General</h4>	
							<p>Duración: 3 Años</p>
							<a href="static/carreras.html">Más Información</a>
						</div>
					</div>
					<hr>
				</div>
				
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
						<div class="services">
							<div class="icons">
								<img src="img/4.jpg" alt="" style="width:100%"/>
							</div>
							<h4>Análisis de Sistemas</h4>	
							<p>Duración: 3 Años</p>
							<a href="static/carreras.html">Más Información</a>
						</div>
					</div>
					<hr>
				</div>
				
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.2s">
						<div class="services">											<div class="icons">
								<img src="img/6.jpg" alt="" style="width:100%"/>
							</div>
							<h4>Automatización, Control y Robótica</h4>
							<p>Duración: 3 Años</p>
							<a href="static/carreras.html">Más Información</a>							
						</div>
					</div>
					<hr>
				</div>
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.6s">
						<div class="services">											<div class="icons">
								<img src="img/3.jpg" alt="" style="width:100%"/>
							</div>
							<h4>Servicios Gastronómicos</h4>
							<p>Duración: 3 Años</p>
							<a href="static/carreras.html">Más Información</a>
						</div>						
					</div>
					<hr>
				</div>
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="2.0s">
						<div class="services">											<div class="icons">
								<img src="img/7.jpg" alt="" style="width:100%"/>
							</div>
							<h4>Industria Textil e Indumentaria</h4>
							<p>Duración: 3 Años</p>
							<a href="static/carreras.html">Más Información</a>							
						</div>
					</div>
					<hr>
				</div>
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="2.4s">
						<div class="services">											<div class="icons">
								<img src="img/5.jpg" alt="" style="width:100%"/>
							</div>
							<h4>Logística</h4>
							<p>Duración: 3 Años</p>
							<a href="static/carreras.html">Más Información</a>							
						</div>
					</div>
					<hr>
				</div>
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="2.8s">
						<div class="services">											<div class="icons">
								<img src="img/8.jpg" alt="" style="width:100%"/>
							</div>
							<h4>Turismo</h4>
							<p>Duración: 3 Años</p>
							<a href="static/carreras.html">Más Información</a>					
						</div>
					</div>
					<hr>
				</div>
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="3.2s">
						<div class="services">											<div class="icons">
								<img src="img/2.jpg" alt="" style="width:100%"/>
							</div>
							<h4>Higiene y Seguridad en el trabajo</h4>
							<p>Duración: 3 Años</p>
							<a href="static/carreras.html">Más Información</a>							
						</div>
					</div>
					<hr>
				</div>					
			</div>
		</div>
	</section>

	

	<!-- Comienzo del pie de pagina -->
	<footer>
		<div class="inner-footer">
			<div class="container">
				<div class="row-align-items-center">
					<div class="col-md-4 f-about">
						<h3 class="widgetheading">ISFT N° 179</h3>
						<p>Sede Central</p>
						<p> Martín Fierro 599</p>
						<p>Entre Tucumán y Concejal Rosset</p>
						<p>Moreno - Pcia. de Buenos Aires</p>						
					</div>
					<div class="col-md-4 f-contact">
						<h3 class="widgetheading">Contacto</h3>
						<a href="#"><p><i class="fa fa-envelope"></i>E-mail: secretaria179@gmail.com</p></a>
						<p><i class="fa fa-phone"></i> (0237) 466-7020</p>
					</div>
					<div class="col-md-4 l-posts">
						<h3 class="widgetheading">Links de Interés</h3>		
						<li><a href="https://www.facebook.com/ISFT179/">Seguinos en Facebook</a></li>
						<li><a href="http://progresar.anses.gob.ar/">Plan PRO.GRE.SAR</a></li>
						<li><a href="http://educacion.gob.ar/ministerio-de-educacion">Ministerio de Educación</a></li>
						<li><a href="#">C.A.I</a></li>
						<li><a href="#">Documentación</a></li>				
					</div>
				</div>
			</div>
		</div>
			
		<div class="last-div">
			<div class="container-fluid">
				<div class="row-fluid">					
					<div class="copyright">
						© 2017 Ramayo - Coronel - Maidana - Ferrin | ISFT N° 179 - "Dr. Carlos Pellegrini"
					</div>
				</div>
			</div>
		</div>		
	</footer>

	<!-- Final del pie de pagina -->
	

	<!-- Scripts de Bootstrapp -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="js/functions.js"></script>
	<script>
	wow = new WOW(
	 {
	
		}	) 
		.init();
	</script>
  </body>
</html>
