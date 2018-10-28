<!-- end header -->
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Bienvenido 
				<?php
				if($this->session->userdata("nombre_facilitador")){
					echo $this->session->userdata("nombre_facilitador");
				}else{
					echo $this->session->userdata("NOMBRE_USUARIO");
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
						<div class="col-md-3 text-center">
						<a href="<?php echo base_url()?>admin/colaboradores"><span class="icons c1"><i class="fa fa-book"></i></span> <div class="box-area">
						<h3>Administrar Colaboradores</h3></a></div>
						</div>

						<div class="col-md-3 text-center"> 
						<a href="registrar_nino.php"><span class="icons c2"><i class="fa fa-users"></i></span> <div class="box-area">
						<h3>Registrar Niño</h3></a></div>
						</div>

						<div class="col-md-3 text-center"> 
						<a href="crear_test.php"><span class="icons c3"><i class="fa fa-trophy"></i></span> <div class="box-area">
						<h3>Crear Test</h3></a></div>
						</div>

						<div class="col-md-3 text-center"> 
						<a href="administrar_colaboradores.php"><span class="icons c4"><i class="fa fa-globe"></i></span> <div class="box-area">
						<h3>Administrar Colaboradores</h3></a></div>
						</div>
						</div>

					</div>

					<div class="row">
						<div class="skill-home"> <div class="skill-home-solid clearfix"> 
						<div class="col-md-3 text-center">
						<a href="about.php"><span class="icons c1"><i class="fa fa-book"></i></span> <div class="box-area">
						<h3>Registrar Niño</h3></a></div>
						</div>

						<div class="col-md-3 text-center"> 
						<a href="about.php"><span class="icons c2"><i class="fa fa-users"></i></span> <div class="box-area">
						<h3>Registrar Grupo</h3></a></div>
						</div>

						<div class="col-md-3 text-center"> 
						<a href="about.php"><span class="icons c3"><i class="fa fa-trophy"></i></span> <div class="box-area">
						<h3>Listar cursos</h3></a></div>
						</div>

						<div class="col-md-3 text-center"> 
						<a href="about.php"><span class="icons c4"><i class="fa fa-globe"></i></span> <div class="box-area">
						<h3>Listar Preguntas</h3></a></div>
						</div>
        <!-- fin -->
    	</div>
	</div>
  
    
    </div>
</section>
