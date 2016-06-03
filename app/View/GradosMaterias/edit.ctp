<div class="gradosMaterias form">
<?php echo $this->Form->create('GradosMateria'); ?>
	<fieldset>
		<legend><?php echo __('Edit Grados Materia'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('grado_id');
		echo $this->Form->input('materia_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('GradosMateria.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('GradosMateria.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Grados Materias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Grados'), array('controller' => 'grados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grado'), array('controller' => 'grados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
	</ul>
</div>
