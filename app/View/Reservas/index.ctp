

<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="script.js"></script> 


<script type="text/javascript">
$(function(){
	$("#tabela input").keyup(function(){		
		var index = $(this).parent().index();
		var nth = "#tabela td:nth-child("+(index+1).toString()+")";
		var valor = $(this).val().toUpperCase();
		$("#tabela tbody tr").show();
		$(nth).each(function(){
			if($(this).text().toUpperCase().indexOf(valor) < 0){
				$(this).parent().hide();
			}
		});
	});

	$("#tabela input").blur(function(){
		$(this).val("");
	});	
});
            
        </script>


<div class="panel panel-default">
    <div class="panel-heading">
        <?php echo __('Reservas'); ?>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="tabela">
                <thead>
                    <tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('data'); ?></th>
			<th><?php echo $this->Paginator->sort('cliente_id'); ?></th>
			<th><?php echo $this->Paginator->sort('quarto_id'); ?></th>
			<th><?php echo $this->Paginator->sort('cancelado'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
        <tr>
					<th><input type="text" id="txtColuna1"/></th>
					<th><input type="text" id="txtColuna2"/></th>
					<th><input type="text" id="txtColuna3"/></th>
				</tr>
                </thead>
               <tbody>
	<?php foreach ($reservas as $reserva): ?>
	<tr>
		<td><?php echo h($reserva['Reserva']['id']); ?>&nbsp;</td>
		<td><?php echo h($reserva['Reserva']['data']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($reserva['Cliente']['nome'], array('controller' => 'clientes', 'action' => 'view', $reserva['Cliente']['nome'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($reserva['Quarto']['tipo'], array('controller' => 'quartos', 'action' => 'view', $reserva['Quarto']['tipo'])); ?>
		</td>
		<td><?php echo h($reserva['Reserva']['cancelado']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $reserva['Reserva']['id'])); ?>
			<?php echo $this->Html->link(__('Cancelar'), array('action' => 'edit', $reserva['Reserva']['id'])); ?>
			<?php echo $this->Form->postLink(__('Apagar'), array('action' => 'delete', $reserva['Reserva']['id']), array(), __('Are you sure you want to delete # %s?', $reserva['Reserva']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Reserva'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('controller' => 'clientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('controller' => 'clientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Quartos'), array('controller' => 'quartos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Quarto'), array('controller' => 'quartos', 'action' => 'add')); ?> </li>
	</ul>
</div>