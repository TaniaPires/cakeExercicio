<div class="reservas view">
<h2><?php echo __('Reserva'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($reserva['Reserva']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data'); ?></dt>
		<dd>
			<?php echo h($reserva['Reserva']['data']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cliente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($reserva['Cliente']['id'], array('controller' => 'clientes', 'action' => 'view', $reserva['Cliente']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quarto'); ?></dt>
		<dd>
			<?php echo $this->Html->link($reserva['Quarto']['id'], array('controller' => 'quartos', 'action' => 'view', $reserva['Quarto']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cancelado'); ?></dt>
		<dd>
			<?php echo h($reserva['Reserva']['cancelado']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Reserva'), array('action' => 'edit', $reserva['Reserva']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Reserva'), array('action' => 'delete', $reserva['Reserva']['id']), array(), __('Are you sure you want to delete # %s?', $reserva['Reserva']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reserva'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Quartos'), array('controller' => 'quartos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quarto'), array('controller' => 'quartos', 'action' => 'add')); ?> </li>
	</ul>
</div>
