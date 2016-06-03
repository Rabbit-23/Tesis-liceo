<div class="estudiantes form" >
<?php echo $this->Form->create('Estudiantes',array('inputDefaults'=>array('class'=>'form-control'))); ?>	

<fieldset>
		<center><h2><font face="maiandra">Buscar Solicitud</font></h2></center>

	<?php
		echo $this->Form->input('Nombre');
	?>
	</fieldset><br><br>
<?php echo $this->Form->end(__('Buscar')); ?>

</div>