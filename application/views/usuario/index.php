<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Tamanhos para Detalhar Produtos</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Início</a></li>
            <li class="breadcrumb-item active">Tamanhos do Produto</li>
        </ol>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <div class="col-1"></div>
            <a href="<?php echo site_url('usuario/add'); ?>">
                <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i>
                    Novo Usuário
                </button>
            </a>
			

				<span class="input-group-btn" style="margin-left:10px">
				<a href="<?php echo site_url('usuario'); ?>"
				class="btn btn-outline-secondary waves-effect waves-light btn-large">
				<i class="fa fa-edit"></i> Voltar
				</a>
				</span>

        </div>
    </div>
</div>

<div class="card" style="padding-top:30px">
<!-- ============================================================== -->
<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Nome</th>
		<th>Actions</th>
    </tr>
	<?php foreach($usuarios as $u){ ?>
    <tr>
		<td><?php echo $u['id']; ?></td>
		<td><?php echo $u['nomeusuario']; ?></td>
		<td>
            <a href="<?php echo site_url('usuario/edit/'.$u['id']); ?>" class="btn btn-info btn-xs">Editar</a> 
            <a href="<?php echo site_url('usuario/remove/'.$u['id']); ?>" class="btn btn-danger btn-xs">Deletar</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
</div>