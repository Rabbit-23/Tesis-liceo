<div class="container">
	<div class="container col-md-4">
		<div class="pagos form">
<?php echo $this->Form->create('Pago'); ?>
	<fieldset>
		<legend><?php echo __('Añadir Pago'); ?></legend>
	<?php
		echo $this->Form->input('periodo_id', array('class' => 'form-control', 'label' => 'Periodo'));
		echo $this->Form->input('estudiante_id', array('class' => 'form-control', 'label' => 'Estudiante'));
		echo $this->Form->input('mes_id', array('class' => 'form-control', 'label' => 'Mes a cancelar'));
		echo $this->Form->input('monto', array('class' => 'form-control', 'label' => 'Monto'));
		echo $this->Form->input('fecha_pago', array('class' => 'form-control', 'label' => 'Fecha de Pago'));
		echo $this->Form->input('tipopago_id', array('class' => 'form-control', 'label' => 'Tipo de pago'));
	?>
	<hr>
	</fieldset>
<?php echo $this->Form->end(array('label' => 'Añadir pago', 'class' =>'btn btn-success')); ?>
</div>


	</div>
</div>