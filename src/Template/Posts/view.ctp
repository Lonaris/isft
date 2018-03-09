<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
<div class="container clearfix">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<img class="img-responsive img-thumbnail center-block" src="<?= h($post->thumbnail) ?>" >
	    <h3><?= h($post->title) ?></h3>
    	    <?= $this->Text->autoParagraph(h($post->content)); ?>
	    <div> Autor: <?= h($post->author_name) ?> </div>
	    <div> Publicado el <?= h($post->created) ?> </div>
	</div>
</div>
