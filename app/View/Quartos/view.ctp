<div class="quartos view">
<h2><?php echo __('Quarto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($quarto['Quarto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($quarto['Quarto']['tipo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Quarto'), array('action' => 'edit', $quarto['Quarto']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Quarto'), array('action' => 'delete', $quarto['Quarto']['id']), array(), __('Are you sure you want to delete # %s?', $quarto['Quarto']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Quartos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quarto'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservas'), array('controller' => 'reservas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reserva'), array('controller' => 'reservas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Reservas'); ?></h3>
	<?php if (!empty($quarto['Reserva'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Data'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th><?php echo __('Quarto Id'); ?></th>
		<th><?php echo __('Cancelado'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($quarto['Reserva'] as $reserva): ?>
		<tr>
			<td><?php echo $reserva['id']; ?></td>
			<td><?php echo $reserva['data']; ?></td>
			<td><?php echo $reserva['cliente_id']; ?></td>
			<td><?php echo $reserva['quarto_id']; ?></td>
			<td><?php echo $reserva['cancelado']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'reservas', 'action' => 'view', $reserva['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'reservas', 'action' => 'edit', $reserva['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'reservas', 'action' => 'delete', $reserva['id']), array(), __('Are you sure you want to delete # %s?', $reserva['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Reserva'), array('controller' => 'reservas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
