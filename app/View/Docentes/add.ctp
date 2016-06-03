<div class="container">
	<div class="container col-md-4">
		<div class="docentes form">
<?php echo $this->Form->create('Docente'); ?>
	<fieldset>
		<legend><?php echo __('Registrar Docente'); ?></legend>
	<?php
		echo $this->Form->input('persona_id', array('class' => 'form-control', 'label' => 'Persona'));
		echo $this->Form->input('Materia', array('class' => 'form-control', 'label' => 'Materia'));
	?>
	<hr>
	</fieldset>
<?php echo $this->Form->end(array('label' => 'Registrar', 'class' =>'btn btn-success')); ?>
<hr>
</div>
	</div>
</div>
