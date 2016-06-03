<div class="gradosMaterias index">
	<h2><?php echo __('Grados Materias'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('grado_id'); ?></th>
			<th><?php echo $this->Paginator->sort('materia_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($gradosMaterias as $gradosMateria): ?>
	<tr>
		<td><?php echo h($gradosMateria['GradosMateria']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($gradosMateria['Grado']['grado'], array('controller' => 'grados', 'action' => 'view', $gradosMateria['Grado']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($gradosMateria['Materia']['nombre'], array('controller' => 'materias', 'action' => 'view', $gradosMateria['Materia']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $gradosMateria['GradosMateria']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $gradosMateria['GradosMateria']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $gradosMateria['GradosMateria']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $gradosMateria['GradosMateria']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Grados Materia'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Grados'), array('controller' => 'grados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grado'), array('controller' => 'grados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
	</ul>
</div>
