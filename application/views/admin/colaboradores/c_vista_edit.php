<!-- end header -->
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle"> Editar Colaborador
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
      <form action="<?php echo base_url(); ?>admin/colaboradores/update" method="post">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
              <input type="hidden" name="id" value="<?php echo $usuario->ID_USUARIO;?>">
								<label>Nombres completo</label>
								<input type="text" placeholder="ejemplo:  Pepito Grillo" class="form-control" required="" name="nombre_completo" value="<?php echo $usuario->NOMBRE_COMPLETO;?>">
							</div>
							<div class="col-sm-6 form-group">
								<label>Correo Electronico</label>
								<input type="text" placeholder="ejemplo:  pepe_gri1@gmail.com" class="form-control" required="" name="correo" value="<?php echo $usuario->CORREO;?>">
							</div>
						</div>					
						<div class="row">
							<div class="col-sm-4 form-group">
								<label>Departamento</label>
								<select class="form-control select2" style="width: 100%;" name="departamento">
                <?php 
                  $seleccionado= $usuario->DEPARTAMENTO;
                  $valor=0;
                  switch ($seleccionado) {
                    case 'La Paz': $valor=1; break;
                    case 'Santa Cruz': $valor=2; break;
                    case 'Oruro': $valor=3; break;
                    case 'Beni': $valor=4; break;
                    case 'Pando': $valor=5; break;
                    case 'Chuquisaca': $valor=6; break;
                    default:
                      $valor=0; break;
                  }
                ?>
                  <option <?php if($valor==0){ echo 'selected';}?>>Cochabamba</option>
                  <option <?php if($valor==1){ echo 'selected';}?>>La Paz</option>
                  <option <?php if($valor==2){ echo 'selected';}?>>Santa Cruz</option>
                  <option <?php if($valor==3){ echo 'selected';}?>>Oruro</option>
                  <option <?php if($valor==4){ echo 'selected';}?>>Beni</option>
                  <option <?php if($valor==5){ echo 'selected';}?>>Pando</option>
                  <option <?php if($valor==6){ echo 'selected';}?>>Chuquisaca</option>
                </select>
							</div>

							<div class="col-sm-4 form-group <?php echo !empty(form_error("ci"))?'has-error':'';?>">
								<label>C. I.</label>
								<input type="number" placeholder="Carnet de identidad.." class="form-control" required="" name="ci" value="<?php echo !empty(form_error("ci"))?set_value("ci"):$usuario->CI;?>"> 
								<?php echo form_error("ci", "<span class='help-block'>", "</span>");?>
							</div>	

							<div class="col-sm-4 form-group">
								<label>Telefono</label>
								<input type="number" placeholder="Numero telefonico.." class="form-control" required="" name="telf"
                value="<?php echo $usuario->TELF;?>">
							</div>		
            </div>	
						
            <div class="row">

							<div class="col-sm-6 form-group">
                <label>NOMBRE DE USUARIO</label>
					    	<input type="text" placeholder="Nombre de usuario o id.." class="form-control" name="nombre_usuario" required=""
                value="<?php echo $usuario->NOMBRE_USUARIO;?>">
							</div>

							<!-- <div class="col-sm-6 form-group">
                <label>CONTRASEÑA</label>
						    <input type="password" class="form-control" name="clave" required="" value="<?php echo sha1($usuario->CLAVE);?>">
							</div> -->
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