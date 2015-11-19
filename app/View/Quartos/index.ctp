<div class="panel panel-default">
    <div class="panel-heading">
        <?php echo __('Quartos'); ?>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="tabela">
                <thead>
                   <tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
                </thead>
              <tbody>
	<?php foreach ($quartos as $quarto): ?>
	<tr>
		<td><?php echo h($quarto['Quarto']['id']); ?>&nbsp;</td>
		<td><?php echo h($quarto['Quarto']['tipo']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $quarto['Quarto']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $quarto['Quarto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $quarto['Quarto']['id']), array(), __('Are you sure you want to delete # %s?', $quarto['Quarto']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
            </table>
        </div>

    </div>
</div>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Quarto'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Reservas'), array('controller' => 'reservas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reserva'), array('controller' => 'reservas', 'action' => 'add')); ?> </li>
	</ul>
</div>