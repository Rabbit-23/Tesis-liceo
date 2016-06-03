<div class="container">
	<div class="container col-md-4">
		<div class="estudiantes form">
<?php echo $this->Form->create('Estudiante', array('role' => 'form')); ?>
	<fieldset>
		<legend><?php echo __('Modificar Estudiante'); ?></legend>
		
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('persona_id', array('class' => 'form-control', 'label' => 'Persona'));
		echo $this->Form->input('lugar_de_nacimiento', array('class' => 'form-control', 'label' => 'Lugar de nacimiento'));
		echo $this->Form->input('impedimento_fisico', array('class' => 'form-control', 'label' => 'Impedimento fisico'));
		echo $this->Form->input('enfermedad', array('class' => 'form-control', 'label' => 'Posee alguna enfermedad'));
		echo $this->Form->input('alergico', array('class' => 'form-control', 'label' => 'Alergico'));
		echo $this->Form->input('vive_con_sus_padres', array('class' => 'form-control', 'label' => 'Vive con sus padres'));
		echo $this->Form->input('plantel_de_donde_proviene', array('class' => 'form-control', 'label' => 'Plantel donde proviene'));
	?>
	<hr>
	</fieldset>
<?php echo $this->Form->end(array('label' => 'Modificar', 'class' =>'btn btn-success')); ?>
</div>


		
	</div>
</div>