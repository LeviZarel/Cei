<!-- end header -->
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle"> Editar Prueba
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
      <form action="<?php echo base_url(); ?>admin/pruebas/update" method="post">
					<div class="col-sm-12">
						<div class="row">
              <input type="hidden" name="id" value="<?php echo $prueba->ID_PRUEBA;?>">
							<div class="col-sm-5 form-group <?php echo !empty(form_error("nombre"))?'has-error':'';?>">
								<label>Nombre</label>
								<input type="text" placeholder="ejemplo:  prueba uno" class="form-control"  name="nombre" value="<?php echo !empty(form_error("nombre"))?set_value("nombre"):$prueba->NOMBRE;?>">
                <?php echo form_error("nombre", "<span class='help-block'>", "</span>");?>
							</div>
							<div class="col-sm-7 form-group <?php echo !empty(form_error("descripcion"))?'has-error':'';?>">
								<label>Descripción</label>
								<textarea class="form-control" rows="3" placeholder="Ingrese una pequeña descripción ..." name="descripcion"><?php echo !empty(form_error("descripcion"))?set_value("descripcion"):$prueba->DESCRIPCION;?></textarea>
                <?php echo form_error("descripcion", "<span class='help-block'>", "</span>");?>
							</div>

              <div class="col-sm-4 form-group">
								<label>Fecha registro d/m/a</label>
								<div class="input-group date">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									<input type="text" class="form-control pull-right" id="datepicker2" value="<?php echo $prueba->FECHA_REGISTRO;?>" class="form-control" name="fecha_registro">
								</div>
							</div>

						</div>					
					
						<div class="row">
								<div class="col-md-12 text-center">				
                  <button type="submit" class="btn btn-primary">Guardar</button>
                  <a href="<?php echo base_url(); ?>admin/pruebas" id="cancel" name="cancel" class="btn btn-default"><strong>Cancelar</strong></a>
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