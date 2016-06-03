<div class="container">
	<div class="pagos index">
	<h2><?php echo __('Lista de pagos'); ?></h2>
	<hr>
	<table class="table table-bordered table-hover">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			
			<th><?php echo $this->Paginator->sort('estudiante_id'); ?></th>
			<th><?php echo $this->Paginator->sort('periodo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('mes_id'); ?></th>
			<th><?php echo $this->Paginator->sort('monto'); ?></th>
			<th><?php echo $this->Paginator->sort('tipopago_id'); ?></th>
			
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($pagos as $pago): ?>
	<tr>
		<td><?php echo h($pago['Pago']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pago['Periodo']['periodo'], array('controller' => 'periodos', 'action' => 'view', $pago['Periodo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pago['Estudiante']['persona_id'], array('controller' => 'estudiantes', 'action' => 'view', $pago['Estudiante']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pago['Mes']['mes'], array('controller' => 'meses', 'action' => 'view', $pago['Mes']['id'])); ?>
		</td>
		<td><?php echo h($pago['Pago']['monto']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pago['Tipopago']['tipo_pago'], array('controller' => 'tipopagos', 'action' => 'view', $pago['Tipopago']['id'])); ?>
		</td>
		
		<td class="actions">
			<?php echo $this->Html->link(__('Detalle'), array('action' => 'view', $pago['Pago']['id']), array('class' => 'btn btn-sm btn-info')); ?>
			<?php echo $this->Html->link(__('Modificar'), array('action' => 'edit', $pago['Pago']['id']), array('class' => 'btn btn-sm btn-warning')); ?>
			<?php echo $this->Html->link(__('Imprimir'), array('action' => 'viewpdf', $pago['Pago']['id']), array('class' => 'btn btn-sm btn-warning')); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $pago['Pago']['id']), array('class' => 'btn btn-sm btn-danger'), array('confirm' => __('Are you sure you want to delete # %s?', $pago['Pago']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	
	?>	</p>
	<?php
		
		?>	</p>
		<ul class="pagination">
			<li> <?php echo $this->Paginator->prev('< ' . __('Anterior'), array('tag' => false), null, array('class' => 'prev disabled')); ?> </li>
			<?php echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'a', 'currentClass' => 'active')); ?>
			<li> <?php echo $this->Paginator->next(__('Próximo') . ' >', array('tag' => false), null, array('class' => 'next disabled')); ?> </li>
		</ul>
	<?php echo $this->Js->writeBuffer(); ?>
	</div>
</div>


</div>