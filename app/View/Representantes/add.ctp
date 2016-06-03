<div class="representantes form">
<?php echo $this->Form->create('Representante'); ?>
	<fieldset>
		<legend><?php echo __('Add Representante'); ?></legend>
	<?php
		
		echo $this->Form->input('parentezco');
		echo $this->Form->input('instruncion');
		echo $this->Form->input('profesion');
		echo $this->Form->input('direcciontrabajo');
		echo $this->Form->input('nombremadre');
		echo $this->Form->input('nombrepadre');
		echo $this->Form->input('noasistencia');
		echo $this->Form->input('persona_id');
		echo $this->Form->input('estudiante_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Representantes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Estudiantes'), array('controller' => 'estudiantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudiante'), array('controller' => 'estudiantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
