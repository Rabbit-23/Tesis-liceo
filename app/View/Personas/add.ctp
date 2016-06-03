<div class="container">
	<div class="container col-md-4">
		<div class="personas form">
<?php echo $this->Form->create('Persona'); ?>
	<fieldset>
		<legend><?php echo __('Registrar Estudiante'); ?></legend>
	<?php
		echo $this->Form->input('nombre', array('class' => 'form-control', 'label' => 'Nombre'));
		echo $this->Form->input('apellido', array('class' => 'form-control', 'label' => 'Apellido'));
		echo $this->Form->input('cedula', array('class' => 'form-control', 'label' => 'Cédula'));
		echo $this->Form->input('telefono', array('class' => 'form-control', 'label' => 'Teléfono'));
		echo $this->Form->input('direccion', array('class' => 'form-control', 'label' => 'Dirección'));
		echo $this->Form->input('estado', array('class' => 'form-control', 'label' => 'Estado', 'type' => 'select', 'options' => array(
			'Amazonas'=>'Amazonas',
			'Anzoategui'=>'Anzoátegui',
			'Apure' => 'Apure',
			'Aragua' => 'Aragua',
			'Barinas' => 'Barinas',
			'Bolívar' => 'Bolívar',
			'Carabobo' => 'Carabobo',
			'Cojedes' => 'Cojedes',
			'Delta Amacuro' => 'Delta Amacuro',
			'Distrito Capital	' => 'Distrito Capital	',
			'Falcon	' => 'Falcón',
			'Guarico' => 'Guárico',
			'Lara' => 'Lara',
			'Merida' => 'Mérida',
			'Miranda' => 'Miranda',
			'Monagas' => 'Monagas',
			'Nueva Esparta' => 'Nueva Esparta',
			'Portuguesa	' => 'Portuguesa',
			'Sucre' => 'Sucre',
			'Tachira' => 'Tachira',
			'Trujillo' => 'Trujillo',
			'Vargas' => 'Vargas',
			'Yaracuy' => 'Yaracuy',
			'Zulia' => 'Zulia')



		 , array('class' => 'form-control')));
		echo $this->Form->input('fechanacimiento', array('class' => 'form-control', 'label' => 'Fecha de nacimiento'));
		
		
		echo $this->Form->input('estatus_id', array('class' => 'form-control', 'label' => 'Estatus'));
		

		echo $this->Form->input('sexo', array('class' => 'form-control', 'label' => 'Sexo', 'type' => 'select', 'options' => array('F' => 'Femenino', 'M' => 'Masculino'), array('class' => 'form-control')));
	?>
	<hr>
	</fieldset>
<?php echo $this->Form->end(array('label' => 'Registrar', 'class' =>'btn btn-success')); ?>
</div>


	</div>
</div>