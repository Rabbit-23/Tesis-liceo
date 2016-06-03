<div class="container">
	<div class="container col-md-4">
		<div class="docentes form">
<?php echo $this->Form->create('Docente'); ?>
	<fieldset>
		<legend><?php echo __('Modificar Docente'); ?></legend>
	<?php
		echo $this->Form->input('id', array('class' => 'form-control', 'label' => 'Id'));
		echo $this->Form->input('persona_id', array('class' => 'form-control', 'label' => 'Persona'));
		echo $this->Form->input('Materia', array('class' => 'form-control', 'label' => 'Materia'));
	?>
	<hr>
	</fieldset>
<?php echo $this->Form->end(array('label' => 'Modificar', 'class' =>'btn btn-success')); ?>
</div>


	</div>
</div>