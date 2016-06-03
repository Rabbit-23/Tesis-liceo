<div class="container">
	<div class="container col-md-4">
		<div class="useres form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Registrar usuario'); ?></legend>
	<?php
		echo $this->Form->input('username', array('class' => 'form-control', 'label' => 'Nombre de usuario'));
		echo $this->Form->input('password', array('class' => 'form-control', 'label' => 'Contraseña'))?>
		
	<hr>
	</fieldset>
<?php echo $this->Form->end(array('label' => 'Registrar', 'class' =>'btn btn-success')); ?>
<hr>


	</div>
</div>