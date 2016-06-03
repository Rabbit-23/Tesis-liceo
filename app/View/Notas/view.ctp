<div class="notas view">
<h2><?php echo __('Nota'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($nota['Nota']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estudiante'); ?></dt>
		<dd>
			<?php echo $this->Html->link($nota['Estudiante']['persona_id'], array('controller' => 'estudiantes', 'action' => 'view', $nota['Estudiante']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Periodo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($nota['Periodo']['periodo'], array('controller' => 'periodos', 'action' => 'view', $nota['Periodo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Materia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($nota['Materia']['nombre'], array('controller' => 'materias', 'action' => 'view', $nota['Materia']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nota'); ?></dt>
		<dd>
			<?php echo h($nota['Nota']['nota']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seccion'); ?></dt>
		<dd>
			<?php echo $this->Html->link($nota['Seccion']['seccion'], array('controller' => 'secciones', 'action' => 'view', $nota['Seccion']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Nota'), array('action' => 'edit', $nota['Nota']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Nota'), array('action' => 'delete', $nota['Nota']['id']), array(), __('Are you sure you want to delete # %s?', $nota['Nota']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Notas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nota'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estudiantes'), array('controller' => 'estudiantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudiante'), array('controller' => 'estudiantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Periodos'), array('controller' => 'periodos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Periodo'), array('controller' => 'periodos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Materias'), array('controller' => 'materias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materia'), array('controller' => 'materias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Secciones'), array('controller' => 'secciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Seccion'), array('controller' => 'secciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
