<!-- end header -->
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Bienvenido 
				<?php
				if($this->session->userdata("nombre_usuario")){
					echo $this->session->userdata("nombre_usuario");
				}	
				?>!
				</h2>
			</div>
		</div>
	</div>
	</section>
	 
	<section id="content">
		<div class="container">		 
		<!-- inicio -->		
					<div class="row">
						<div class="skill-home"> <div class="skill-home-solid clearfix"> 
						
					<?php if($this->session->userdata("TIPO")==1):?>
						<div class="col-md-4 text-center">
						<a href="<?php echo base_url()?>admin/colaboradores"><span class="icons c1"><i class="fa fa-book"></i></span> <div class="box-area">
						<h3>Listar Colaboradores</h3></a></div>
						</div>
					<?php endif;?>

						<div class="col-md-4 text-center"> 
						<a href="<?php echo base_url()?>admin/tutores"><span class="icons c2"><i class="fa fa-user"></i></span> <div class="box-area">
						<h3>Listar Tutores</h3></a></div>
						</div>

						<div class="col-md-4 text-center"> 
						<a href="<?php echo base_url()?>admin/ninos"><span class="icons c3"><i class="fa fa-users"></i></span> <div class="box-area">
						<h3>Listar Niños </h3></a></div>
						</div>		

					<?php if($this->session->userdata("TIPO")==2):?>
						<div class="col-md-4 text-center">
							<a href="<?php echo base_url()?>admin/ninos/evaluar"><span class="icons c1"><i class="fa fa-book"></i></span> <div class="box-area">
							<h3>Evaluar Niños</h3></a></div>
						</div>
					<?php endif;?>				

					</div>
				<?php if($this->session->userdata("TIPO")==1):?>
					<div class="row">
						<div class="skill-home"> <div class="skill-home-solid clearfix"> 
						<!-- <div class="col-xs-offset-3 col-md-3 text-center"> -->
						<div class="col-md-4 text-center">
						<a href="<?php echo base_url()?>admin/pruebas"><span class="icons c5"><i class="fa fa-book"></i></span> <div class="box-area">
						<h3>Listar Pruebas</h3></a></div>
						</div>

						<div class="col-md-4 text-center"> 
						<a href="<?php echo base_url()?>admin/grupos"><span class="icons c6"><i class="fa fa-users"></i></span> <div class="box-area">
						<h3>Listar Grupos</h3></a></div>
						</div>

						<div class="col-md-4 text-center"> 
						<a href="<?php echo base_url()?>admin/preguntas"><span class="icons c4"><i class="fa fa-question-circle"></i></span> <div class="box-area">
						<h3>Listar Preguntas</h3></a></div>
						</div>
					</div>
				<?php endif;?>
						<!-- <div class="col-md-3 text-center"> 
						<a href="about.php"><span class="icons c3"><i class="fa fa-trophy"></i></span> <div class="box-area">
						<h3>Listar cursos</h3></a></div>
						</div> -->

						<!-- <div class="col-md-3 text-center"> 
						<a href="about.php"><span class="icons c4"><i class="fa fa-globe"></i></span> <div class="box-area">
						<h3>Listar Preguntas</h3></a></div>
						</div> -->
        <!-- fin -->
    	</div>
	</div>
  
    
    </div>
</section>
