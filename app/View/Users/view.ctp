<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($user['User']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Idade'); ?></dt>
		<dd>
			<?php echo h($user['User']['idade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($user['User']['sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bairro'); ?></dt>
		<dd>
			<?php echo h($user['User']['bairro']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bi'); ?></dt>
		<dd>
			<?php echo h($user['User']['bi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tef1'); ?></dt>
		<dd>
			<?php echo h($user['User']['tef1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tel2'); ?></dt>
		<dd>
			<?php echo h($user['User']['tel2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Deliveries'), array('controller' => 'deliveries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Delivery'), array('controller' => 'deliveries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rentals'), array('controller' => 'rentals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rental'), array('controller' => 'rentals', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Deliveries'); ?></h3>
	<?php if (!empty($user['Delivery'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Datadevolucoes'); ?></th>
		<th><?php echo __('Estado'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Book Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Delivery'] as $delivery): ?>
		<tr>
			<td><?php echo $delivery['id']; ?></td>
			<td><?php echo $delivery['datadevolucoes']; ?></td>
			<td><?php echo $delivery['estado']; ?></td>
			<td><?php echo $delivery['user_id']; ?></td>
			<td><?php echo $delivery['book_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'deliveries', 'action' => 'view', $delivery['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'deliveries', 'action' => 'edit', $delivery['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'deliveries', 'action' => 'delete', $delivery['id']), array(), __('Are you sure you want to delete # %s?', $delivery['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Delivery'), array('controller' => 'deliveries', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Rentals'); ?></h3>
	<?php if (!empty($user['Rental'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('DataEmprestimo'); ?></th>
		<th><?php echo __('DataDevolucao'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Book Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Rental'] as $rental): ?>
		<tr>
			<td><?php echo $rental['id']; ?></td>
			<td><?php echo $rental['dataEmprestimo']; ?></td>
			<td><?php echo $rental['dataDevolucao']; ?></td>
			<td><?php echo $rental['user_id']; ?></td>
			<td><?php echo $rental['book_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'rentals', 'action' => 'view', $rental['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'rentals', 'action' => 'edit', $rental['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'rentals', 'action' => 'delete', $rental['id']), array(), __('Are you sure you want to delete # %s?', $rental['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Rental'), array('controller' => 'rentals', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
