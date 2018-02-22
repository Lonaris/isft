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


	<!-- Scripts de Bootstrapp -->
    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script src="js/jquery.isotope.min.js"></script>
	<script src="js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="js/functions.js"></script>
<!-- ACA EMPIEZA MI BARDO LINDO :D -->
		<meta charset="utf-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta name="viewport" content="width=device-width, initial-scale=1"> <title>ISFT N° 179 - "Dr. Carlos Pellegrinni"</title> <!-- Bootstrap --> <link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/jquery.bxslider.css">
		<link href="css/style.css" rel="stylesheet">
	
</head>
<body>
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
						<li role="presentation">
							<?= $this->Html->link('Institucional', '/pages/historia') ?>
						</li>
						<li role="presentation">	
							<?= $this->Html->link('Carreras', '/pages/carreras') ?>
						</li>
						<li role="presentation">
							<?= $this->Html->link('Concursos', '/contests') ?>
						</li>
						<li role="presentation">
							<?= $this->Html->link('Requisitos', '/pages/requisitos') ?>
						</li>
						<li role="presentation">
							<?= $this->Html->link('Contacto', '/pages/contacto') ?>
						</li>
      					<li>
							<?= $this->Html->link('Login', '/users/login') ?>
						</li>
					</ul>
				</div>
			</div>			
		</div>
	</nav>

    <?= $this->Flash->render() ?>
    <div class="navbar-nav navbar-sidenav">
	            <div class="col-sm-3">
	                <ul class="nav nav-pills brand-pills nav-stacked" role="tablist">
        
			    <li role="presentation" class="brand-nav">
					<?= $this->Html->link(__('Visitar Sitio'), '/' ) ?>
				</li>
			    <li role="presentation" class="brand-nav">
					<?= $this->Html->link(__('Publicaciones'), ['controller' => 'posts', 'action' => 'index']) ?>
				</li>
			    <li role="presentation" class="brand-nav">
					<?= $this->Html->link(__('Usuarios'), ['controller' => 'users', 'action' => 'index']) ?>
				</li>
			    <li role="presentation" class="brand-nav">
					<?= $this->Html->link(__('Concursos'), ['controller' => 'contests', 'action' => 'index']) ?>
				</li>
			    <li role="presentation" class="brand-nav">
					<?= $this->Html->link(__('Salir'), ['controller' => 'users', 'action' => 'logout']) ?>
				</li>
	                </ul>
	            </div>
	</div>
	<div class="col-sm-3">
        <?= $this->fetch('content') ?>
	</div>
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
</body>
</html>
