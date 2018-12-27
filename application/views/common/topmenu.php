<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo base_url(); ?>">
                    <!-- Logo icon --><b>
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src="<?php echo base_url(); ?>../assets/images/logo-icon.png" alt="homepage"
                             class="dark-logo"/>
                        <!-- Light Logo icon -->
                        <img src="<?php echo base_url(); ?>../assets/images/logo-light-icon.png" alt="homepage"
                             class="light-logo"/>
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="<?php echo base_url(); ?>../assets/images/logo-text.png" alt="homepage"
                              class="dark-logo"/>
                        <!-- Light Logo text -->
                         <img src="<?php echo base_url(); ?>../assets/images/logo-light-text.png" class="light-logo"
                              alt="homepage"/></span> </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav mr-auto">
                    <!-- This is  -->
                    <!-- SPACER IN -->
                    <li class="nav-item"><a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark"
                                            href="javascript:void(0)"><i class="#"></i></a></li>
                    <li class="nav-item"><a
                                class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark"
                                href="javascript:void(0)"><i class="fa fa-ellipsis-v"></i></a></li>


                    <!-- ============================================================== -->

                    <!-- menu usuario -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"> <i class="fa fa-user-circle"></i>
                            <div class="notify"><span class="heartbit"></span> <span class="point"></span></div>
                        </a>
                        <div class="dropdown-menu animated flipInY">
                            
                            <!-- text-->
                            <a href="<?php echo base_url(); ?>./produto/add" class="dropdown-item"><i class="fa fa-bug"></i> Adicionar Produto</a>
                            <!-- text-->
                            <a href="<?php echo base_url(); ?>./produtos" class="dropdown-item"><i class="fa fa-headset"></i> Lista de Produtos</a>
                            <!-- text-->
                            <a href="<?php echo base_url(); ?>./categoria" class="dropdown-item"><i class="fa fa-question-circle"></i> Categoria</a>
                            <!-- text-->
                            <a href="<?php echo base_url(); ?>./modelo" class="dropdown-item"><i class="fa fa-question-circle"></i> Modelos</a>
                            <!-- text-->
                            <a href="<?php echo base_url(); ?>./tamanho" class="dropdown-item"><i class="fa fa-question-circle"></i> Tamanhos</a>
                            <!-- text-->
                            <a href="<?php echo base_url(); ?>./cor" class="dropdown-item"><i class="fa fa-question-circle"></i> Cores</a>
                            <!-- divider -->
                            <div class="dropdown-divider"></div>
                            <!-- text-->
                            <a href="<?php echo base_url(); ?>login/logout" class="dropdown-item"><i class="fa fa-times-circle"></i> Logout</a>
                        </div>
                    </li>
                    


                    <!-- ============================================================== -->


                    <!-- SPACER IN -->

                    <li class="nav-item"><a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark"
                                            href="javascript:void(0)"><i class="ti-menu"></i></a></li>
                    <li class="nav-item"><a
                                class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark"
                                href="javascript:void(0)"><i class="icon-menu"></i></a></li>

                    <!-- ============================================================== -->
                    
                </ul>
                <!-- ============================================================== -->
                

                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <ul class="navbar-nav my-lg-0">
                    <!-- ============================================================== -->
                    <!-- menu canto lateral topo -->
                    <!-- ============================================================== -->


                    <!-- ============================================================== -->
                    <!-- mega menu -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown mega-dropdown" data-toggle="tooltip" title="Configurações Gerais"><a
                                class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog"></i></a>
                        <div class="dropdown-menu animated bounceInDown">
                            <ul class="mega-dropdown-menu row">
                                <li class="col-lg-3 m-b-30">
                                    <h4 class="m-b-20">Configurações Gerais</h4>
                                    <!-- Accordian -->
                                    <div class="accordion" id="accordionExample">
                                        <div class="card m-b-0">
                                            <div class="card-header p-0" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                                            data-target="#collapseOne" aria-expanded="true"
                                                            aria-controls="collapseOne">
                                                        Centro de Ajuda
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                                 data-parent="#accordionExample">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card m-b-0">
                                            <div class="card-header p-0" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button"
                                                            data-toggle="collapse" data-target="#collapseTwo"
                                                            aria-expanded="false"
                                                            aria-controls="collapseTwo">
                                                        Abrir Chamado
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                 data-parent="#accordionExample">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card m-b-0">
                                            <div class="card-header p-0" id="headingThree">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button"
                                                            data-toggle="collapse" data-target="#collapseThree"
                                                            aria-expanded="false"
                                                            aria-controls="collapseThree">
                                                        Reportar Bug
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                                 data-parent="#accordionExample">
                                                <div class="card-body">
                                                    Anim pariatur cliche reprehenderit, enim eiusmod high.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <!-- ============================================================== -->
                                <li class="col-lg-3 col-xlg-4 m-b-30">
                                    <h4 class="m-b-20">Ferramentas</h4>
                                    <!-- List style -->
                                    <ul class="list-style-none">

                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Backup</a>
                                        </li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                Calendário</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Lista
                                                de Tarefas</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                Anotações</a></li>
                                        <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i>
                                                Arquivos</a></li>
                                    </ul>
                                </li>

                                <!-- ============================================================== -->
                                <li class="col-lg-3  m-b-30">
                                    <h4 class="m-b-20">Sistema</h4>
                                    <ul class="list-style-none">
                                        <li><a href="<?php echo base_url(); ?>emissor">
                                                <i class="fa fa-check text-success"></i> Emissor</a>
                                        </li>
                                        <li><a href="<?php echo base_url(); ?>permissoes">
                                                <i class="fa fa-check text-success"></i> Permissões</a>
                                        </li>
                                        <li><a href="<?php echo base_url(); ?>usuarios">
                                                <i class="fa fa-check text-success"></i> Usuários</a>
                                        </li>
                                        <li><a href="<?php echo base_url(); ?>tipo_lancamento">
                                                <i class="fa fa-check text-success"></i> Tipo de Lançamento</a>
                                        </li>
                                        <li><a href="<?php echo base_url(); ?>tipo_pagamento">
                                                <i class="fa fa-check text-success"></i> Tipo de Pagamento</a>
                                        </li>
                                        <li><a href="<?php echo base_url(); ?>tipo_status">
                                                <i class="fa fa-check text-success"></i> Status</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- ============================================================== -->
                                <li class="col-lg-3 col-xlg-4 m-b-30">
                                    <h4 class="m-b-20">Recursos</h4>
                                    <!-- List style -->
                                    <ul class="list-style-none">
                                        <li><a href="<?php echo base_url(); ?>funcionarios">
                                                <i class="fa fa-check text-success"></i> Funcionários</a>
                                        </li>
                                        <li><a href="<?php echo base_url(); ?>produtos"><i class="fa fa-check text-success"></i>
                                                Produtos</a></li>
                                        <li><a href="<?php echo base_url(); ?>servicos"><i class="fa fa-check text-success"></i>
                                                Serviços</a></li>
                                        <li><a href="<?php echo base_url(); ?>acabamento"><i class="fa fa-check text-success"></i>
                                                Acabamento</a></li>
                                        <li><a href="<?php echo base_url(); ?>material"><i class="fa fa-check text-success"></i>
                                                Material</a></li>
                                    </ul>
                                </li>


                            </ul>
                        </div>
                    </li>


                    <!-- ============================================================== -->
                    <!-- End mega menu -->
                    <!-- ============================================================== -->
                    <!-- SPACER END  -->
                    <li class="nav-item"><a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark"
                                            href="javascript:void(0)"><i class="fa fa-ellipsis-v"></i></a></li>
                    <li class="nav-item"><a
                                class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark"
                                href="javascript:void(0)"><i class="fa fa-ellipsis-v" data-toggle="tooltip"
                                                             title="Minimizar Menu Principal"></i></a></li>
                </ul>
            </div>
        </nav>
    </header>