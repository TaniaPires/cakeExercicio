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
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('celular'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
        <tr>
					<th><input type="text" id="txtColuna1"/></th>
					<th><input type="text" id="txtColuna2"/></th>
					<th><input type="text" id="txtColuna3"/></th>
				</tr>
                </thead>
            <tbody>
	<?php foreach ($clientes as $cliente): ?>
	<tr>
		<td><?php echo h($cliente['Cliente']['id']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['nome']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['email']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['celular']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $cliente['Cliente']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cliente['Cliente']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cliente['Cliente']['id']), array(), __('Are you sure you want to delete # %s?', $cliente['Cliente']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Cliente'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Reservas'), array('controller' => 'reservas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reserva'), array('controller' => 'reservas', 'action' => 'add')); ?> </li>
	</ul>
</div>