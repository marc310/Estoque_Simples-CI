<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Categorias de Produtos</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Início</a></li>
            <li class="breadcrumb-item active">Categorias do Produto</li>
        </ol>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <div class="col-1"></div>
            <!-- <a href="<?php echo site_url('categoria/add'); ?>">
                <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i>
                    Novo Produto
                </button>
            </a> -->
			

				<span class="input-group-btn" style="margin-left:10px">
				<a href="<?php echo site_url('produtos'); ?>"
				class="btn btn-outline-secondary waves-effect waves-light btn-large">
				<i class="fa fa-edit"></i> Voltar
				</a>
				</span>

        </div>
    </div>
</div>

<div class="card" style="padding-top:30px">

	<?php echo form_open('categoria/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group row col-md-12">
			<div class="col-md-2">
			<label for="categoria" class="control-label"><span class="text-danger">*</span>Categoria</label>
			</div>
		
		<div class="form-group col-md-9">
			<input type="text" name="categoria" value="<?php echo $this->input->post('categoria'); ?>" class="form-control" id="categoria" />
			<span class="text-danger"><?php echo form_error('categoria');?></span>
		</div>
		
		<div class="form-group">
			<div class="col-sm-offset-4 col-sm-8">
				<button type="submit" class="btn btn-success">Salvar</button>
			</div>
		</div>

	</div>
		<?php echo form_close(); ?>
		
</div>
<!-- ============================================================== -->

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Categoria</th>
		<th>Actions</th>
    </tr>
	<?php foreach($categorias as $c){ ?>
    <tr>
		<td><?php echo $c['id']; ?></td>
		<td><?php echo $c['categoria']; ?></td>
		<td>
            <a href="<?php echo site_url('categoria/edit/'.$c['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('categoria/remove/'.$c['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
