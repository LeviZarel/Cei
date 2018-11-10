<!-- end header -->
<?php
	$fecha= date('d').'/'.date('m').'/'.date('Y');
?>
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle"> Editar Niño
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
      <form action="<?php echo base_url(); ?>admin/ninos/update" method="post" enctype="multipart/form-data">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>Nombres</label>
                <input type="hidden" name="id" value="<?php echo $nino->ID_NINO?>">
								<input type="text" placeholder="ejemplo:  Juan Pablo" class="form-control" required="" name="nombre" value="<?php echo $nino->NOMBRE;?>">
							</div>
							<div class="col-sm-4 form-group">
								<label>Apellido Paterno</label>
								<input type="text" placeholder="ejemplo:  Gonzales" class="form-control" required="" name="ap_paterno" value="<?php echo $nino->AP_PATERNO;?>">
              </div>
              <div class="col-sm-4 form-group">
								<label>Apellido Materno</label>
								<input type="text" placeholder="ejemplo:  Perez" class="form-control" required="" name="ap_materno" value="<?php echo $nino->AP_MATERNO;?>">
							</div>
            </div>	
            
            <div class="row">
							<div class="col-sm-4 form-group">
								<label>Foto</label>
								<input type="file" id="foto_edit" name="foto_edit" value="<?php echo $nino->URL_FOTO;?>">
							</div>
							<div class="col-sm-4 form-group">
								<label>Grupo</label>
                <select class="form-control select2" style="width: 100%;" id="grupo" name="grupo">
									<?php foreach ($grupos as $grupo):?>
                    <?php if($grupo->ID_GRUPO == $nino->ID_GRUPO):?>
                      <option value="<?php echo $grupo->ID_GRUPO;?>" selected>
                        <?php echo $grupo->NOMBRE;?>
                      </option>
                    <?php else:?>  
                      <option value="<?php echo $grupo->ID_GRUPO;?>">
                        <?php echo $grupo->NOMBRE;?>
                      </option>
                    <?php endif;?>
									<?php endforeach;?>
                </select>
              </div>
						</div>
							
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>Fecha nacimiento d/m/a</label>
								<div class="input-group date">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									<input type="text" class="form-control pull-right" id="datepicker" name="fecha_nacimiento" value="<?php echo $nino->FECHA_NACIMIENTO;?>">
								</div>
							</div>	
							<div class="col-sm-4 ">
								<div class="row">
									<div class="col-sm-6 form-group">

										<label>Genero</label>
										<div class="radio">              
											<label>
												<input id="soltero" type="radio" name="genero" value="masculino" 
                        <?php if($nino->GENERO=="masculino"){ echo "checked";}?>
                        >
												masculino
											</label>
										</div>
										<div class="radio">
											<label>
												<input id="casado" type="radio" name="genero" value="femenino" 
                        <?php if($nino->GENERO=="femenino"){ echo "checked";}?>
                        >
												femenino
											</label>
										</div>
										
									</div>

									<div class="col-sm-6 form-group">
										<label>C.I.</label>
										<input type="number"  class="form-control" required="" name="ci" value="<?php echo $nino->CI;?>">
									</div>
									
								</div>
							</div>	
							<div class="col-sm-4 form-group">
								<label>Fecha registro d/m/a</label>
								<div class="input-group date">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									<input type="text" class="form-control pull-right" id="datepicker2" value="<?php echo $fecha;?>" class="form-control" name="fecha_registro" value="<?php echo $nino->FECHA_REGISTRO;?>">
								</div>
							</div>		
            </div>	

            <div class="row">
							<div class="col-sm-4 form-group">
								<label>Tutor (nombre - ci)</label>
								<select class="form-control select2" style="width: 100%;" id="tutor" name="tutor">
                  <?php foreach ($tutores as $tutor):?>
                    <?php if($tutor->ID_TUTOR == $nino->ID_TUTOR):?>
                      <option value="<?php echo $tutor->ID_TUTOR;?>" selected>
                        <?php echo $tutor->NOMBRE." ".$tutor->AP_PATERNO." ".$tutor->AP_MATERNO." - ".$tutor->CI;?>
                      </option>
                    <?php else:?>
                      <option value="<?php echo $tutor->ID_TUTOR;?>">
                        <?php echo $tutor->NOMBRE." ".$tutor->AP_PATERNO." ".$tutor->AP_MATERNO." - ".$tutor->CI;?>
                      </option>
                    <?php endif;?>
									<?php endforeach;?>
                </select>
							</div>
							<div class="col-sm-4 form-group">
								<label>Relacion</label>
                <select class="form-control select2" style="width: 100%;" id="relacion" name="relacion">
									<?php foreach ($relacion_tutores as $relacion_tutor):?>
                    <?php if($relacion_tutor->ID_RELACION_TUTOR == $nino->ID_RELACION_TUTOR):?>
                      <option value="<?php echo $relacion_tutor->ID_RELACION_TUTOR;?>" selected>
                        <?php echo $relacion_tutor->CATEGORIA;?>
                      </option>
                    <?php else:?>
                      <option value="<?php echo $relacion_tutor->ID_RELACION_TUTOR;?>">
                        <?php echo $relacion_tutor->CATEGORIA;?>
                      </option> 
                    <?php endif;?>
									<?php endforeach;?>
                </select>
              </div>
						</div>
            
						<div class="row">
								<div class="col-md-12 text-center">
									<input type="hidden" name="registrarse" value="registrarse">				
                  <button type="submit" class="btn btn-primary">Guardar</button>
                  <a href="<?php echo base_url(); ?>admin/ninos" id="cancel" name="cancel" class="btn btn-default"><strong>Cancelar</strong></a>
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
