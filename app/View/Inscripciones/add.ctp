<div class="container">
	<div class="container col-md-4">
		<div class="inscripciones form">
<?php echo $this->Form->create('Inscripcion'); ?>
	<fieldset>
		<legend><?php echo __('Registrar Inscripcion'); ?></legend>
	<?php
		echo $this->Form->input('estudiante_id', array('class' => 'form-control', 'label' => 'Estudiante'));
		echo $this->Form->input('seccion_id', array('class' => 'form-control', 'label' => 'Sección'));
		echo $this->Form->input('periodo_id', array('class' => 'form-control', 'label' => 'Período'));
		echo $this->Form->input('fecha_inscripcion', array('class' => 'form-control', 'label' => 'Fecha de inscripcion'));
	?>
	<hr>
	</fieldset>
<?php echo $this->Form->end(array('label' => 'Registrar inscripción', 'class' =>'btn btn-success')); ?>
</div>


	</div>
</div>