<div class="container">
	<div class="tipopagos view">
<h2><?php echo __('Tipo de pago'); ?></h2>

		<table class="table table-bordered table-hover">
			<tr>
				<td><?php echo __('Id'); ?></td>
				<td><?php echo __('Tipo Pago'); ?></td>
			</tr>
			<td><?php echo h($tipopago['Tipopago']['id']); ?></td>
			<td><?php echo h($tipopago['Tipopago']['tipo_pago']); ?></td>
		</table>
	
</div>

<div class="related">
	<h3><?php echo __('Pagos relacionado'); ?></h3>
	<?php if (!empty($tipopago['Pago'])): ?>
	<table class="table table-bordered table-hover">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Periodo'); ?></th>
		<th><?php echo __('Estudiante'); ?></th>
		<th><?php echo __('Mes'); ?></th>
		<th><?php echo __('Monto'); ?></th>
		<th><?php echo __('Tipo de pago'); ?></th>
		
		
	</tr>
	<?php foreach ($tipopago['Pago'] as $pago): ?>
		<tr>
			<td><?php echo $pago['id']; ?></td>
			<td><?php echo $pago['periodo_id']; ?></td>
			<td><?php echo $pago['estudiante_id']; ?></td>
			<td><?php echo $pago['mes_id']; ?></td>
			<td><?php echo $pago['monto']; ?></td>
			<td><?php echo $pago['tipopago_id']; ?></td>
			
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>


</div>

</div>