<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="container">
	<div class="row centered-form">
         <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">   
<?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Agregar Usuario') ?></legend>
        <?php
            echo $this->Form->control('username', ['label' => 'Nombre de Usuario', 'class' => 'form-control']);
            echo $this->Form->control('password', ['label' => 'Contraseña', 'class' => 'form-control']);
            echo $this->Form->control('password_salt', ['label' => 'Confirmar contraseña', 'class' => 'form-control']);
            echo $this->Form->control('email', ['label' => 'E-mail', 'class' => 'form-control']);
            echo $this->Form->control('first_name', ['label' => 'Nombre', 'class' => 'form-control']);
            echo $this->Form->control('last_name', ['label' => 'Apellido', 'class' => 'form-control']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Agregar'), ['class' => 'btn btn-success']) ?>
    <?= $this->Form->end() ?>
	</div>
	</div>
</div>
