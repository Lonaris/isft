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

	
	<?= $this->Html->css(['bootstrap.min', 'animate.min', 'font-awesome.min', 'style']) ?>
	<?= $this->Html->script(['jquery-2.1.1.min', 'bootstrap.min', 'wow.min.js', 'jquery.easing.1.3', 'jquery.bxslider.min.js', 'jquery.isotope.min', 'fancybox/jquery.fancybox.pack', 'functions', ]) ?>

	
</head>
<body>

	<?= $this->element('header') ?>
    <?= $this->Flash->render() ?>
	<?= $this->element('sidebar2') ?>	

    <?= $this->fetch('content') ?>
	<?= $this->element('footer') ?>
</body>
</html>
