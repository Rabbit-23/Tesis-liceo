<div class="container">
	<div class="docentes index">
	<h2><?php echo __('Docentes'); ?></h2>
	<table class="table table-bordered table-hover">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('persona_id'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($docentes as $docente): ?>
	<tr>
		<td><?php echo h($docente['Docente']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($docente['Persona']['nombre_persona'], array('controller' => 'personas', 'action' => 'view', $docente['Persona']['id'])); ?>
		</td>
		
		<td class="actions">
			<?php echo $this->Html->link(__('Detalle'), array('action' => 'view', $docente['Docente']['id']), array('class' => 'btn btn-sm btn-info')); ?>
			<?php echo $this->Html->link(__('Modificar'), array('action' => 'edit', $docente['Docente']['id']), array('class' => 'btn btn-sm btn-warning')); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $docente['Docente']['id']), array('class' => 'btn btn-sm btn-danger'), array('confirm' => __('Are you sure you want to delete # %s?', $docente['Docente']['id']))); ?>
			<?php echo $this->Html->Link('Nuevo docente', array('controller' => 'personas', 'action' => 'add2'), array('class' => 'btn btn-sm btn-success')); ?>
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


</div>