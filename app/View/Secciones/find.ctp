
<div class="secciones form" >
<?php echo $this->Form->create('Secciones'); ?>	
	<fieldset><center><h2><font face="maiandra">Buscar Seccion</font></h2></center>

	<?php
		echo $this->Form->input('Cedula');
	?>
	</fieldset><br><br>
<?php echo $this->Form->end(__('Buscar')); ?>

</div>
