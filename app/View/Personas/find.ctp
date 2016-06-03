
<div class="container">
	<div class="container col-md-4">
		
<?php echo $this->Form->create('Persona',array('inputDefaults'=>array('class'=>'form-control'))); ?>
	<fieldset>
		<center><legend><?php echo __('Buscar'); ?></legend></center>
	<?php
		echo $this->Form->input('Cedula', array('class' => 'form-control', 'label' => 'Cédula'));
	?>
	<hr>
	</fieldset>
<?php echo $this->Form->end(array('label' => 'Buscar', 'class' =>'btn btn-success')); ?>
</div>


	</div>
</div>