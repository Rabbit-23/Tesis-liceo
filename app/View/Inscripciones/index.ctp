<div class="container">
	<div class="inscripciones index">
	<h2><?php echo __('Lista de inscritos'); ?></h2>
	<hr>
	<table class="table table-bordered table-hover">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('estudiante_id'); ?></th>
			<th><?php echo $this->Paginator->sort('seccion_id'); ?></th>
			<th><?php echo $this->Paginator->sort('periodo_id'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($inscripciones as $inscripcion): ?>
	<tr>
		<td><?php echo h($inscripcion['Inscripcion']['id']); ?>&nbsp;</td>
		
		<td><?php foreach($personas as $es):
   				 if($es['Persona']['id'] == $inscripcion['Estudiante']['persona_id']){
       					echo $es['Persona']['nombre_persona'];}?>

				<?php endforeach;?>
		</td>
		<td>
			<?php echo $this->Html->link($inscripcion['Seccion']['nombre_completo'], array('controller' => 'secciones', 'action' => 'view', $inscripcion['Seccion']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($inscripcion['Periodo']['periodo'], array('controller' => 'periodos', 'action' => 'view', $inscripcion['Periodo']['id'])); ?>
		</td>
		
		<td class="actions">
			<?php echo $this->Html->link(__('Detalle'), array('action' => 'view', $inscripcion['Inscripcion']['id']), array('class' => 'btn btn-sm btn-info')); ?>
			<?php echo $this->Html->link(__('Modificar'), array('action' => 'edit', $inscripcion['Inscripcion']['id']), array('class' => 'btn btn-sm btn-warning')); ?>
			<?php echo $this->Html->link(__('Constancia'), array('action' => 'viewpdf', $inscripcion['Inscripcion']['id']), array('class' => 'btn btn-sm btn-success')); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $inscripcion['Inscripcion']['id']), array('class' => 'btn btn-sm btn-danger'), array('confirm' => __('Are you sure you want to delete # %s?', $inscripcion['Inscripcion']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	
	?>	</p>
	<?php
		
		?>	</p>
		<ul class="pagination">
			<li> <?php echo $this->Paginator->prev('< ' . __('Anterior'), array('tag' => false), null, array('class' => 'prev disabled')); ?> </li>
			<?php echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'a', 'currentClass' => 'active')); ?>
			<li> <?php echo $this->Paginator->next(__('Próximo') . ' >', array('tag' => false), null, array('class' => 'next disabled')); ?> </li>
		</ul>
	<?php echo $this->Js->writeBuffer(); ?>
	</div>
</div>


</div>