<?php echo form_open('cor/edit/'.$cor['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="cor" class="col-md-4 control-label"><span class="text-danger">*</span>Cor</label>
		<div class="col-md-8">
			<input type="text" name="cor" value="<?php echo ($this->input->post('cor') ? $this->input->post('cor') : $cor['cor']); ?>" class="form-control" id="cor" />
			<span class="text-danger"><?php echo form_error('cor');?></span>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>