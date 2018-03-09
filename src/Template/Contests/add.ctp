<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contest $contest
 */
?>
<!--<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Contests'), ['action' => 'index']) ?></li>
    </ul>
</nav>
-->

<div class="container">
	<div class="row centered-form">
		<div class="col-xs-12 col-sm-8 col-md-4 col-smoffset-2 col-md-offset-4">
    <?= $this->Form->create($contest) ?>
    <fieldset>
        <legend><?= __('Agregar Concurso') ?></legend>
        <?php
            echo $this->Form->control('carrera', ['label' => 'Carrera', 'class' => 'form-control']);
		    echo $this->Form->control('materia', ['label' => 'Materia', 'class' => 'form-control']);
            echo $this->Form->control('fecha', ['label' => 'Fecha', 'class' => 'form-control']);
            echo $this->Form->control('ganador', ['label' => 'Ganador', 'class' => 'form-control']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Agregar'), ['class' => 'btn btn-success']) ?>
    <?= $this->Form->end() ?>
	</div>
	</div>
</div>
