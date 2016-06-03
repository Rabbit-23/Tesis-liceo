<div class="container">
	<div class="Detalles pagos">
<h2><?php echo __('Pago'); ?></h2>

	<table class="table table-bordered table-hover">
		<tr>
			<td><?php echo __('Id'); ?></td>
			<td><?php echo __('Periodo'); ?></td>
			<td><?php echo __('Estudiante'); ?></td>
			<td><?php echo __('Mes'); ?></dt></td>
			<td><?php echo __('Monto'); ?></td>
			<td><?php echo __('Tipo de pago'); ?></dt></td>
		</tr>

		<tr>
			<td><?php echo h($pago['Pago']['id']); ?></td>
			<td><?php echo $this->Html->link($pago['Periodo']['periodo'], array('controller' => 'periodos', 'action' => 'view', $pago['Periodo']['id'])); ?></td>
			<td><?php echo $this->Html->link($pago['Estudiante']['persona_id'], array('controller' => 'estudiantes', 'action' => 'view', $pago['Estudiante']['id'])); ?></td>
			<td><?php echo $this->Html->link($pago['Mes']['mes'], array('controller' => 'meses', 'action' => 'view', $pago['Mes']['id'])); ?></td>
			<td><?php echo h($pago['Pago']['monto']); ?></td>
			<td><?php echo $this->Html->link($pago['Tipopago']['tipo_pago'], array('controller' => 'tipopagos', 'action' => 'view', $pago['Tipopago']['id'])); ?></td>
		</tr>
	</table>
	
</div>


</div>