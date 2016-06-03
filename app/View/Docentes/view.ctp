<div class="docentes view">
<h2><?php echo __('Docente'); ?></h2>


	<table class="table table-bordered table-hover">
		<tr>
			<td><dt><?php echo __('Id'); ?></dt></td>
			<td><?php echo __('Persona'); ?></td>
			<td><?php echo __('Creado'); ?></td>
			<td><?php echo __('Modificado'); ?></dt></td>
		</tr>

		<tr>
			<td><?php echo h($docente['Docente']['id']); ?></td>
			<td><?php echo $this->Html->link($docente['Persona']['nombre_persona'], array('controller' => 'personas', 'action' => 'view', $docente['Persona']['id'])); ?></td>
			<td><?php echo h($docente['Docente']['created']); ?></td>
			<td><?php echo h($docente['Docente']['modified']); ?></td>
		</tr>
	</table>
	
</div>

<div class="related">
	<h3><?php echo __('Materias'); ?></h3>
	<?php if (!empty($docente['Materia'])): ?>
	<table class="table table-bordered table-hover">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th class="actions"><?php echo __('Accciones'); ?></th>
	</tr>
	<?php foreach ($docente['Materia'] as $materia): ?>
		<tr>
			<td><?php echo $materia['id']; ?></td>
			<td><?php echo $materia['nombre']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Detalle'), array('controller' => 'materias', 'action' => 'view', $materia['id']), array('class' => 'btn btn-sm btn-info')); ?>
				<?php echo $this->Html->link(__('Modificar'), array('controller' => 'materias', 'action' => 'edit', $materia['id']), array('class' => 'btn btn-sm btn-warning')); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'materias', 'action' => 'delete', $materia['id']), array('class' => 'btn btn-sm btn-danger'), array(), __('Are you sure you want to delete # %s?', $materia['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
