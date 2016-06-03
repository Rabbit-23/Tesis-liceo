<div class="estatuses view">
<h2><?php echo __('Estatus'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($estatus['Estatus']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estatus'); ?></dt>
		<dd>
			<?php echo h($estatus['Estatus']['estatus']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Estatus'), array('action' => 'edit', $estatus['Estatus']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Estatus'), array('action' => 'delete', $estatus['Estatus']['id']), array(), __('Are you sure you want to delete # %s?', $estatus['Estatus']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Estatuses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estatus'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Personas'); ?></h3>
	<?php if (!empty($estatus['Persona'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellido'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th><?php echo __('Fechanacimiento'); ?></th>
		<th><?php echo __('Estatus Id'); ?></th>
		<th><?php echo __('Estado'); ?></th>
		<th><?php echo __('Sexo'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estatus['Persona'] as $persona): ?>
		<tr>
			<td><?php echo $persona['id']; ?></td>
			<td><?php echo $persona['nombre']; ?></td>
			<td><?php echo $persona['apellido']; ?></td>
			<td><?php echo $persona['telefono']; ?></td>
			<td><?php echo $persona['direccion']; ?></td>
			<td><?php echo $persona['fechanacimiento']; ?></td>
			<td><?php echo $persona['estatus_id']; ?></td>
			<td><?php echo $persona['estado']; ?></td>
			<td><?php echo $persona['sexo']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'personas', 'action' => 'view', $persona['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'personas', 'action' => 'edit', $persona['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'personas', 'action' => 'delete', $persona['id']), array(), __('Are you sure you want to delete # %s?', $persona['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
