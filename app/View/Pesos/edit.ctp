<div class="pesos form">
<?php echo $this->Form->create('Peso'); ?>
	<fieldset>
		<legend><?php echo __('Edit Peso'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('peso');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Peso.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Peso.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Pesos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Estudiantes'), array('controller' => 'estudiantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudiante'), array('controller' => 'estudiantes', 'action' => 'add')); ?> </li>
	</ul>
</div>
