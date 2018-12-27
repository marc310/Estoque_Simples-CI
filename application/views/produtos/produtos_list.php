
    <div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Produtos Cadastrados</h4>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Início</a></li>
            <li class="breadcrumb-item active">Produtos</li>
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

    <h2 style="margin-top:0px">Lista de Produtos</h2>
        <div class="row" style="margin-bottom: 10px">
            
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-12 text-right">
                <form action="<?php echo site_url('produtos/index'); ?>" class="form-inline" method="get">
                    <div class="input-group col-md-12">
                        <input type="text" class="form-control" style="margin-right:30px" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php 
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('produtos'); ?>" class="btn btn-outline-secondary" style="margin-right:10px">Limpar</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-success" type="submit">Pesquisar</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered m-t-30 table-hover contact-list footable footable-5 footable-paging footable-paging-center breakpoint-lg" style="margin-bottom: 10px">
            <tr>
                <th hidden>No</th>
        <th>ID</th>
		<th>Nome</th>
		<th>Descrição</th>
        <th>Modelo</th>
		<th>Categoria</th>
		<th>Ação</th>
            </tr><?php
            foreach ($produtos_data as $produtos)
            {
                ?>
                <tr>
			<td width="80px" hidden><?php echo ++$start ?></td>
            <td><?php echo $produtos->idP ?></td>
			<td><?php echo $produtos->nome ?></td>
			<td><?php echo $produtos->descricao ?></td>
            <td><?php echo $produtos->modelo ?></td>
			<td><?php echo $produtos->categoria ?></td>
            <td style="text-align:center" width="200px">

           <!--  <span class="input-group-btn" style="margin-left:10px">
				<a href="<?php echo site_url('produto/word/'.$produtos->idP); ?>"
				class="btn btn-outline-info waves-effect waves-light btn-large">
				<i class="fa fa-edit"></i> Word
				</a>
            </span> -->

            <a href="<?php echo site_url('produto/read/'.$produtos->idP); ?>" class="btn btn-outline-info btn-xs" title="Vizualizar Detalhes do Produto"><i
                             class="fa fa-eye"></i> </a> 
            <a href="<?php echo site_url('produto/edit/'.$produtos->idP); ?>" class="btn btn-outline-info btn-xs" title="Editar Produto"><i
                             class="fa fa-edit"></i> </a> 
            <a href="<?php echo site_url('produto/remove/'.$produtos->idP); ?>" class="btn btn-outline-danger btn-xs" title="Deletar Produto"><i
                             class="fa fa-trash"></i> </a>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-secondary">Total de Registros : <?php echo $total_rows ?></a>
		<?php echo anchor(site_url('produtos/excel'), 'Exportar para Excel', 'class="btn btn-secondary"'); ?>
		<?php echo anchor(site_url('produtos/word'), 'Exportar para Word', 'class="btn btn-secondary"'); ?>
	    </div>
            <!-- <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div> -->
<div class="row" style="margin-bottom:50px"></div>
        </div>