<div class="container">
	<div class="estudiantes view">
<h2><?php echo __('Estudiante'); ?></h2>

	<table class="table table-bordered table-hover">
		<tr>
			<td><?php echo __('Id'); ?></dt></td>
			<td><?php echo __('Nombre'); ?></dt></td>
			<td><?php echo __('Lugar De Nacimiento'); ?></td>
			<td><?php echo __('Impedimento Fisico'); ?></td>
			<td><?php echo __('Enfermedad'); ?></td>
			<td><?php echo __('Alergico'); ?></td>
			<td><?php echo __('Vive Con Sus Padres'); ?></td>
			<td><?php echo __('Plantel De Donde Proviene'); ?></td>
		</tr>
		<tr>
			<td><?php echo h($estudiante['Estudiante']['id']); ?></td>
			<td><?php echo $this->Html->link($estudiante['Persona']['nombre_persona'], array('controller' => 'personas', 'action' => 'view', $estudiante['Persona']['id'])); ?></td>
			<td><?php echo h($estudiante['Estudiante']['lugar_de_nacimiento']); ?></td>
			<td><?php echo h($estudiante['Estudiante']['impedimento_fisico']); ?></td>
			<td><?php echo h($estudiante['Estudiante']['enfermedad']); ?></td>
			<td><?php echo h($estudiante['Estudiante']['alergico']); ?></td>
			<td><?php echo h($estudiante['Estudiante']['vive_con_sus_padres']); ?></td>
			<td><?php echo h($estudiante['Estudiante']['plantel_de_donde_proviene']); ?></td>
		</tr>
		
	</table>
	
</div>

<div class="related">
	<h3><?php echo __('Inscripciones'); ?></h3>
	<?php if (!empty($estudiante['Inscripcion'])): ?>
	<table class="table table-bordered table-hover">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Seccion Id'); ?></th>
		<th><?php echo __('Periodo Id'); ?></th>
		<th><?php echo __('Fecha Inscripcion'); ?></th>
		<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($estudiante['Inscripcion'] as $inscripcion): ?>
		<tr>
			<td><?php echo $inscripcion['id']; ?></td>
			<td><?php echo $inscripcion['seccion_id']; ?></td>
			<td><?php echo $inscripcion['periodo_id']; ?></td>
			<td><?php echo $inscripcion['fecha_inscripcion']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Detalle'), array('controller' => 'inscripciones', 'action' => 'view', $inscripcion['id']), array('class' => 'btn btn-sm btn-info')); ?>

				<?php echo $this->Html->link(__('Constancia'), array('controller' => 'inscripciones', 'action' => 'viewpdf', $inscripcion['id']), array('class' => 'btn btn-sm btn-success')); ?>
				
			
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	
</div>
<div class="related">
	<h3><?php echo __('Notas del estudiante'); ?></h3>
	<?php if (!empty($estudiante['Nota'])): ?>
	<table class="table table-bordered table-hover">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Estudiante Id'); ?></th>
		<th><?php echo __('Periodo Id'); ?></th>
		<th><?php echo __('Materia Id'); ?></th>
		<th><?php echo __('Nota'); ?></th>
		<th><?php echo __('Seccion Id'); ?></th>
		<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($estudiante['Nota'] as $nota): ?>
		<tr>
			<td><?php echo $nota['id']; ?></td>
			<td><?php echo $nota['estudiante_id']; ?></td>
			<td><?php echo $nota['periodo_id']; ?></td>
			<td><?php echo $nota['materia_id']; ?></td>
			<td><?php echo $nota['nota']; ?></td>
			<td><?php echo $nota['seccion_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Detalle'), array('controller' => 'notas', 'action' => 'view', $nota['id']), array('class' => 'btn btn-sm btn-info')); ?>
				<?php echo $this->Html->link(__('Modificar'), array('controller' => 'notas', 'action' => 'edit', $nota['id']), array('class' => 'btn btn-sm btn-warning')); ?>
				
		
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	
</div>
<div class="related">
	<h3><?php echo __('Pagos'); ?></h3>
	<?php if (!empty($estudiante['Pago'])): ?>
	<table class="table table-bordered table-hover">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Periodo Id'); ?></th>
		<th><?php echo __('Estudiante Id'); ?></th>
		<th><?php echo __('Mes Id'); ?></th>
		<th><?php echo __('Monto'); ?></th>
		<th><?php echo __('Tipopago Id'); ?></th>
		<th><?php echo __('Fecha Pago'); ?></th>
		<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($estudiante['Pago'] as $pago): ?>
		<tr>
			<td><?php echo $pago['id']; ?></td>
			<td><?php echo $pago['periodo_id']; ?></td>
			<td><?php echo $pago['estudiante_id']; ?></td>
			<td><?php echo $pago['mes_id']; ?></td>
			<td><?php echo $pago['monto']; ?></td>
			<td><?php echo $pago['tipopago_id']; ?></td>
			<td><?php echo $pago['fecha_pago']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Detalle'), array('controller' => 'pagos', 'action' => 'view', $pago['id']), array('class' => 'btn btn-sm btn-info')); ?>
				<?php echo $this->Html->link(__('Modificar'), array('controller' => 'pagos', 'action' => 'edit', $pago['id']), array('class' => 'btn btn-sm btn-warning')); ?>
				<?php echo $this->Html->link(__('Comprobante de pago'), array('controller' => 'pagos', 'action' => 'viewpdf', $pago['id']), array('class' => 'btn btn-sm btn-success')); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
<div class="related">
	<h3><?php echo __('Representantes'); ?></h3>
	<?php if (!empty($estudiante['Representante'])): ?>
	<table class="table table-bordered table-hover">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Persona'); ?></th>
		<th><?php echo __('Estudiante'); ?></th>
		<th><?php echo __('Parentezco'); ?></th>
		<th><?php echo __('Instrucción'); ?></th>
		<th><?php echo __('Profesión'); ?></th>
		<th><?php echo __('Dirección laboral'); ?></th>
		<th><?php echo __('Otro representante'); ?></th>
		
		
		<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($estudiante['Representante'] as $representante): ?>
		<tr>
			<td><?php echo $representante['id']; ?></td>
			<td><?php echo $representante['persona_id']; ?></td>
			<td><?php echo $representante['estudiante_id']; ?></td>
			<td><?php echo $representante['parentezco']; ?></td>
			<td><?php echo $representante['instruncion']; ?></td>
			<td><?php echo $representante['profesion']; ?></td>
			<td><?php echo $representante['direcciontrabajo']; ?></td>
			<td><?php echo $representante['noasistencia']; ?></td>
			
			
			<td class="actions">
				<?php echo $this->Html->link(__('Detalle'), array('controller' => 'representantes', 'action' => 'view', $representante['id']), array('class' => 'btn btn-sm btn-info')); ?>
				<?php echo $this->Html->link(__('Modificar'), array('controller' => 'representantes', 'action' => 'edit', $representante['id']), array('class' => 'btn btn-sm btn-warning')); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'representantes', 'action' => 'delete', $representante['id']), array('class' => 'btn btn-sm btn-danger'), array(), __('Are you sure you want to delete # %s?', $representante['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	
</div>

</div>