<!doctype html>
<html>
    <head>
        <title>Lista de Produtos</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            .word-table {
                border:1px solid black !important; 
                border-collapse: collapse !important;
                width: 100%;
            }
            .word-table tr th, .word-table tr td{
                border:1px solid black !important; 
                padding: 5px 10px;
            }
        </style>
    </head>
    <body>
        <h2>Produto</h2>
        <table class="word-table" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nome</th>
		<th>Descricao</th>
		<th>ModeloID</th>
		<th>Modelo</th>
		<th>CategoriaID</th>
		<th>Categoria</th>
		
            </tr><?php
            foreach ($produto_data as $produtos)
            {
                ?>
                <tr>
		      <td><?php echo ++$start ?></td>
		      <td><?php echo $produtos->nome ?></td>
		      <td><?php echo $produtos->descricao ?></td>
		      <td><?php echo $produtos->modeloID ?></td>
		      <td><?php echo $produtos->modelo ?></td>
		      <td><?php echo $produtos->categoriaID ?></td>	
		      <td><?php echo $produtos->categoria ?></td>	
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
</html>