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

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>

<!-- ACA EMPIEZA MI BARDO LINDO :D -->

	<meta charset="utf-8"> <meta http-equiv="X-UA-Compatible" content="IE=edge"> <meta name="viewport" content="width=device-width, initial-scale=1"> <title>ISFT N° 179 - "Dr. Carlos Pellegrinni"</title> <!-- Bootstrap --> <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<link href="css/style.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/animate.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/jquery.bxslider.css">
	<link href="../css/style.css" rel="stylesheet">
    <script src="../js/jquery-2.1.1.min.js"></script>
    <!-- Incluye todos los complementos compilados (a continuación) o incluye archivos individuales según sea necesario -->
    <script src="../js/bootstrap.min.js"></script>
	<script src="../js/wow.min.js"></script>
	<script src="../js/jquery.easing.1.3.js"></script>
	<script src="../js/jquery.bxslider.min.js"></script>
	<script src="../js/jquery.isotope.min.js"></script>
	<script src="../js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="../js/functions.js"></script>


</head>
<body>
	<!-- Menu Bootstrap -->
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
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
	<!-- Comienzo del pie de pagina -->
	<?= $this->element('footer') ?>
</body>
</html>
