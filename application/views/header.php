<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Sistema CEI</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<!-- css -->
<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/jcarousel.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/css/flexslider.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets/js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" />
<!-- DataTables -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/datatables.net-bs/css/dataTables.bootstrap.min.css">
 
</head>
<body>
<div id="wrapper">
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/img/logo.png" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <!-- <li class="active"> --><li><a href="<?php echo base_url(); ?>">Inicio</a></li> 
						<li><a href="nosotros">Acerca de nosotros</a></li>
						<li><a href="cursos">Cursos</a></li>
                        <li><a href="galeria">Galeria</a></li>
                        <li><a href="precios">Precios</a></li>
                        <li><a href="contactenos">Contactatenos</a></li>
                        <?php
                            if(!$this->session->userdata("NOMBRE_USUARIO")){
                        ?> <li><a href="login">Iniciar sesion</a></li>  <?php    
                            }else{
                        ?>  <li><a href="<?php echo base_url();?>auth/logout">Cerrar Sesion</a></li>     <?php  
                            }
                        ?>
                        
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->