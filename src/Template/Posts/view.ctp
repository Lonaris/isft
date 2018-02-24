<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
<div class="row blog-row">
	<div class="col-md-8">
		<img src="<?= h($post->thumbnail) ?>" style="width:100%">
	    <h3><?= h($post->title) ?></h3>
    	    <?= $this->Text->autoParagraph(h($post->content)); ?>
	    <?= $this->Number->format($post->id) ?>
	    <?= h($post->author_name) ?>
	    <?= h($post->created) ?>
	    <?= h($post->updated) ?>
	</div>
</div>
<div class="clearfix"></div>
