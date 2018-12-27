<?php echo form_open('categoria/edit/'.$categoria['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="categoria" class="col-md-4 control-label"><span class="text-danger">*</span>Categoria</label>
		<div class="col-md-8">
			<input type="text" name="categoria" value="<?php echo ($this->input->post('categoria') ? $this->input->post('categoria') : $categoria['categoria']); ?>" class="form-control" id="categoria" />
			<span class="text-danger"><?php echo form_error('categoria');?></span>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>