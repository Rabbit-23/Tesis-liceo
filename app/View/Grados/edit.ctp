<div class="grados form">
<?php echo $this->Form->create('Grado'); ?>
	<fieldset>
		<legend><?php echo __('Edit Grado'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('grado');
		echo $this->Form->input('Materia');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Grado.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Grado.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Grados'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Secciones'), array('controller' => 'secciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccion'), array('controller' => 'secciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
	</ul>
</div>
