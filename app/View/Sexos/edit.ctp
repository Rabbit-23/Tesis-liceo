<div class="sexos form">
<?php echo $this->Form->create('Sexo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Sexo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('sexo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Sexo.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Sexo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Sexos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Estudiantes'), array('controller' => 'estudiantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudiante'), array('controller' => 'estudiantes', 'action' => 'add')); ?> </li>
	</ul>
</div>
