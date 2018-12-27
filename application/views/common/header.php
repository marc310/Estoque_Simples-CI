<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Marcelo Motta">

    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
 

<!--    <script type="text/javascript" src="--><?php //echo base_url(); ?><!--assets\js\jquery-ui\js\jquery-ui-1.9.2.custom.js"></script>-->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets\js\jquery-1.11.2.min.js"></script>
<!--    <script type="text/javascript" src="--><?php //echo base_url(); ?><!--assets/js/validate.js"></script>-->
<!--    <script type="text/javascript" src="--><?php //echo base_url(); ?><!--assets/js/maskmoney.js"></script>-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
     <!-- page css -->
<!--    <link rel="stylesheet" href="--><?php //echo base_url(); ?><!--assets\js\jquery-ui\css\smoothness\jquery-ui-1.9.2.custom.css">-->
    <link href="<?php echo base_url();?>../assets/css/pages/form-icheck.css" rel="stylesheet">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>../assets/images/favicon.png">
    <title>Controle de Estoque</title>


    <!-- This page CSS -->

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>../assets/css/style.min.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="<?php echo base_url();?>../assets/css/pages/dashboard1.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-default-dark fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Carregando Sistema...</p>
        </div>
    </div>



        <?php 
        $this->load->view('common/topmenu');
        ?>