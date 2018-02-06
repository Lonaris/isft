<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contest $contest
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Contests'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="contests form large-9 medium-8 columns content">
    <?= $this->Form->create($contest) ?>
    <fieldset>
        <legend><?= __('Add Contest') ?></legend>
        <?php
            echo $this->Form->control('carrera');
	    echo $this->Form->control('materia');
            echo $this->Form->control('fecha');
            echo $this->Form->control('ganador');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
