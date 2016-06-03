<div class="container">
	<div class="representantes index">
	<h2><?php echo __('Representantes'); ?></h2>
	<table class="table table-bordered table-hover">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('persona_id'); ?></th>
			<th><?php echo $this->Paginator->sort('estudiante_id'); ?></th>
			<th><?php echo $this->Paginator->sort('parentezco'); ?></th>
		
		
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($representantes as $representante): ?>
	<tr>

		<td><?php echo h($representante['Representante']['id']); ?>&nbsp;</td>

		<td>
			<?php echo $this->Html->link($representante['Persona']['nombre_persona'], array('controller' => 'personas', 'action' => 'view', $representante['Persona']['id'])); ?>
		</td>

		<td><?php foreach($personas as $es):
   				 if($es['Persona']['id'] == $representante['Estudiante']['persona_id']){
       					echo $es['Persona']['nombre_persona'];}?>

				<?php endforeach;?>
		</td>

		<td><?php echo h($representante['Representante']['parentezco']); ?>&nbsp;</td>
		
		
		<td class="actions">
			<?php echo $this->Html->link(__('Detellate'), array('action' => 'view', $representante['Representante']['id']), array('class' => 'btn btn-sm btn-info')); ?>
			<?php echo $this->Html->link(__('Modificar'), array('action' => 'edit', $representante['Representante']['id']), array('class' => 'btn btn-sm btn-warning')); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $representante['Representante']['id']), array('class' => 'btn btn-sm btn-danger'), array('confirm' => __('Are you sure you want to delete # %s?', $representante['Representante']['id']))); ?>
			<!--<?php echo $this->Html->link(('View'), array('action' => 'view', $representante['Representante']['id'])); ?>
			<?php echo $this->Html->link(('Edit'), array('action' => 'edit', $representante['Representante']['id'])); ?>
			<?php echo $this->Form->postLink(('Delete'), array('action' => 'delete', $representante['Representante']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $representante['Representante']['id']))); ?>-->
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>


</div>