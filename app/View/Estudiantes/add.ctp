<div class="container">
	<div class="conatiner col-md-4">
		<div class="estudiantes form">
<?php echo $this->Form->create('Estudiante'); ?>
	<fieldset>
		<legend><?php echo __('Add Estudiante'); ?></legend>
	<?php
		echo $this->Form->input('persona_id', array('class' => 'form-control', 'label' => 'Persona'));
		echo $this->Form->input('lugar_de_nacimiento', array('class' => 'form-control', 'label' => 'Lugar natal'));
		echo $this->Form->input('impedimento_fisico', array('class' => 'form-control', 'label' => 'Impedimento físico'));
		echo $this->Form->input('enfermedad', array('class' => 'form-control', 'label' => 'Enfermedad'));
		echo $this->Form->input('alergico', array('class' => 'form-control', 'label' => 'Alérgico'));
		echo $this->Form->input('vive_con_sus_padres', array('class' => 'form-control', 'label' => 'Vive con sus padres'));
		echo $this->Form->input('plantel_de_donde_proviene', array('class' => 'form-control', 'label' => 'Plantel donde proviene'));
	?>
	</fieldset>
<?php echo $this->Form->end(array('label' => 'Registrar', 'class' =>'btn btn-success')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Estudiantes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscripciones'), array('controller' => 'inscripciones', 'action' => 'index')); ?> </li>
		
		<li><?php echo $this->Html->link(__('List Notas'), array('controller' => 'notas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nota'), array('controller' => 'notas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pagos'), array('controller' => 'pagos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pago'), array('controller' => 'pagos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Representantes'), array('controller' => 'representantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Representante'), array('controller' => 'representantes', 'action' => 'add')); ?> </li>
	</ul>
</div>

	</div>
</div>