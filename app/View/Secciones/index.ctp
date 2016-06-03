<div class="secciones index">
	<h2><?php echo __('Secciones'); ?></h2>
	<table class="table table-bordered table-hover">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('grado_id'); ?></th>
			<th><?php echo $this->Paginator->sort('seccion'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($secciones as $seccion): ?>
	<tr>
		<td><?php echo h($seccion['Seccion']['id']); ?>&nbsp;</td>

		<td>
			<?php echo $this->Html->link($seccion['Grado']['grado'], array('controller' => 'grados', 'action' => 'view', $seccion['Grado']['id'])); ?>
		</td>
				<td><?php echo h($seccion['Seccion']['seccion']); ?>&nbsp;</td>
		<td class="actions">
			
			<?php echo $this->Html->link(__('Agregar Nota a Seccion'), array('controller' => 'notas', 'action' => 'add', $seccion['Seccion']['id']), array('class' => 'btn btn-sm btn-success')); ?>
			
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
<!--<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Seccion'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Grados'), array('controller' => 'grados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grado'), array('controller' => 'grados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscripciones'), array('controller' => 'inscripciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscripcion'), array('controller' => 'inscripciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Notas'), array('controller' => 'notas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nota'), array('controller' => 'notas', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
