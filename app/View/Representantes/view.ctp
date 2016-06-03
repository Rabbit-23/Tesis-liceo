<div class="container">
	<div class="container">
		<div class="representantes view">
	<?php //debug ($nombre); exit(); ?>

<h2><?php echo __('Detalles Representante'); ?></h2>

	<table class="table table-bordered table-hover">

		<tr>
			<td><?php echo __('Nombre'); ?></dt></td>
			<td><?php echo __('Estudiante'); ?></td>
			<td><?php echo __('Direccion'); ?></td>
			<td><?php echo __('Parentezco'); ?></td>
			<td><?php echo __('Grado instrucción'); ?></td>
			<td><?php echo __('Profesion'); ?></td>
			<td><?php echo __('Dirección laboral'); ?></td>
			<td><?php echo __('Nombre madre'); ?></td>
			<td><?php echo __('Nombre padre'); ?></dt></td>
			<td><?php echo __('En caso de ausencia'); ?></td>
			
		</tr>

		<tr>
			<td><?php echo $this->Html->link($representante['Persona']['nombre_persona'], array('controller' => 'personas', 'action' => 'view', $representante['Persona']['id'])); ?></td>
			<td><?php echo $this->Html->link($representante['Estudiante']['id'], array('controller' => 'estudiantes', 'action' => 'view', $representante['Estudiante']['id'])); ?></td>
			<td><?php echo h($representante['Persona']['direccion']); ?></td>
			<td><?php echo h($representante['Representante']['parentezco']); ?></td>
			<td><?php echo h($representante['Representante']['instruncion']); ?></td>
			<td><?php echo h($representante['Representante']['profesion']); ?></td>
			<td><?php echo h($representante['Representante']['direcciontrabajo']); ?></td>
			<td><?php echo h($representante['Representante']['nombremadre']); ?></td>
			<td><?php echo h($representante['Representante']['nombrepadre']); ?></td>
			<td><?php echo h($representante['Representante']['noasistencia']); ?></td>
		</tr>
		
	</table>
	

	</div>
</div>