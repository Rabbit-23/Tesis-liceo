<div class="gradosMaterias view">
<h2><?php echo __('Grados Materia'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($gradosMateria['GradosMateria']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grado'); ?></dt>
		<dd>
			<?php echo $this->Html->link($gradosMateria['Grado']['grado'], array('controller' => 'grados', 'action' => 'view', $gradosMateria['Grado']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Materia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($gradosMateria['Materia']['nombre'], array('controller' => 'materias', 'action' => 'view', $gradosMateria['Materia']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Grados Materia'), array('action' => 'edit', $gradosMateria['GradosMateria']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Grados Materia'), array('action' => 'delete', $gradosMateria['GradosMateria']['id']), array(), __('Are you sure you want to delete # %s?', $gradosMateria['GradosMateria']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Grados Materias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grados Materia'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grados'), array('controller' => 'grados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grado'), array('controller' => 'grados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
	</ul>
</div>
