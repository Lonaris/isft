<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contest $contest
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contest'), ['action' => 'edit', $contest->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contest'), ['action' => 'delete', $contest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contest->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contests'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contest'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contests view large-9 medium-8 columns content">
    <h3><?= h($contest->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Carrera') ?></th>
            <td><?= h($contest->carrera) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ganador') ?></th>
            <td><?= h($contest->ganador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($contest->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha') ?></th>
            <td><?= h($contest->fecha) ?></td>
        </tr>
    </table>
</div>
