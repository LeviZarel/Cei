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
<!-- bootstrap datepicker -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/select2/dist/css/select2.min.css">
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
                        <?php
                            if(!$this->session->userdata("NOMBRE_USUARIO")){
                        ?>      <li><a href="<?php echo base_url()?>nosotros">Acerca de nosotros</a></li>
                                <li><a href="<?php echo base_url()?>cursos">Cursos</a></li>
                                <li><a href="<?php echo base_url()?>galeria">Galeria</a></li>
                                <li><a href="<?php echo base_url()?>precios">Precios</a></li>
                                <li><a href="<?php echo base_url()?>contactenos">Contactatenos</a></li>
                                <li><a href="<?php echo base_url()?>login">Iniciar sesion</a></li>             
                        <?php    
                            }else{
                        ?>      <?php if($this->session->userdata("TIPO")==1):?>
                                <li><a href="<?php echo base_url()?>admin/colaboradores/add">Registrar Colaborador</a></li>
                                <?php endif;?>
                                <li><a href="<?php echo base_url()?>admin/tutores/add">Registrar Tutor</a></li>
                                <li><a href="<?php echo base_url()?>admin/ninos/add">Registrar Niño</a></li>
                                <li><a href="<?php echo base_url();?>auth/logout">Cerrar Sesion</a></li>
                        <?php  
                            }
                        ?>
                        
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->