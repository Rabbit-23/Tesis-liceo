<div class="container">
	<div class="container col-md-6">
		<div class="materias view">
<h2><?php echo __('Materia'); ?></h2>
	

		<table class="table table-bordered table-hover">
			<tr>
				<td><?php echo __('Id'); ?></td>
				<td><?php echo __('Nombre'); ?></td>
			</tr>

			<tr>
				<td><?php echo h($materia['Materia']['id']); ?></td>
				<td><?php echo h($materia['Materia']['nombre']); ?></td>
			</tr>
		</table>
		
</div>

<div class="related">
	<h3><?php echo __('Notas'); ?></h3>
	<?php if (!empty($materia['Nota'])): ?>
	<table class="table table-bordered table-hover">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Estudiante Id'); ?></th>
		<th><?php echo __('Periodo Id'); ?></th>
		<th><?php echo __('Materia Id'); ?></th>
		<th><?php echo __('Nota'); ?></th>
		<th><?php echo __('Seccion Id'); ?></th>
		
	</tr>
	<?php foreach ($materia['Nota'] as $nota): ?>
		<tr>
			<td><?php echo $nota['id']; ?></td>
			<td><?php echo $nota['estudiante_id']; ?></td>
			<td><?php echo $nota['periodo_id']; ?></td>
			<td><?php echo $nota['materia_id']; ?></td>
			<td><?php echo $nota['nota']; ?></td>
			<td><?php echo $nota['seccion_id']; ?></td>
			
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	
</div>
<div class="related">
	<h3><?php echo __('Grados'); ?></h3>
	<?php if (!empty($materia['Grado'])): ?>
	<table class="table table-bordered table-hover">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Grado'); ?></th>
		
	</tr>
	<?php foreach ($materia['Grado'] as $grado): ?>
		<tr>
			<td><?php echo $grado['id']; ?></td>
			<td><?php echo $grado['grado']; ?></td>
			
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	
</div>
<div class="related">
	<h3><?php echo __('Docentes'); ?></h3>
	<?php if (!empty($materia['Docente'])): ?>
	<table class="table table-bordered table-hover">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Persona Id'); ?></th>
		
	</tr>
	<?php foreach ($materia['Docente'] as $docente): ?>
		<tr>
			<td><?php echo $docente['id']; ?></td>
			<td><?php echo $docente['created']; ?></td>
			<td><?php echo $docente['modified']; ?></td>
			<td><?php echo $docente['persona_id']; ?></td>
			
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	
</div>

	</div>
</div>