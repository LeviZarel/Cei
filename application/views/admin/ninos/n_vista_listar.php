<!-- end header -->
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle"> Administrar Niños
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
        <a href="<?php echo base_url();?>admin/ninos/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Registrar nuevo Niño</a>
        <a href="<?php echo base_url();?>" class="btn btn-default btn-flat"><span class="fa fa-arrow-left"></span> Ir atras</a>
      </div>
    </div><hr>	
    <div class="row">
      <div class="col-md-12">
        <table id="example1" class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Apellidos</th>
              <th>C.I.</th>
              <th>Tutor</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php if(!empty($ninos)):?>
            <?php foreach($ninos as $nino):?>             
              <tr>
                <td><?php echo $nino->ID_NINO;?></td>
                <td><?php echo $nino->NOMBRE;?></td>
                <td><?php echo $nino->AP_PATERNO.' '.$nino->AP_MATERNO;?></td>
                <td><?php echo $nino->CI;?></td>
                <td><?php echo $nino->ID_TUTOR;?></td>
                <?php $data_nino=$nino->ID_NINO."*".$nino->ID_TUTOR."*".$nino->ID_RELACION_TUTOR."*".$nino->ID_GRUPO."*".$nino->URL_FOTO."*".$nino->NOMBRE."*".$nino->AP_PATERNO."*".$nino->AP_MATERNO."*".$nino->GENERO."*".$nino->CI."*".$nino->FECHA_NACIMIENTO."*".$nino->FECHA_REGISTRO."*".$nino->HABILITADO."*".base_url();?>
                <td>
                <div class="btn-group text-center">
                  <button type="button" class="btn btn-info btn-ver-nino" data-toggle="modal" data-target="#myModal" value="<?php echo $data_nino;?>" id="btn-ver-nino">
                    <span class="fa fa-search"></span>
                  </button>
                  <a href="<?php echo base_url()?>admin/ninos/edit/<?php echo $nino->ID_NINO;?>" class="btn btn-warning">
                    <span class="fa fa-pencil"></span>
                  </a>
                  <a href="<?php echo base_url()?>admin/ninos/delete/<?php echo $nino->ID_NINO;?>" class="btn btn-danger btn-delete" id="btn-delete">
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