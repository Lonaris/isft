<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post[]|\Cake\Collection\CollectionInterface $posts
 */
?>
<div class="breadcrumb col-sm-8 center-block">
	<h2>Publicaciones</h2>
</div>

<!-- new shit -->
<div id="publicaciones" class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-default list-group-panel">
                <div class="panel-body">

                    <ul class="list-group list-group-header">
                        <li class="list-group-item list-group-body">
                            <div class="row">
                                <div class="col-xs-2"><?= $this->Paginator->sort('title', 'Titulo') ?></div>
                                <div class="col-xs-2"><?= $this->Paginator->sort('thumbnail', 'Imagen') ?></div>
                                <div class="col-xs-2"><?= $this->Paginator->sort('author', 'Autor') ?></div>
                                <div class="col-xs-2"><?= $this->Paginator->sort('created', 'Creado') ?></div>
                                <div class="col-xs-2"><?= $this->Paginator->sort('updated', 'Modificado') ?></div>
                                <div class="col-xs-2">Acciones</div>
                            </div>
                        </li>
                    </ul>

                    <ul class="list-group list-group-body" style="">
		        <?php foreach ($posts as $post): ?>
			<li class="list-group-item">
                            <div class="row">
                                <div class="col-xs-2" style=""><?= h($post->title) ?></div>
                                <div class="col-xs-2" style=""><?= h($post->thumbnail) ?></div>
                                <div class="col-xs-2" style=""><?= h($post->author) ?></div>
                                <div class="col-xs-2" style=""><?= h($post->created) ?></div>
                                <div class="col-xs-2" style=""><?= h($post->updated) ?></div>
				<div class="col-xs-2" style="">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $post->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $post->id]) ?>
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $post->id], ['confirm' => __('Está seguro de que quiere borrar "{0}"?', $post->title)]) ?>

				</div>
                            </div>
                        </li>

			<?php endforeach; ?>

                    </ul>

                </div>
            </div>
				<?= $this->Html->link(('Publicacion nueva'), ['action' => 'add'], ['class' => 'btn btn-success center-block col-sm-2']) ?>
        </div>
    </div>
</div>



    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primero')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('ultimo') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Pagina {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}}')]) ?></p>
    </div>
