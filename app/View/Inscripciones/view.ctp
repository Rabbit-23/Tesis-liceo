<div class="container col-md-8">
	<div class="inscripciones view">
<h2><?php echo __('Detalle de Inscripción'); ?></h2>

	<table class="table table-bordered table-hover">
		<tr>
			<th><?php echo __('Id'); ?></th>
			<th><?php echo __('Estudiante'); ?></th>
			<th><?php echo __('Seccion'); ?></th>
			<th><?php echo __('Periodo'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
		</tr>
		<tr>
			<td><?php echo h($inscripcion['Inscripcion']['id']); ?></td>
			<td><?php echo $this->Html->link($inscripcion['Estudiante']['persona_id'], array('controller' => 'estudiantes', 'action' => 'view', $inscripcion['Estudiante']['id'])); ?></td>
			<td><?php echo $this->Html->link($inscripcion['Seccion']['seccion'], array('controller' => 'secciones', 'action' => 'view', $inscripcion['Seccion']['id'])); ?></td>
			<td><?php echo $this->Html->link($inscripcion['Periodo']['periodo'], array('controller' => 'periodos', 'action' => 'view', $inscripcion['Periodo']['id'])); ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Modificar'), array('action' => 'edit', $inscripcion['Inscripcion']['id']), array('class' => 'btn btn-sm btn-warning')); ?> 
				<?php echo $this->Html->link(__('Lista de Inscritos'), array('action' => 'index'), array('class' => 'btn btn-sm btn-info')); ?>
				<?php echo $this->Html->link(__('Constancia'), array('action' => 'viewpdf', $inscripcion['Inscripcion']['id']), array('class' => 'btn btn-sm btn-success')); ?>
				</td>
		</tr>
		
	</table>
	
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Inscripcion'), array('action' => 'edit', $inscripcion['Inscripcion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Inscripcion'), array('action' => 'delete', $inscripcion['Inscripcion']['id']), array(), __('Are you sure you want to delete # %s?', $inscripcion['Inscripcion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscripciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscripcion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estudiantes'), array('controller' => 'estudiantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudiante'), array('controller' => 'estudiantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Secciones'), array('controller' => 'secciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccion'), array('controller' => 'secciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Periodos'), array('controller' => 'periodos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Periodo'), array('controller' => 'periodos', 'action' => 'add')); ?> </li>
	</ul>
</div>

</div>