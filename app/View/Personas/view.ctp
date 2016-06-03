<div class="personas view">
<h2><?php echo __('Persona'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['apellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cedula'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['cedula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fechanacimiento'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['fechanacimiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estatus'); ?></dt>
		<dd>
			<?php echo $this->Html->link($persona['Estatus']['estatus'], array('controller' => 'estatuses', 'action' => 'view', $persona['Estatus']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['estado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($persona['Persona']['sexo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Persona'), array('action' => 'edit', $persona['Persona']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Persona'), array('action' => 'delete', $persona['Persona']['id']), array(), __('Are you sure you want to delete # %s?', $persona['Persona']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estatuses'), array('controller' => 'estatuses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estatus'), array('controller' => 'estatuses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docentes'), array('controller' => 'docentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente'), array('controller' => 'docentes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estudiantes'), array('controller' => 'estudiantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudiante'), array('controller' => 'estudiantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Representantes'), array('controller' => 'representantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Representante'), array('controller' => 'representantes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Docentes'); ?></h3>
	<?php if (!empty($persona['Docente'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Persona Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($persona['Docente'] as $docente): ?>
		<tr>
			<td><?php echo $docente['id']; ?></td>
			<td><?php echo $docente['persona_id']; ?></td>
			<td><?php echo $docente['created']; ?></td>
			<td><?php echo $docente['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'docentes', 'action' => 'view', $docente['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'docentes', 'action' => 'edit', $docente['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'docentes', 'action' => 'delete', $docente['id']), array(), __('Are you sure you want to delete # %s?', $docente['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Docente'), array('controller' => 'docentes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Estudiantes'); ?></h3>
	<?php if (!empty($persona['Estudiante'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Persona Id'); ?></th>
		<th><?php echo __('Lugar De Nacimiento'); ?></th>
		<th><?php echo __('Impedimento Fisico'); ?></th>
		<th><?php echo __('Enfermedad'); ?></th>
		<th><?php echo __('Alergico'); ?></th>
		<th><?php echo __('Vive Con Sus Padres'); ?></th>
		<th><?php echo __('Plantel De Donde Proviene'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($persona['Estudiante'] as $estudiante): ?>
		<tr>
			<td><?php echo $estudiante['id']; ?></td>
			<td><?php echo $estudiante['persona_id']; ?></td>
			<td><?php echo $estudiante['lugar_de_nacimiento']; ?></td>
			<td><?php echo $estudiante['impedimento_fisico']; ?></td>
			<td><?php echo $estudiante['enfermedad']; ?></td>
			<td><?php echo $estudiante['alergico']; ?></td>
			<td><?php echo $estudiante['vive_con_sus_padres']; ?></td>
			<td><?php echo $estudiante['plantel_de_donde_proviene']; ?></td>
			<td><?php echo $estudiante['created']; ?></td>
			<td><?php echo $estudiante['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'estudiantes', 'action' => 'view', $estudiante['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'estudiantes', 'action' => 'edit', $estudiante['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'estudiantes', 'action' => 'delete', $estudiante['id']), array(), __('Are you sure you want to delete # %s?', $estudiante['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Estudiante'), array('controller' => 'estudiantes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Representantes'); ?></h3>
	<?php if (!empty($persona['Representante'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Parentezco'); ?></th>
		<th><?php echo __('Instruncion'); ?></th>
		<th><?php echo __('Profesion'); ?></th>
		<th><?php echo __('Direcciontrabajo'); ?></th>
		<th><?php echo __('Nombremadre'); ?></th>
		<th><?php echo __('Nombrepadre'); ?></th>
		<th><?php echo __('Noasistencia'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Persona Id'); ?></th>
		<th><?php echo __('Estudiante Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($persona['Representante'] as $representante): ?>
		<tr>
			<td><?php echo $representante['id']; ?></td>
			<td><?php echo $representante['parentezco']; ?></td>
			<td><?php echo $representante['instruncion']; ?></td>
			<td><?php echo $representante['profesion']; ?></td>
			<td><?php echo $representante['direcciontrabajo']; ?></td>
			<td><?php echo $representante['nombremadre']; ?></td>
			<td><?php echo $representante['nombrepadre']; ?></td>
			<td><?php echo $representante['noasistencia']; ?></td>
			<td><?php echo $representante['created']; ?></td>
			<td><?php echo $representante['modified']; ?></td>
			<td><?php echo $representante['persona_id']; ?></td>
			<td><?php echo $representante['estudiante_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'representantes', 'action' => 'view', $representante['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'representantes', 'action' => 'edit', $representante['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'representantes', 'action' => 'delete', $representante['id']), array(), __('Are you sure you want to delete # %s?', $representante['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Representante'), array('controller' => 'representantes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
