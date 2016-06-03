<div class="container">
	<div class="container col-md-4">
		<div class="personas form">
<?php echo $this->Form->create('Persona'); ?>
	<fieldset>
		<legend><?php echo __('Registrar Representante'); ?></legend>
	<?php
		echo $this->Form->input('nombre', array('class' => 'form-control', 'label' => 'Nombre'));
		echo $this->Form->input('apellido', array('class' => 'form-control', 'label' => 'Apellido'));
		echo $this->Form->input('cedula', array('class' => 'form-control', 'label' => 'Cédula'));
		echo $this->Form->input('telefono', array('class' => 'form-control', 'label' => 'Teléfono'));
		echo $this->Form->input('direccion', array('class' => 'form-control', 'label' => 'Dirección'));
		echo $this->Form->input('fechanacimiento', array('class' => 'form-control', 'label' => 'fecha de nacimiento', 'type' => 'select', 'options' => array('Enero' => 'Enero', 'Febrero' => 'Febrero','Marzo' => 'Marzo', 'Abril' => 'Abril','Mayo' => 'Mayo', 'Junio' => 'Junio','Julio' => 'Julio', 'Agosto' => 'Agosto','Septiembre' => 'Septiembre', 'Octubre' => 'Octubre','Noviembre' => 'Noviembre', 'Diciembre' => 'Diciembre'), array('class' => 'form-control')));
		echo $this->Form->input('-', array('class' => 'form-control', 'label' => '-', 'type' => 'select', 'options' => array('1' => '1', '2' => '2','3' => '3', '4' => '4','5' => '5', '6' => '6','7' => '7', '8' => '8','9' => '9', '10' => '10','11' => '11', '12' => '12','13' => '13', '14' => '14','15' => '15', '16' => '16','17' => '17', '18' => '18','19' => '19', '20' => '20','21' => '22', '23' => '24','25' => '25', '26' => '26','27' => '27', '28' => '29','30' => '30', '31' => '31'), array('class' => 'form-control')));
		echo $this->Form->input('-', array('class' => 'form-control', 'label' => '-', 'type' => 'select', 'options' => array('1936' => '1936','1937' => '1937','1938' => '1938','1939' => '1939','1940' => '1940','1941' => '1941','1942' => '1942','1943' => '1943','1944' => '1944','1945' => '1945','1946' => '1946','1947' => '1947','1948' => '1948','1949' => '1949','1950' => '1950', '1951' => '1951', '1952' => '1952', '1953' => '1953', '1951' => '1951', '1951' => '1951', '1951' => '1951', '1951' => '1951', '1951' => '1951', '1951' => '1951', '1954' => '1954', '1955' => '1955', '1956' => '1956', '1957' => '1957', '1958' => '1958', '1959' => '1959', '19560' => '1960', '1961' => '1961', '1962' => '1962', '1963' => '1963', '1964' => '1964', '1965' => '1965', '1966' => '1966', '1967' => '1967', '1968' => '1968', '1969' => '1969', '1970' => '1970', '1971' => '1971', '1972' => '1972', '1973' => '1973', '1974' => '1974', '1975' => '1975', '1976' => '1976', '1977' => '1977', '1978' => '1978', '1979' => '1979', '1980' => '1980', '1981' => '1981', '1982' => '1982', '1983' => '1983', '1984' => '1984', '1985' => '1985', '1986' => '1986', '1987' => '1987', '1988' => '1988', '1989' => '1989', '1990' => '1990', '1991' => '1991', '1992' => '1992', '1993' => '1993', '1994' => '1994', '1995' => '1995', '1993' => '1993', '1993' => '1993', '1993' => '1993', '1993' => '1993', '1993' => '1993', '1993' => '1993', '1996' => '1996', '1997' => '1997', '1998'), array('class' => 'form-control')));
		echo $this->Form->input('estatus_id', array('class' => 'form-control', 'label' => 'Estatus'));
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
		echo $this->Form->input('sexo', array('class' => 'form-control', 'label' => 'Sexo', 'type' => 'select', 'options' => array('F' => 'Femenino', 'M' => 'Masculino'), array('class' => 'form-control')));
	?>
	<hr>
	</fieldset>
<?php echo $this->Form->end(array('label' => 'Registrar', 'class' =>'btn btn-success')); ?>
</div>


	</div>
</div>