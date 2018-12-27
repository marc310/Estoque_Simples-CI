
        <h2 style="margin-top:0px">Produtos <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nome <?php echo form_error('nome') ?></label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" value="<?php echo $nome; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Descricao <?php echo form_error('descricao') ?></label>
            <input type="text" class="form-control" name="descricao" id="descricao" placeholder="Descricao" value="<?php echo $descricao; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">ModeloID <?php echo form_error('modeloID') ?></label>
            <input type="text" class="form-control" name="modeloID" id="modeloID" placeholder="ModeloID" value="<?php echo $modeloID; ?>" />
        </div>
	    <div class="form-group">
            <label for="int">CategoriaID <?php echo form_error('categoriaID') ?></label>
            <input type="text" class="form-control" name="categoriaID" id="categoriaID" placeholder="CategoriaID" value="<?php echo $categoriaID; ?>" />
        </div>
	    <input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('produtos') ?>" class="btn btn-default">Cancel</a>
	</form>