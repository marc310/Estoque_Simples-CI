<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- menu -->
        <!-- Sidebar navigation--> 
        <nav class="sidebar-nav">
            <ul id="sidebarnav">

                <li><a class=" waves-effect waves-dark" href="<?php echo base_url(); ?>/dashboard" aria-expanded="false">
                        <i class="fa fa-qrcode"></i><span class="hide-menu">Dashboard</span></a>
                </li>

                <li>
                    <a class="waves-effect waves-dark" href="<?php echo base_url(); ?>./produto/add" aria-expanded="false">
                        <i class="fa fa-rocket"></i>
                        <span class="hide-menu">Adicionar Produto</span> <!-- vendas -->
                    </a>
                </li>

                <li>
                    <a class="waves-effect waves-dark" href="<?php echo base_url(); ?>produtos" aria-expanded="false">
                        <i class="fa fa-user-tie"></i>
                        <span class="hide-menu">Produtos</span>
                    </a>
                </li>


                <li><a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                                class="fa fa-file-alt"></i><span class="hide-menu">Configurações</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="<?php echo base_url(); ?>categoria">Categorias</a></li>
                        <li><a href="<?php echo base_url(); ?>modelo">Modelos</a></li> <!--Emitente-->
                        <li><a href="<?php echo base_url(); ?>cor">Cores</a></li>
                        <li><a href="<?php echo base_url(); ?>tamanho">Tamanhos</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->