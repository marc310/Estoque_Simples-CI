<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from eliteadmin.themedesigner.in/demos/bt4/dark/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Aug 2018 15:27:00 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url();?>../assets/images/favicon.png">
    <title>Sistema de Estoque Simples - Login</title>
    
    <!-- page css -->
    <link href="<?php echo base_url();?>assets/css/pages/login-register-lock.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/css/style.min.css" rel="stylesheet">
    
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-default card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Carregando o Sistema...</p>
        </div>
    </div>


<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<section id="wrapper">
	<div class="login-register" style="background-image:url(../assets/images/background/login-register.jpg);">
		<div class="login-box card">
			<div class="card-body">
				<form class="form-horizontal form-material" id="loginform" method="post" action="<?php echo base_url(); ?>login/login"> 
					<h3 class="text-center" style="margin-bottom:80px">Entrar no Sistema</h3>
					<div class="form-group ">
						<div class="col-xs-12">
							<label class="custom-control-label" for="nomeusuario">Nome de Usuário</label>
							<input type="text" name="nomeusuario" class="form-control" />  
							<span class="text-danger"><?php echo form_error('nomeusuario'); ?></span>
					</div>
					<div class="form-group">
						<div class="col-xs-12">
							<label class="custom-control-label" for="nomeusuario">Senha</label>
							<input type="password" name="senha" class="form-control" />  
							<span class="text-danger"><?php echo form_error('senha'); ?></span>
					</div>

					<!-- <div class="form-group row">
						<div class="col-md-12">
							<div class="d-flex no-block align-items-center">
								<div class="custom-control custom-checkbox">
									<input type="checkbox" class="custom-control-input" id="customCheck1">
									<label class="custom-control-label" for="customCheck1">Remember me</label>
								</div> 
								<div class="ml-auto">
									<a href="javascript:void(0)" id="to-recover" class="text-muted"><i class="fas fa-lock m-r-5"></i> Forgot pwd?</a> 
								</div>
							</div>
						</div>
					</div> -->
					<div class="m-b-40"></div>
					<div class="form-group text-center">
						<div class="col-xs-12 p-b-20">
							<button class="btn btn-block btn-lg btn-info btn-rounded" type="submit" name="insert" value="Login">Entrar no Sistema</button>
						</div>
					</div>
					
				</form>
				
			</div>
					<?php  
                          echo '<label class="text-danger">'.$this->session->flashdata("Error").'</label>';  
					 ?> 
		</div>
	</div>
</section>

<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="<?php echo base_url();?>../assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?php echo base_url();?>../assets/node_modules/popper/popper.min.js"></script>
<script src="<?php echo base_url();?>../assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
<!--Custom JavaScript -->
<script type="text/javascript">
	$(function() {
		$(".preloader").fadeOut();
	});
	$(function() {
		$('[data-toggle="tooltip"]').tooltip()
	});
	// ============================================================== 
	// Login and Recover Password 
	// ============================================================== 
	$('#to-recover').on("click", function() {
		$("#loginform").slideUp();
		$("#recoverform").fadeIn();
	});
</script>