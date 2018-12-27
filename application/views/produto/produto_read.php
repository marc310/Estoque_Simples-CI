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
			

				<span class="input-group-btn" style="margin-left:10px">
				<a href="<?php echo site_url('produtos'); ?>"
				class="btn btn-outline-secondary waves-effect waves-light btn-large">
				<i class="fa fa-edit"></i> Voltar
				</a>
				</span>

        </div>
    </div>
</div>


<!-- ============================================================== -->
<h2 style="margin-top:0px">Vizualizar Detalhes do Produto</h2>
	<table class="table">
	    <tr><td>Nome</td><td><?php echo $nome; ?></td></tr>
	    <tr><td>Descricao</td><td><?php echo $descricao; ?></td></tr>
	    <tr hidden><td>ModeloID</td><td><?php echo $modeloID; ?></td></tr>
	    <tr><td>Modelo</td><td><?php echo $modelo; ?></td></tr>
	    <tr hidden><td>CategoriaID</td><td><?php echo $categoriaID; ?></td></tr>
	    <tr><td>Categoria</td><td><?php echo $categoria; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('produtos') ?>" class="btn btn-default" hidden>Cancel</a></td></tr>
	</table>
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- ============================================================== -->
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
			<th>Ações</th>
		</tr>
		<?php foreach($tamanhos_produtos as $t){ 
			#$this->db->query('YOUR QUERY HERE');
			# retorna nome do produto pelo codigo selecionado
			#$q	uery = $this->db->query("SELECT * FROM users;");

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
				<!-- ============================================================== -->
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
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- ============================================================== -->
			</td>
		</tr>
		<?php } ?>
	</table>
</div>

	<span class="input-group-btn" style="margin-left:10px">
		<a href="<?php echo site_url('produtos'); ?>"
		class="btn btn-outline-secondary waves-effect waves-light btn-large">
		<i class="fa fa-edit"></i> Voltar
		</a>
	</span>

	<div class="row" style="margin-bottom:50px"></div>

	<!-- <div class="pull-right">
		<?php echo $this->pagination->create_links(); ?>    
	</div> -->
<!-- ============================================================== -->