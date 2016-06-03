<div class="container">
	<div class="estudiantes index">
	<h2><?php echo __('Estudiantes'); ?></h2>
	<table class="table table-bordered table-hover">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('persona_id'); ?></th>
			
			
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($estudiantes as $estudiante): ?>
	<tr>
		<td><?php echo h($estudiante['Estudiante']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($estudiante['Persona']['nombre_persona'], array('controller' => 'personas', 'action' => 'view', $estudiante['Persona']['id'])); ?>
		</td>
		
		
		<td class="actions">
			<?php echo $this->Html->link(__('Detellate'), array('action' => 'view', $estudiante['Estudiante']['id']), array('class' => 'btn btn-sm btn-info')); ?>
			<?php echo $this->Html->link(__('Modificar'), array('action' => 'edit', $estudiante['Estudiante']['id']), array('class' => 'btn btn-sm btn-warning')); ?>
			<?php echo $this->Html->link(__('Añadir Pago'), array('controller' => 'pagos', 'action' => 'add', $estudiante['Estudiante']['id']), array('class' => 'btn btn-sm btn-success'));  ?>
			<?php echo $this->Html->link(__('Ficha'), array('controller' => 'estudiantes', 'action' => 'viewpdf', $estudiante['Estudiante']['id']), array('class' => 'btn btn-sm btn-success'));  ?> 
			<?php echo $this->Html->link(__('Nueva Inscripción'), array('controller' => 'inscripciones', 'action' => 'add',  $estudiante['Estudiante']['id']), array('class' => 'btn btn-sm btn-primary')); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $estudiante['Estudiante']['id']), array('class' => 'btn btn-sm btn-danger'), array('confirm' => __('Are you sure you want to delete # %s?', $estudiante['Estudiante']['id']))); ?>
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