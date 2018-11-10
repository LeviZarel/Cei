<!-- end header -->
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle"> Administrar Tutores
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
        <a href="<?php echo base_url();?>admin/tutores/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Registrar nuevo Tutor</a>
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
              <th>Estado civil</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php if(!empty($tutores)):?>
            <?php foreach($tutores as $tutor):?>
            <tr>
              <td><?php echo $tutor->ID_TUTOR;?></td>
              <td><?php echo $tutor->NOMBRE;?></td>
              <td><?php echo $tutor->AP_PATERNO.' '.$tutor->AP_MATERNO;?></td>
              <td><?php echo $tutor->CI;?></td>
              <td><?php echo $tutor->ESTADO_CIVIL;?></td>
              <td>
              <div class="btn-group text-center">
                <!-- <a href="" class="btn btn-info"><span class="fa fa-eye"></span></a> -->
                <button type="button" class="btn btn-info btn-ver" data-toggle="modal" data-target="#myModal" value="<?php echo $tutor->ID_TUTOR;?>" id="btn-ver">
                  <span class="fa fa-search"></span>
                </button>
                <a href="<?php echo base_url()?>admin/tutores/edit/<?php echo $tutor->ID_TUTOR;?>" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                <a href="<?php echo base_url()?>admin/tutores/delete/<?php echo $tutor->ID_TUTOR;?>" class="btn btn-danger btn-delete" id="btn-delete">
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
    <!-- </div>
	</div> -->
  
    
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