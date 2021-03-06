<div class="tipopagos index">
	<h2><?php echo __('Tipopagos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_pago'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($tipopagos as $tipopago): ?>
	<tr>
		<td><?php echo h($tipopago['Tipopago']['id']); ?>&nbsp;</td>
		<td><?php echo h($tipopago['Tipopago']['tipo_pago']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tipopago['Tipopago']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tipopago['Tipopago']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tipopago['Tipopago']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $tipopago['Tipopago']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Tipopago'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Pagos'), array('controller' => 'pagos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pago'), array('controller' => 'pagos', 'action' => 'add')); ?> </li>
	</ul>
</div>
