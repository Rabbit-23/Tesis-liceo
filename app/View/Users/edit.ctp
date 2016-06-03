<div class="container">
	<div class="container col-md-4">
		<div class="useres form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		
		echo $this->Form->input('username', array('class' => 'form-control', 'label' => 'Nombre de usuario'));
		
	?>
	<hr>
	</fieldset>
<?php echo $this->Form->end(array('label' => 'Modificar', 'class' =>'btn btn-success')); ?>
</div>


	</div>
</div>