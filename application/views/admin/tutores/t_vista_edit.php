<!-- end header -->
<?php
	$fecha= date('d').'/'.date('m').'/'.date('Y');
?>
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle"> Editar Tutor, padre o responsable
				</h2>
			</div>
		</div>
	</div>
	</section>
	 
	<section id="content">
		<div class="container">		 
		<!-- inicio -->
    <div class="row">
      <div class="col-md-12">
      <?php if($this->session->flashdata("error")):?>
        <div class="alert alert-danger">
        <p><?php echo $this->session->flashdata("error")?></p>
        </div>
      <?php endif;?>
      <form action="<?php echo base_url(); ?>admin/tutores/update" method="post">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-4 form-group">
                <input type="hidden" name="id" value="<?php echo $tutor->ID_TUTOR;?>">
								<label>Nombres</label>
								<input type="text" placeholder="ejemplo:  Juan Pablo" class="form-control" required="" name="nombre" value="<?php echo $tutor->NOMBRE?>">
							</div>
							<div class="col-sm-4 form-group">
								<label>Apellido Paterno</label>
								<input type="text" placeholder="ejemplo:  Gonzales" class="form-control" required="" name="ap_paterno"value="<?php echo $tutor->AP_PATERNO?>">
              </div>
              <div class="col-sm-4 form-group">
								<label>Apellido Materno</label>
								<input type="text" placeholder="ejemplo:  Perez" class="form-control" required="" name="ap_materno" value="<?php echo $tutor->AP_MATERNO?>">
							</div>
						</div>	

						<div class="row">
							<div class="col-sm-4 form-group">
								<label>Fecha nacimiento d/m/a</label>
								<div class="input-group date">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									<input type="text" class="form-control pull-right" id="datepicker" name="fecha_nacimiento" value="<?php echo $tutor->FECHA_NACIMIENTO;?>">
								</div>
							</div>	
							<div class="col-sm-4 ">
								<div class="row">
									<div class="col-sm-6 form-group">

										<label>Estado civil</label>
										<?php
											$es_soltero=false;
											if($tutor->ESTADO_CIVIL=='soltero (a)'){ 
												$es_soltero=true;
											}
										?>
										<div class="radio">               
											<label>
												<input id="soltero" type="radio" name="estado_civil" id="soltero" value="soltero (a)" <?php
												if($es_soltero) echo "checked"?> >
												soltero (a)
											</label>
										</div>
										<div class="radio">
											<label>
												<input id="casado" type="radio" name="estado_civil" id="casado" value="casado (a)" <?php
												if(!$es_soltero) echo "checked"?> >
												casado (a)
											</label>
										</div>
										
									</div>

									<div class="col-sm-6 form-group">
										<label>C.I.</label>
										<input type="number"  class="form-control" required="" name="ci" value="<?php echo $tutor->CI;?>">
									</div>
									
								</div>
							</div>	
							<div class="col-sm-4 form-group">
								<label>Fecha registro d/m/a</label>
								<div class="input-group date">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									<input type="text" class="form-control pull-right" id="datepicker2" class="form-control" name="fecha_registro" value="<?php echo $tutor->FECHA_REGISTRO?>">
								</div>
							</div>		
            </div>
            
						<div class="row">
								<div class="col-md-12 text-center">
									<input type="hidden" name="registrarse" value="registrarse">				
                  <button type="submit" class="btn btn-primary">Guardar</button>
                  <a href="<?php echo base_url(); ?>admin/tutores" id="cancel" name="cancel" class="btn btn-default"><strong>Cancelar</strong></a>
								</div>
            </div>
          		
					</div>
				</form> 
      </div>
    </div>	
    <!-- fin -->
    <!-- </div>
	</div> -->
  
    
    </div>
</section>