<?php echo form_open('tamanhos_produto/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="tamanhoID" class="col-md-4 control-label"><span class="text-danger">*</span>Tamanho</label>
		<div class="col-md-8">
			<select name="tamanhoID" class="form-control">
				<option value="">select tamanho</option>
				<?php 
				foreach($all_tamanhos as $tamanho)
				{
					$selected = ($tamanho['id'] == $this->input->post('tamanhoID')) ? ' selected="selected"' : "";

					echo '<option value="'.$tamanho['id'].'" '.$selected.'>'.$tamanho['tamanho'].'</option>';
				} 
				?>
			</select>
			<span class="text-danger"><?php echo form_error('tamanhoID');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="corID" class="col-md-4 control-label"><span class="text-danger">*</span>Cor</label>
		<div class="col-md-8">
			<select name="corID" class="form-control">
				<option value="">select cor</option>
				<?php 
				foreach($all_cores as $cor)
				{
					$selected = ($cor['id'] == $this->input->post('corID')) ? ' selected="selected"' : "";

					echo '<option value="'.$cor['id'].'" '.$selected.'>'.$cor['cor'].'</option>';
				} 
				?>
			</select>
			<span class="text-danger"><?php echo form_error('corID');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="produtoID" class="col-md-4 control-label"><span class="text-danger">*</span>Produto</label>
		<div class="col-md-8">
			<select name="produtoID" class="form-control">
				<option value="">select produto</option>
				<?php 
				foreach($all_produtos as $produto)
				{
					$selected = ($produto['id'] == $this->input->post('produtoID')) ? ' selected="selected"' : "";

					echo '<option value="'.$produto['id'].'" '.$selected.'>'.$produto['nome'].'</option>';
				} 
				?>
			</select>
			<span class="text-danger"><?php echo form_error('produtoID');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="quantidade" class="col-md-4 control-label"><span class="text-danger">*</span>Quantidade</label>
		<div class="col-md-8">
			<input type="text" name="quantidade" value="<?php echo $this->input->post('quantidade'); ?>" class="form-control" id="quantidade" />
			<span class="text-danger"><?php echo form_error('quantidade');?></span>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>