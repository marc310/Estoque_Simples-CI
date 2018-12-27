<?php echo form_open('produto/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="modeloID" class="col-md-4 control-label"><span class="text-danger">*</span>Modelo</label>
		<div class="col-md-8">
			<select name="modeloID" class="form-control">
				<option value="">select modelo</option>
				<?php 
				foreach($all_modelos as $modelo)
				{
					$selected = ($modelo['id'] == $this->input->post('modeloID')) ? ' selected="selected"' : "";

					echo '<option value="'.$modelo['id'].'" '.$selected.'>'.$modelo['modelo'].'</option>';
				} 
				?>
			</select>
			<span class="text-danger"><?php echo form_error('modeloID');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="categoriaID" class="col-md-4 control-label"><span class="text-danger">*</span>Categoria</label>
		<div class="col-md-8">
			<select name="categoriaID" class="form-control">
				<option value="">select categoria</option>
				<?php 
				foreach($all_categorias as $categoria)
				{
					$selected = ($categoria['id'] == $this->input->post('categoriaID')) ? ' selected="selected"' : "";

					echo '<option value="'.$categoria['id'].'" '.$selected.'>'.$categoria['categoria'].'</option>';
				} 
				?>
			</select>
			<span class="text-danger"><?php echo form_error('categoriaID');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="nome" class="col-md-4 control-label"><span class="text-danger">*</span>Nome</label>
		<div class="col-md-8">
			<input type="text" name="nome" value="<?php echo $this->input->post('nome'); ?>" class="form-control" id="nome" />
			<span class="text-danger"><?php echo form_error('nome');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="descricao" class="col-md-4 control-label">Descricao</label>
		<div class="col-md-8">
			<textarea name="descricao" class="form-control" id="descricao"><?php echo $this->input->post('descricao'); ?></textarea>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>