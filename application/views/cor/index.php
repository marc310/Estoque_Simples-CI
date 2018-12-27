<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Detalhes da Cor</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Início</a></li>
            <li class="breadcrumb-item active">Cores</li>
        </ol>
    </div>
</div>


<!-- ============================================================== -->

<div class="pull-right">
<?php echo form_open('cor/add',array("class"=>"form-horizontal")); ?>
<div class="form-group row col-md-12">
	<div class="form-group col-md-2">
		<label for="cor" class="col-md-4 control-label"><span class="text-danger">*</span>Cor:</label>
	</div>
	<div class="form-group col-md-9">
		<input type="text" name="cor" value="<?php echo $this->input->post('cor'); ?>" class="form-control" id="cor" />
		<span class="text-danger"><?php echo form_error('cor');?></span>
	</div>
	
	<div class="form-group col-md-1">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Salvar</button>
        </div>
	</div>
</div>
<?php echo form_close(); ?> 
</div>

<h3 class="box-title">Cores Disponíveis</h3>
	<hr class="m-t-0 m-b-40">

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Cor</th>
		<th>Actions</th>
    </tr>
	<?php foreach($cores as $c){ ?>
    <tr>
		<td><?php echo $c['id']; ?></td>
		<td><?php echo $c['cor']; ?></td>
		<td>
            <a href="<?php echo site_url('cor/edit/'.$c['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('cor/remove/'.$c['id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
