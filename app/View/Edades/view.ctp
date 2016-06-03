<div class="edades view">
<h2><?php echo __('Edad'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($edad['Edad']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edad'); ?></dt>
		<dd>
			<?php echo h($edad['Edad']['edad']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Edad'), array('action' => 'edit', $edad['Edad']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Edad'), array('action' => 'delete', $edad['Edad']['id']), array(), __('Are you sure you want to delete # %s?', $edad['Edad']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Edades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Edad'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estudiantes'), array('controller' => 'estudiantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudiante'), array('controller' => 'estudiantes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Estudiantes'); ?></h3>
	<?php if (!empty($edad['Estudiante'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Persona Id'); ?></th>
		<th><?php echo __('Fecha De Nacimiento'); ?></th>
		<th><?php echo __('Lugar De Nacimiento'); ?></th>
		<th><?php echo __('Entidad'); ?></th>
		<th><?php echo __('Sexo Id'); ?></th>
		<th><?php echo __('Edad Id'); ?></th>
		<th><?php echo __('Estatura Id'); ?></th>
		<th><?php echo __('Peso Id'); ?></th>
		<th><?php echo __('Pantalon Id'); ?></th>
		<th><?php echo __('Camisa Id'); ?></th>
		<th><?php echo __('Zapato Id'); ?></th>
		<th><?php echo __('Impedimento Fisico'); ?></th>
		<th><?php echo __('Enfermedad'); ?></th>
		<th><?php echo __('Alergico'); ?></th>
		<th><?php echo __('Vive Con Sus Padres'); ?></th>
		<th><?php echo __('Plantel De Donde Proviene'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($edad['Estudiante'] as $estudiante): ?>
		<tr>
			<td><?php echo $estudiante['id']; ?></td>
			<td><?php echo $estudiante['persona_id']; ?></td>
			<td><?php echo $estudiante['fecha_de_nacimiento']; ?></td>
			<td><?php echo $estudiante['lugar_de_nacimiento']; ?></td>
			<td><?php echo $estudiante['entidad']; ?></td>
			<td><?php echo $estudiante['sexo_id']; ?></td>
			<td><?php echo $estudiante['edad_id']; ?></td>
			<td><?php echo $estudiante['estatura_id']; ?></td>
			<td><?php echo $estudiante['peso_id']; ?></td>
			<td><?php echo $estudiante['pantalon_id']; ?></td>
			<td><?php echo $estudiante['camisa_id']; ?></td>
			<td><?php echo $estudiante['zapato_id']; ?></td>
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
