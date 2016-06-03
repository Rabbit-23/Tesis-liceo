<div class="notas index">
	<h2><?php echo __('Notas'); ?></h2>
	<table class="table table-bordered table-hover">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('estudiante_id'); ?></th>
			<th><?php echo $this->Paginator->sort('periodo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('materia_id'); ?></th>
			<th><?php echo $this->Paginator->sort('nota'); ?></th>
			<th><?php echo $this->Paginator->sort('seccion_id'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($notas as $nota): ?>
	<tr>
		<td><?php echo h($nota['Nota']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($nota['Estudiante']['persona_id'], array('controller' => 'estudiantes', 'action' => 'view', $nota['Estudiante']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($nota['Periodo']['periodo'], array('controller' => 'periodos', 'action' => 'view', $nota['Periodo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($nota['Materia']['nombre'], array('controller' => 'materias', 'action' => 'view', $nota['Materia']['id'])); ?>
		</td>
		<td><?php echo h($nota['Nota']['nota']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($nota['Seccion']['seccion'], array('controller' => 'secciones', 'action' => 'view', $nota['Seccion']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $nota['Nota']['id']), array('class' => 'btn btn-sm btn-info')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $nota['Nota']['id']), array('class' => 'btn btn-sm btn-warning')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $nota['Nota']['id']), array('class' => 'btn btn-sm btn-danger'), array('confirm' => __('Are you sure you want to delete # %s?', $nota['Nota']['id']))); ?>
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

