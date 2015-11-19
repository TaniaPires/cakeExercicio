<div class="rentals view">
<h2><?php echo __('Rental'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($rental['Rental']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DataEmprestimo'); ?></dt>
		<dd>
			<?php echo h($rental['Rental']['dataEmprestimo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DataDevolucao'); ?></dt>
		<dd>
			<?php echo h($rental['Rental']['dataDevolucao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rental['User']['id'], array('controller' => 'users', 'action' => 'view', $rental['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Book'); ?></dt>
		<dd>
			<?php echo $this->Html->link($rental['Book']['id'], array('controller' => 'books', 'action' => 'view', $rental['Book']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Rental'), array('action' => 'edit', $rental['Rental']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Rental'), array('action' => 'delete', $rental['Rental']['id']), array(), __('Are you sure you want to delete # %s?', $rental['Rental']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Rentals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rental'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('controller' => 'books', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('controller' => 'books', 'action' => 'add')); ?> </li>
	</ul>
</div>
