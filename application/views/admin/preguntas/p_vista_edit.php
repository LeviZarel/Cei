<!-- end header -->
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle"> Editar Pregunta
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
      <form action="<?php echo base_url(); ?>admin/preguntas/update" method="post" enctype="multipart/form-data">
					<div class="col-sm-12">
          
						<div class="row">
							
              <div class="col-sm-4 form-group">
								<label>Prueba a la que pertenecera</label>
                <input type="hidden" name="id" value="<?php echo $pregunta->ID_PREGUNTA?>">
                <select class="form-control" style="width: 100%;" id="prueba" name="prueba"><!-- select2 -->
									<?php foreach ($pruebas as $prueba):?>
										<option value="<?php echo $prueba->ID_PRUEBA;?>"
                    <?php if($prueba->ID_PRUEBA==$pregunta->ID_PRUEBA) echo "selected"?>>
											<?php echo $prueba->NOMBRE;?>
										</option>
									<?php endforeach;?>
                </select>
              </div>

							<div class="col-sm-4 form-group">
								<label>Instrucción</label>
								<textarea class="form-control" rows="3" placeholder="Ejemplo: Se le pide escribir su nombre" name="instruccion" required><?php echo $pregunta->INSTRUCCION;?></textarea>
							</div>

              <div class="col-sm-4 form-group">
								<label>Descripción o Pregunta</label>
								<textarea class="form-control" rows="3" placeholder="Ejemplo: Empecemos, escribe tu nombre completo" name="descripcion" required><?php  echo $pregunta->PREGUNTA;?></textarea>
							</div>

            </div>	
            			
						<div class="row">

              <div class="col-sm-6 form-group">
								<label>3</label>
								<input type="text" placeholder="Ejemplo:  No escribe nada.." class="form-control" required="" name="tres"
                value="<?php echo $pregunta->RESP_3;?>">
							</div>

              <div class="col-sm-6 form-group">
								<label>2</label>
								<input type="text" placeholder="Ejemplo:  Escribe de forma ilegible.." class="form-control" required="" name="dos" value="<?php echo $pregunta->RESP_2;?>">
							</div>
		
            </div>	

            <div class="row">

              <div class="col-sm-6 form-group">
                <label>1</label>
                <input type="text" placeholder="Ejemplo:  Solo escribe su nombre.." class="form-control" required="" name="uno" value="<?php echo $pregunta->RESP_1;?>">
              </div>

              <div class="col-sm-6 form-group">
                <label>0</label>
                <input type="text" placeholder="Ejemplo:  Escribe legible.." class="form-control" required="" name="cero" value="<?php echo $pregunta->RESP_0;?>">
              </div>

            </div>

            <div class="row">

							<div class="col-sm-4 form-group">
								<label>Tipo pregunta</label>
								<select id="tipo_pregunta" class="form-control" style="width: 100%;" name="tipo_pregunta">
                  <?php foreach ($tipo_preguntas as $tipo_pregunta):?>
										<option value="<?php echo $tipo_pregunta->ID_TIPO_PREGUNTA;?>"
                    <?php if($tipo_pregunta->ID_TIPO_PREGUNTA==$pregunta->ID_TIPO_PREGUNTA) echo "selected"?>>
											<?php echo $tipo_pregunta->TIPO_PREGUNTA;?>
										</option>
									<?php endforeach;?>
                </select>
							</div>

              <div class="col-sm-8 form-group">

                <div class="row tipo_pregunta tipo_pregunta_2">
                  <div class="col-sm-12 form-group">
                    <label>Audio (mp3, mp4, ogg)</label>
                    <input type="file" id="audio" name="audio">
                  </div>
                </div>
                
                <div class="row tipo_pregunta tipo_pregunta_3">
                  <div class="col-sm-12 form-group">
                    <label>Imagen (jpg, png)</label>
                    <input type="file" id="imagen" name="imagen">
                  </div>
                </div>

                <div class="row tipo_pregunta tipo_pregunta_4">
                  <div class="col-sm-12 form-group">
                    <label>Oraciones</label>
                    <textarea class="form-control" rows="5" placeholder="Ejemplo: PATO GOMA DADO PELO ROPA TAZA" name="oraciones"><?php echo set_value("oraciones");?></textarea>
                  </div>
                </div>

                <div class="row tipo_pregunta tipo_pregunta_5">
                  <div class="col-sm-12 form-group">
                    <label>Preguntas</label>
                    <textarea class="form-control" rows="5" placeholder="Ejemplo: ¿Cómo es tu casa? ¿Cómo es un parque?" name="preguntas"><?php echo set_value("preguntas");?></textarea>
                  </div>
                </div>

							</div>

						</div>
            
						<div class="row">
								<div class="col-md-12 text-center">
									<input type="hidden" name="registrarse" value="registrarse">				
                  <button type="submit" class="btn btn-primary">Guardar</button>
                  <a href="<?php echo base_url(); ?>admin/preguntas" id="cancel" name="cancel" class="btn btn-default"><strong>Cancelar</strong></a>
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
