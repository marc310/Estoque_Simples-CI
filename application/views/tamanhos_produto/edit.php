<?php echo form_open('tamanhos_produto/edit/'.$tamanhos_produto['idT'],array("class"=>"form-horizontal")); ?>

			<div class="form-group">
				<label for="produtoID" class="col-md-4 control-label"><span class="text-danger">*</span>Produto</label>
				<div class="col-md-8">
					<select name="produtoID" class="form-control">
						<option value="">select produto</option>
						<?php 
						foreach($all_produtos as $produto)
						{
							$selected = ($produto['idP'] == $tamanhos_produto['produtoID']) ? ' selected="selected"' : "";
		
							echo '<option value="'.$produto['idP'].'" '.$selected.'>'.$produto['nome'].'</option>';
						} 
						?>
					</select>
					<span class="text-danger"><?php echo form_error('produtoID');?></span>
				</div>
			</div>

	<div class="form-group">
		<label for="tamanhoID" class="col-md-4 control-label"><span class="text-danger">*</span>Tamanho</label>
		<div class="col-md-8">
			<select name="tamanhoID" class="form-control">
				<option value="">select tamanho</option>
				<?php 
				foreach($all_tamanhos as $tamanho)
				{
					$selected = ($tamanho['id'] == $tamanhos_produto['tamanhoID']) ? ' selected="selected"' : "";

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
					$selected = ($cor['id'] == $tamanhos_produto['corID']) ? ' selected="selected"' : "";

					echo '<option value="'.$cor['id'].'" '.$selected.'>'.$cor['cor'].'</option>';
				} 
				?>
			</select>
			<span class="text-danger"><?php echo form_error('corID');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="quantidade" class="col-md-4 control-label"><span class="text-danger">*</span>Quantidade</label>
		<div class="col-md-8">
			<input type="text" name="quantidade" value="<?php echo ($this->input->post('quantidade') ? $this->input->post('quantidade') : $tamanhos_produto['quantidade']); ?>" class="form-control" id="quantidade" />
			<span class="text-danger"><?php echo form_error('quantidade');?></span>
		</div>
	</div>
	
	<div class="form-group row">
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
				<a href="<?php echo site_url('produtos'); ?>" class="btn btn-outline-secondary waves-effect waves-light btn-large">
				<i class="fa fa-edit"></i> Voltar
				</a>
        </div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Salvar</button>
        </div>
	</div>

	</div>

	
<?php echo form_close(); ?>