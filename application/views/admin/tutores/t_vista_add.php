<!-- end header -->
<?php
	$fecha= date('d').'/'.date('m').'/'.date('Y');
?>
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle"> Registrar Tutor, padre o responsable
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
      <form action="<?php echo base_url(); ?>admin/tutores/store" method="post">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>Nombres</label>
								<input type="text" placeholder="ejemplo:  Juan Pablo" class="form-control" required="" name="nombre">
							</div>
							<div class="col-sm-4 form-group">
								<label>Apellido Paterno</label>
								<input type="text" placeholder="ejemplo:  Gonzales" class="form-control" required="" name="ap_paterno">
              </div>
              <div class="col-sm-4 form-group">
								<label>Apellido Materno</label>
								<input type="text" placeholder="ejemplo:  Perez" class="form-control" required="" name="ap_materno">
							</div>
						</div>				
							
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>Fecha nacimiento d/m/a</label>
								<div class="input-group date">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									<input type="text" class="form-control pull-right" id="datepicker" name="fecha_nacimiento">
								</div>
							</div>	
							<div class="col-sm-4 ">
								<div class="row">
									<div class="col-sm-6 form-group">

										<label>Estado civil</label>
										<div class="radio">               
											<label>
												<input id="soltero" type="radio" name="estado_civil" id="soltero" value="soltero (a)" checked>
												soltero (a)
											</label>
										</div>
										<div class="radio">
											<label>
												<input id="casado" type="radio" name="estado_civil" id="casado" value="casado (a)">
												casado (a)
											</label>
										</div>
										
									</div>

									<div class="col-sm-6 form-group">
										<label>C.I.</label>
										<input type="number"  class="form-control" required="" name="ci">
									</div>
									
								</div>
							</div>	
							<div class="col-sm-4 form-group">
								<label>Fecha registro d/m/a</label>
								<div class="input-group date">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									<input type="text" class="form-control pull-right" id="datepicker2" value="<?php echo $fecha;?>" class="form-control" name="fecha_registro" readonly>
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
<script>
/* function onSelectedEvent() {
    var grade = document.getElementById("grade");
    alert(grade.value);
		let soltero = document.getElementById("soltero");
		let casado = document.getElementById("casado");
		if(grade.value == "1")
			soltero.checked();
		else
			casado.checked();	

} */
</script>