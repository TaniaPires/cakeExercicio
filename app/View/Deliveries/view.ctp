<div class="deliveries view">
<h2><?php echo __('Delivery'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($delivery['Delivery']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datadevolucoes'); ?></dt>
		<dd>
			<?php echo h($delivery['Delivery']['datadevolucoes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado'); ?></dt>
		<dd>
			<?php echo h($delivery['Delivery']['estado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($delivery['User']['id'], array('controller' => 'users', 'action' => 'view', $delivery['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Book'); ?></dt>
		<dd>
			<?php echo $this->Html->link($delivery['Book']['id'], array('controller' => 'books', 'action' => 'view', $delivery['Book']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Delivery'), array('action' => 'edit', $delivery['Delivery']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Delivery'), array('action' => 'delete', $delivery['Delivery']['id']), array(), __('Are you sure you want to delete # %s?', $delivery['Delivery']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Deliveries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Delivery'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
	</ul>
</div>
