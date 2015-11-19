<div class="quartos form">
<?php echo $this->Form->create('Quarto'); ?>
	<fieldset>
		<legend><?php echo __('Edit Quarto'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tipo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Quarto.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Quarto.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Quartos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Reservas'), array('controller' => 'reservas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reserva'), array('controller' => 'reservas', 'action' => 'add')); ?> </li>
	</ul>
</div>
