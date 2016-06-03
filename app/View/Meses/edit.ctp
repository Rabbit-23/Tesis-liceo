<div class="meses form">
<?php echo $this->Form->create('Mes'); ?>
	<fieldset>
		<legend><?php echo __('Edit Mes'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('mes');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Mes.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Mes.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Meses'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Pagos'), array('controller' => 'pagos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pago'), array('controller' => 'pagos', 'action' => 'add')); ?> </li>
	</ul>
</div>
