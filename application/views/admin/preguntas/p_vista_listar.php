<!-- end header -->
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle"> Listar Preguntas
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
        <a href="<?php echo base_url();?>admin/preguntas/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Registrar nueva pregunta</a>
        <a href="<?php echo base_url();?>" class="btn btn-default btn-flat"><span class="fa fa-arrow-left"></span> Ir atras</a>
      </div>
    </div><hr>	
    <div class="row">
      <div class="col-md-12">
        <table id="example1" class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>Prueba</th>           
              <th>Instrucción</th>
              <th>Descripción o Pregunta</th>
              <th>Tipo</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php if(!empty($preguntas)):?>
            <?php foreach($preguntas as $pregunta):?>             
              <tr>
                <td><?php echo $pregunta->ID_PREGUNTA;?></td>
                <td><?php echo $pregunta->ID_PRUEBA;?></td>
                <td><?php echo $pregunta->INSTRUCCION;?></td>
                <td><?php echo $pregunta->PREGUNTA;?></td>
                <td><?php echo $pregunta->ID_TIPO_PREGUNTA;?></td>
                <?php /* $data_nino=$pregunta->ID_PREGUNTA."*".$pregunta->ID_TUTOR."*".$pregunta->ID_RELACION_TUTOR."*".$pregunta->ID_GRUPO."*".$pregunta->URL_FOTO."*".$pregunta->NOMBRE."*".$pregunta->AP_PATERNO."*".$pregunta->AP_MATERNO."*".$pregunta->GENERO."*".$pregunta->CI."*".$pregunta->FECHA_NACIMIENTO."*".$pregunta->FECHA_REGISTRO."*".$pregunta->HABILITADO."*".base_url(); */?>
                <td>
                <div class="btn-group text-center">
                  <!--button type="button" class="btn btn-info btn-ver-nino" data-toggle="modal" data-target="#myModal" value="<?php /* echo $data_nino; */?>" id="btn-ver-nino"-->
                    <!--span class="fa fa-search"></span>
                  </button-->
                  <a href="<?php echo base_url()?>admin/preguntas/edit/<?php echo $pregunta->ID_PREGUNTA;?>" class="btn btn-warning">
                    <span class="fa fa-pencil"></span>
                  </a>
                  <a href="<?php echo base_url()?>admin/preguntas/delete/<?php echo $pregunta->ID_PREGUNTA;?>" class="btn btn-danger btn-delete" id="btn-delete">
                    <span class="fa fa-trash-o"></span>
                  </a>
                  
                </div>
                </td>
              </tr>
            <?php endforeach;?>
            <?php endif;?>
          </tbody>
        </table>
      </div>
    </div>	
    <!-- fin -->

  
    
    </div>
</section>

 <!-- Modal -->
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title align-middle">Ver detalle</h4>
        </div>
        <div class="modal-body">        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      
    </div>
  </div>