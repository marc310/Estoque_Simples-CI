<?php echo form_open('usuario/edit/'.$usuario['id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="nomeusuario" class="col-md-4 control-label"><span class="text-danger">*</span>Nome de Usuário</label>
		<div class="col-md-8">
			<input type="text" name="nomeusuario" value="<?php echo ($this->input->post('nomeusuario') ? $this->input->post('nomeusuario') : $usuario['nomeusuario']); ?>" class="form-control" id="nomeusuario" />
			<span class="text-danger"><?php echo form_error('nomeusuario');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="senha" class="col-md-4 control-label">Senha</label>
		<div class="col-md-8">
			<input type="password" name="senha" value="<?php echo ($this->input->post('senha') ? $this->input->post('senha') : $usuario['senha']); ?>" class="form-control" id="senha" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Salvar</button>
        </div>
	</div>
	

<?php echo form_close(); ?>