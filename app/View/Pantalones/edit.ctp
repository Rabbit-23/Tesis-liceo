<div class="pantalones form">
<?php echo $this->Form->create('Pantalon'); ?>
	<fieldset>
		<legend><?php echo __('Edit Pantalon'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tallapantalon');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Pantalon.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Pantalon.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Pantalones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Estudiantes'), array('controller' => 'estudiantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudiante'), array('controller' => 'estudiantes', 'action' => 'add')); ?> </li>
	</ul>
</div>
