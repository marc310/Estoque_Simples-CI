<div class="pull-right">
	<a href="<?php echo site_url('tamanhos_produto/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>TamanhoID</th>
		<th>CorID</th>
		<th>ProdutoID</th>
		<th>Quantidade</th>
		<th>Actions</th>
    </tr>
	<?php foreach($tamanhos_produtos as $t){ ?>
    <tr>
		<td><?php echo $t['idT']; ?></td>
		<td><?php echo $t['tamanhoID']; ?></td>
		<td><?php echo $t['corID']; ?></td>
		<td><?php echo $t['produtoID']; ?></td>
		<td><?php echo $t['quantidade']; ?></td>
		<td>
            <a href="<?php echo site_url('tamanhos_produto/edit/'.$t['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('tamanhos_produto/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
