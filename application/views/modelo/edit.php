<?php echo form_open('modelo/edit/'.$modelo['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="modelo" class="col-md-4 control-label"><span class="text-danger">*</span>Modelo</label>
		<div class="col-md-8">
			<input type="text" name="modelo" value="<?php echo ($this->input->post('modelo') ? $this->input->post('modelo') : $modelo['modelo']); ?>" class="form-control" id="modelo" />
			<span class="text-danger"><?php echo form_error('modelo');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="descricao" class="col-md-4 control-label">Descricao</label>
		<div class="col-md-8">
			<input type="text" name="descricao" value="<?php echo ($this->input->post('descricao') ? $this->input->post('descricao') : $modelo['descricao']); ?>" class="form-control" id="descricao" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>