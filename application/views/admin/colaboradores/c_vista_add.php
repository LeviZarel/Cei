<!-- end header -->
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle"> Registrar Colaborador
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
      <form action="<?php echo base_url(); ?>admin/colaboradores/store" method="post">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								<label>Nombres completo</label>
								<input type="text" placeholder="ejemplo:  Pepito Grillo" class="form-control" required="" name="nombre_completo">
							</div>
							<div class="col-sm-6 form-group">
								<label>Correo Electronico</label>
								<input type="text" placeholder="ejemplo:  pepe_gri1@gmail.com" class="form-control" required="" name="correo">
							</div>
						</div>					
						<!-- <div class="form-group">
							<label>Dirección</label>
							<textarea placeholder="La calle donde vive.." rows="2" class="form-control"></textarea>
						</div>	 -->
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>Departamento</label>
								<select class="form-control select2" style="width: 100%;" name="departamento">
                  <option selected="selected">Cochabamba</option>
                  <option>La Paz</option>
                  <option>Santa Cruz</option>
                  <option>Oruro</option>
                  <option>Beni</option>
                  <option>Pando</option>
                  <option>Chuquisaca</option>
                </select>
							</div>	
							<div class="col-sm-4 form-group <?php echo !empty(form_error("ci"))?'has-error':'';?>">
								<label for="ci">C. I.</label>
								<input type="number" placeholder="Carnet de identidad.." class="form-control" name="ci"  id="ci" value="<?php echo set_value("ci");?>">
								<?php echo form_error("ci", "<span class='help-block'>", "</span>");?>
							</div>	
							<div class="col-sm-4 form-group">
								<label>Telefono</label>
								<input type="number" placeholder="Numero telefonico.." class="form-control" required="" name="telf">
							</div>		
            </div>	
            <div class="row">
							<div class="col-sm-6 form-group <?php echo !empty(form_error("nombre_usuario"))?'has-error':'';?>">
                <label>NOMBRE DE USUARIO</label>
					    	<input type="text" placeholder="Nombre de usuario o id.." class="form-control" name="nombre_usuario" value="<?php echo set_value("nombre_usuario");?>"> 
								<?php echo form_error("nombre_usuario", "<span class='help-block'>", "</span>");?>
							</div>
							<div class="col-sm-6 form-group <?php echo !empty(form_error("clave"))?'has-error':'';?>">
                <label>CONTRASEÑA</label>
						    <input type="password" class="form-control" name="clave" value="<?php echo set_value("clave");?>">
								<?php echo form_error("clave", "<span class='help-block'>", "</span>");?>
							</div>
						</div>
						<div class="row">
								<div class="col-md-12 text-center">
									<input type="hidden" name="registrarse" value="registrarse">				
                  <button type="submit" class="btn btn-primary">Guardar</button>
                  <a href="<?php echo base_url(); ?>admin/colaboradores" id="cancel" name="cancel" class="btn btn-default"><strong>Cancelar</strong></a>
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