<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Detalhes do Produto</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Início</a></li>
            <li class="breadcrumb-item"><a href="<?php echo site_url('produtos'); ?>">Produtos</a></li>
            <li class="breadcrumb-item active">Detalhes do Produto</li>
        </ol>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <div class="col-1"></div>
            <a href="<?php echo site_url('produto/add'); ?>">
                <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i>
                    Novo Produto
                </button>
            </a>


        </div>
    </div>
</div>


<!-- ============================================================== -->
<!-- inicio da card box -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
<?php echo form_open('produto/edit/'.$produto['idP'],array("class"=>"form-horizontal")); ?>
        
<!-- ============================================================== -->
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active show" data-toggle="tab" href="#tamanhos" role="tab" aria-selected="true">
                        <span class="hidden-sm-up"><i class="ti-user"></i></span>
                        <span class="hidden-xs-down">Tamanhos</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#detalhes" role="tab" aria-selected="false">
                        <span class="hidden-sm-up"><i class="ti-home"></i> </span>
                        <span class="hidden-xs-down">Detalhes</span></a>
                </li>
			</ul>
<!-- ============================================================== -->
<!-- Tab panes -->
			<div class="tab-content tabcontent-border">
                <div class="tab-pane" id="detalhes" role="tabpanel">
                    <div class="p-20">
                        <div class="card-body">
<!-- ============================================================== -->

<div class="form-group row">
<div class="form-group col-md-4">
	<label for="modeloID" class="col-md-12 control-label"><span class="text-danger">*</span>Modelo</label>
	<div class="col-md-12">
		<select name="modeloID" class="form-control">
			<option value="">select modelo</option>
			<?php 
			foreach($all_modelos as $modelo)
			{
				$selected = ($modelo['id'] == $produto['modeloID']) ? ' selected="selected"' : "";

				echo '<option value="'.$modelo['id'].'" '.$selected.'>'.$modelo['modelo'].'</option>';
			} 
			?>
		</select>
		<span class="text-danger"><?php echo form_error('modeloID');?></span>
	</div>
</div>

<div class="form-group  col-md-4">
	<label for="categoriaID" class="col-md-12 control-label"><span class="text-danger">*</span>Categoria</label>
	<div class="col-md-12">
		<select name="categoriaID" class="form-control">
			<option value="">select categoria</option>
			<?php 
			foreach($all_categorias as $categoria)
			{
				$selected = ($categoria['id'] == $produto['categoriaID']) ? ' selected="selected"' : "";

				echo '<option value="'.$categoria['id'].'" '.$selected.'>'.$categoria['categoria'].'</option>';
			} 
			?>
		</select>
		<span class="text-danger"><?php echo form_error('categoriaID');?></span>
	</div>
</div>

<div class="form-group  col-md-4">
	<label for="nome" class="col-md-12 control-label"><span class="text-danger">*</span>Nome</label>
	<div class="col-md-12">
		<input type="text" name="nome" value="<?php echo ($this->input->post('nome') ? $this->input->post('nome') : $produto['nome']); ?>" class="form-control" id="nome" />
		<span class="text-danger"><?php echo form_error('nome');?></span>
	</div>
</div>

<div class="form-group  col-md-12">
	<label for="descricao" class="col-md-12 control-label">Descricao</label>
	<div class="col-md-12">
		<textarea name="descricao" class="form-control" id="descricao"><?php echo ($this->input->post('descricao') ? $this->input->post('descricao') : $produto['descricao']); ?></textarea>
	</div>
</div>
</div>
	<div class="col-md-12 align-self-center text-right">
			<!-- botao salvar -->
	<button type="submit" class="btn btn-success">Salvar</button>
	</div>
<?php echo form_close(); ?>


<!-- fechamento da tab panel 1 -->
<!-- ============================================================== -->
						</div>
					</div>
				</div>
<!-- ============================================================== -->


<!-- fechamento da tab panel 2 -->
<!-- ============================================================== -->
		<div class="tab-pane p-20 active show" id="tamanhos" role="tabpanel">
            <div class="card-body">

				
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- <?php echo form_open('tamanhos_produto/add',array("class"=>"form-horizontal")); ?> -->

<form id="formServicos" action="<?php echo base_url('tamanhos_produto/adicionarTamanhos');?>"
                                  method="post">

<div class="form-group row">
<select name="produtoID" class="form-control" hidden>
				<option value="<?php echo $produto['idP']; ?>"> </option>
				<?php 
				foreach($all_produtos as $produto)
				{
					$selected = ($produto['idP'] == $this->input->post('produtoID')) ? ' selected="selected"' : "";

					echo '<option value="'.$produto['idP'].'" '.$selected.'>'.$produto['nome'].'</option>';
				} 
				?>
			</select>


	

	<div class="form-group col-md-4">
		<label for="tamanhoID" class="col-md-12 control-label"><span class="text-danger">*</span>Tamanho</label>
		<div class="col-md-12">
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
	<div class="form-group col-md-4">
		<label for="corID" class="col-md-12 control-label"><span class="text-danger">*</span>Cor</label>
		<div class="col-md-12">
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
	
	<div class="form-group col-md-3">
		<label for="quantidade" class="col-md-12 control-label"><span class="text-danger">*</span>Quantidade</label>
		<div class="col-md-12">
			<input type="text" name="quantidade" value="<?php echo $this->input->post('quantidade'); ?>" class="form-control" id="quantidade" />
			<span class="text-danger"><?php echo form_error('quantidade');?></span>
		</div>
	</div>
	<div class="form-group col-md-1">
		<div class="col-sm-offset-4 col-sm-12">
		<button style="margin-top: 20px" class="btn btn-info span12">+</button>
        </div>
	</div>
</div>

</form>
<!-- <?php echo form_close(); ?> -->
<div id="result" class="col-md-12"></div>
	

<!-- ============================================================== -->
<h3 class="box-title">Tamanhos Disponíveis</h3>
	<hr class="m-t-0 m-b-40">

	<!-- lista tamanhos disponíveis -->
				<div id="divServicos" class="col-sm-12 m-t-20 m-b-20">
				<table class="table table-bordered m-t-30 table-hover contact-list footable footable-5 footable-paging footable-paging-center breakpoint-lg">
				<tr>
					<th>ID</th>
					<th hidden>TamanhoID</th>
					<th>Tamanhos</th>
					<th hidden>CorID</th>
					<th>Cor</th>
					<th hidden>ProdutoID</th>
					<th hidden>Produto Nome</th>
					<th>Quantidade</th>
					<th>Actions</th>
				</tr>
				<?php foreach($tamanhos_produtos as $t){ 
					#$this->db->query('YOUR QUERY HERE');
					# retorna nome do produto pelo codigo selecionado
					#$query = $this->db->query("SELECT * FROM users;");

					?>
				<tr>
					<td><?php echo $t['idT']; ?></td>
					<td hidden><?php echo $t['tamanhoID']; ?></td>
					<td><?php echo $t['tamanho']; ?></td>
					<td hidden><?php echo $t['corID']; ?></td>
					<td><?php echo $t['cor'];?></td>
					<td hidden><?php echo $t['produtoID']; ?></td>
					<td hidden><?php echo $t['nome'];?></td>
					<td><?php echo $t['quantidade']; ?></td>
					<td>
						<!-- <a href="<?php echo site_url('tamanhos_produto/edit/'.$t['idT']); ?>" class="btn btn-info btn-xs">Edit</a> 
						<a href="<?php echo site_url('tamanhos_produto/remove/'.$t['idT']); ?>" class="btn btn-danger btn-xs">Delete</a> -->

						<span class="input-group-btn" style="margin-left:10px">
                 <a href="<?php echo site_url('tamanhos_produto/edit/' . $t['idT']); ?>"
                    class="btn btn-outline-info waves-effect waves-light btn-xs"><i
                             class="fa fa-edit"></i></a>
						</span>
                        <span idAcao="<?php echo ' . $t->idT . '?>" title="Excluir Serviço" class="input-group-btn" style="margin-left:10px">
                 <a href="<?php echo site_url('tamanhos_produto/remove/' . $t['idT']); ?>"
                    class="btn btn-outline-danger waves-effect waves-light btn-xs"
                    onclick="return confirm('Tem certeza que deseja deletar este item?');"><i
                             class="fa fa-trash"></i></a></span>


					</td>
				</tr>
				<?php } ?>
			</table>
				</div>
			<!-- <div class="pull-right">
				<?php echo $this->pagination->create_links(); ?>    
			</div> -->

			

<!-- ============================================================== -->
<!--                            fim do form de adicionar serviços -->
				</div>
<!-- ============================================================== -->
			</div>
<!-- fechamento da tab panel 2-->
<!-- ============================================================== -->
		</div>
	</div>
</div>

<!-- ============================================================== -->
</div>
<!-- ============================================================== -->

			<span class="input-group-btn" style="margin-left:10px">
				<a href="<?php echo site_url('produtos'); ?>"
				class="btn btn-outline-success waves-effect waves-light btn-large">
				<i class="fa fa-edit"></i> Voltar
				</a>
			</span>

<!-- ============================================================== -->
<div class="row" style="margin-bottom:50px"></div>
<!-- fechamento do card -->
<!-- ============================================================== -->
		</div>
	</div>
</div>
<!-- ============================================================== -->
<!-- ultima div do card -->
</div>




<script type="text/javascript">

$(function(){
	$("#formServicos").submit(function(){
		dataString = $("#formServicos").serialize();

		$.ajax({
			type: "POST",
			url: "<?php echo base_url('Tamanhos_produto/adicionarTamanhos');?>",
			data: dataString,
			target: "#divServicos",
			success: function(data){
				// alert('Successful!');
				$("#result").html('Tamanho Adicionado com Sucesso!').show().fadeOut( 3000 );
				$("#result").addClass("alert alert-success");
				$("#divServicos").load("<?php echo current_url();?> #divServicos");

			}

		});

		return false;  //stop the actual form post !important!

	});
});

$(document).on('click', 'span', function (event) {
	$("#formServicos").click(function(){
		dataString = $("#formServicos").serialize();

		var idServico = $(this).attr('idAcao');
		if ((idServico % 1) == 0) {
			$.ajax({
				type: "POST",
				url: "<?php echo site_url('tamanhos_produto/remove');?>",
				data: "idServico=" + idServico,
				// target: "#divServicos",
				success: function (data) {
					if (data.result == true) {
						$("#result").html('Serviço Apagado com Sucesso!').show().fadeOut( 3000 );
						$("#result").addClass("alert alert-success");
						//$("#divServicos").load("<?php //echo current_url();?>// #divServicos");

					}
					else {
						alert('Ocorreu um erro ao tentar excluir serviço.');
					}
				}
			});
			return false;
		}

	});
});


</script>