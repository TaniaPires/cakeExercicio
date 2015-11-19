<div class="clientes view">
<h2><?php echo __('Cliente'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Celular'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['celular']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cliente'), array('action' => 'edit', $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cliente'), array('action' => 'delete', $cliente['Cliente']['id']), array(), __('Are you sure you want to delete # %s?', $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservas'), array('controller' => 'reservas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reserva'), array('controller' => 'reservas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Reservas'); ?></h3>
	<?php if (!empty($cliente['Reserva'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Data'); ?></th>
		<th><?php echo __('Cliente Id'); ?></th>
		<th><?php echo __('Quarto Id'); ?></th>
		<th><?php echo __('Cancelado'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($cliente['Reserva'] as $reserva): ?>
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
