<?php echo form_open('tamanho/edit/'.$tamanho['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="tamanho" class="col-md-4 control-label"><span class="text-danger">*</span>Tamanho</label>
		<div class="col-md-8">
			<input type="text" name="tamanho" value="<?php echo ($this->input->post('tamanho') ? $this->input->post('tamanho') : $tamanho['tamanho']); ?>" class="form-control" id="tamanho" />
			<span class="text-danger"><?php echo form_error('tamanho');?></span>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>