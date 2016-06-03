<div class="tipopagos form">
<?php echo $this->Form->create('Tipopago'); ?>
	<fieldset>
		<legend><?php echo __('Add Tipopago'); ?></legend>
	<?php
		echo $this->Form->input('tipo_pago');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tipopagos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Pagos'), array('controller' => 'pagos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pago'), array('controller' => 'pagos', 'action' => 'add')); ?> </li>
	</ul>
</div>
