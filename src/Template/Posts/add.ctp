<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ISFT N° 179 - "Dr. Carlos Pellegrinni"</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/animate.css">
	<link rel="stylesheet" href="../css/font-awesome.min.css">
	<link rel="stylesheet" href="../css/jquery.bxslider.css">
	<link href="../css/style.css" rel="stylesheet">

  </head>

<div class="posts form large-9 medium-8 columns content">
    <?= $this->Form->create($post) ?>
    <fieldset>
        <legend><?= __('Publicacion nueva') ?></legend>
        <?php
            echo $this->Form->control('title', ['label' => 'Titulo', 'class' => 'form-control']);
            echo $this->Form->control('content', ['label' => 'Contenido', 'class' => 'form-control']);
            echo $this->Form->control('thumbnail', ['label' => 'Url de la imagen', 'class' => 'form-control']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Publicar'), ['class' => 'btn btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
    <!-- jQuery (necesario para los complementos de JavaScript de Bootstrap) -->
    <script src="../js/jquery-2.1.1.min.js"></script>
    <!-- Incluye todos los complementos compilados (a continuación) o incluye archivos individuales según sea necesario -->
    <script src="../js/bootstrap.min.js"></script>
	<script src="../js/wow.min.js"></script>
	<script src="../js/jquery.easing.1.3.js"></script>
	<script src="../js/jquery.bxslider.min.js"></script>
	<script src="../js/jquery.isotope.min.js"></script>
	<script src="../js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="../js/functions.js"></script>
	<script>
	wow = new WOW(
	 {
	
		}	) 
		.init();
	</script>

