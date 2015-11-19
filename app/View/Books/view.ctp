<div class="books view">
<h2><?php echo __('Book'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($book['Book']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($book['Book']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resumo'); ?></dt>
		<dd>
			<?php echo h($book['Book']['resumo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Autor'); ?></dt>
		<dd>
			<?php echo h($book['Book']['autor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Actor'); ?></dt>
		<dd>
			<?php echo h($book['Book']['actor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Editora'); ?></dt>
		<dd>
			<?php echo h($book['Book']['editora']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Edicao'); ?></dt>
		<dd>
			<?php echo h($book['Book']['edicao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Volume'); ?></dt>
		<dd>
			<?php echo h($book['Book']['volume']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria'); ?></dt>
		<dd>
			<?php echo h($book['Book']['categoria']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Book'), array('action' => 'edit', $book['Book']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Book'), array('action' => 'delete', $book['Book']['id']), array(), __('Are you sure you want to delete # %s?', $book['Book']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Books'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Book'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Deliveries'), array('controller' => 'deliveries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Delivery'), array('controller' => 'deliveries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rentals'), array('controller' => 'rentals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rental'), array('controller' => 'rentals', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Deliveries'); ?></h3>
	<?php if (!empty($book['Delivery'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Datadevolucoes'); ?></th>
		<th><?php echo __('Estado'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Book Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($book['Delivery'] as $delivery): ?>
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
	<?php if (!empty($book['Rental'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('DataEmprestimo'); ?></th>
		<th><?php echo __('DataDevolucao'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Book Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($book['Rental'] as $rental): ?>
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
