<div class="zapatos form">
<?php echo $this->Form->create('Zapato'); ?>
	<fieldset>
		<legend><?php echo __('Edit Zapato'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tallazapato');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Zapato.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Zapato.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Zapatos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Estudiantes'), array('controller' => 'estudiantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudiante'), array('controller' => 'estudiantes', 'action' => 'add')); ?> </li>
	</ul>
</div>
