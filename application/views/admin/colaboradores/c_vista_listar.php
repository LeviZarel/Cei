<!-- end header -->
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle"> Administrar Colaboradores
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
        <a href="<?php echo base_url();?>admin/colaboradores/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Registrar nuevo colaborador</a>
        <a href="<?php echo base_url();?>" class="btn btn-default btn-flat"><span class="fa fa-arrow-left"></span> Ir atras</a>
      </div>
    </div><hr>	
    <div class="row">
      <div class="col-md-12">
        <table id="example1" class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>Nombre y Apellido</th>
              <th>Correo</th>
              <th>Nombre Usuario</th>
              <th>CI</th>
              <th>Telf</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php if(!empty($usuarios)):?>
            <?php foreach($usuarios as $user):?>
            <tr>
              <td><?php echo $user->ID_USUARIO;?></td>
              <td><?php echo $user->NOMBRE_COMPLETO;?></td>
              <td><?php echo $user->CORREO;?></td>
              <td><?php echo $user->NOMBRE_USUARIO;?></td>
              <td><?php echo $user->CI.' - '.$user->DEPARTAMENTO;?></td>
              <td><?php echo $user->TELF;?></td>
              <?php $data_user = $user->ID_USUARIO."*".$user->NOMBRE_COMPLETO."*".$user->CORREO."*".$user->DEPARTAMENTO."*".$user->CI."*".$user->TELF."*".$user->HABILITADO."*".$user->NOMBRE_USUARIO; ?>
              <td>
              <div class="btn-group text-center">
              <button type="button" class="btn btn-info btn-ver-colaborador" data-toggle="modal" data-target="#myModal" value="<?php echo $data_user;?>" id="btn-ver-colaborador" title="Ver detalle">
                  <span class="fa fa-search"></span>
                </button>
                <a href="<?php echo base_url()?>admin/colaboradores/edit/<?php echo $user->ID_USUARIO;?>" class="btn btn-warning" title="Editar">
                  <span class="fa fa-pencil"></span>
                </a>
                <a href="<?php echo base_url()?>admin/colaboradores/delete/<?php echo $user->ID_USUARIO;?>" class="btn btn-danger btn-delete" id="btn-delete" title="Eliminar">
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