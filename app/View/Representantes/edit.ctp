<div class="container">
	<div class="container col-md-4">
		<div class="representantes form">
<?php echo $this->Form->create('Representante'); ?>
	<fieldset>
		<legend><?php echo __('Modificar Representante'); ?></legend>
	<?php
		echo $this->Form->input('id');
	
		echo $this->Form->input('parentezco', array('class' => 'form-control', 'label' => 'Parentezco'));
		echo $this->Form->input('instruncion', array('class' => 'form-control', 'label' => 'Grado instrucción'));
		echo $this->Form->input('profesion', array('class' => 'form-control', 'label' => 'Profesión'));
		echo $this->Form->input('direcciontrabajo', array('class' => 'form-control', 'label' => 'Dirección laboral'));
		echo $this->Form->input('nombremadre', array('class' => 'form-control', 'label' => 'Nombre madre'));
		echo $this->Form->input('nombrepadre', array('class' => 'form-control', 'label' => 'Nombre padre'));
		echo $this->Form->input('noasistencia', array('class' => 'form-control', 'label' => 'En caso de ausencia'));
		echo $this->Form->input('estudiante_id', array('class' => 'form-control', 'label' => 'Estudiante'));
	?>
	<hr>
	</fieldset>
<?php echo $this->Form->end(array('label' => 'Modificar', 'class' =>'btn btn-success')); ?>
<hr>
</div>


	</div>
</div>