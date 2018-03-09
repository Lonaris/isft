
    	<div class="col-sm-2">
	    	<ul class="nav nav-pills brand-pills nav-stacked " role="tablist">
        		<li role="presentation" class="brand-nav">
					<?= $this->Html->link(__('Visitar Sitio'), '/' ) ?>
				</li>
			    <li role="presentation" class="brand-nav">
					<?= $this->Html->link(__('Publicaciones'), ['controller' => 'posts', 'action' => 'index']) ?>
				</li>
			    <li role="presentation" class="brand-nav">
					<?= $this->Html->link(__('Usuarios'), ['controller' => 'users', 'action' => 'index']) ?>
				</li>
			    <li role="presentation" class="brand-nav">
					<?= $this->Html->link(__('Concursos'), ['controller' => 'contests', 'action' => 'index']) ?>
				</li>
			    <li role="presentation" class="brand-nav">
					<?= $this->Html->link(__('Salir'), ['controller' => 'users', 'action' => 'logout']) ?>
				</li>
			</ul>
		</div>
