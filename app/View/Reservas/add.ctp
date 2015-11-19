<div class="reservas form">
<?php echo $this->Form->create('Reserva'); ?>
	<fieldset>
		<legend><?php echo __('Add Reserva'); ?></legend>
	<?php
		echo $this->Form->input('data');
		echo $this->Form->input('cliente_id');
		echo $this->Form->input('quarto_id');
		echo $this->Form->input('cancelado');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Reservas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Quartos'), array('controller' => 'quartos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quarto'), array('controller' => 'quartos', 'action' => 'add')); ?> </li>
	</ul>
</div>