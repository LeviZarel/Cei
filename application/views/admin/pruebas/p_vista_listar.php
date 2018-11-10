<!-- end header -->
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle"> Administrar Pruebas
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
        <a href="<?php echo base_url();?>admin/pruebas/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Registrar nueva prueba</a>
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
              <th>Descripcion</th>
              <th>Fecha de registro</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php if(!empty($pruebas)):?>
            <?php foreach($pruebas as $prueba):?>
            <tr>
              <td><?php echo $prueba->ID_PRUEBA;?></td>
              <td><?php echo $prueba->NOMBRE;?></td>
              <td><?php echo $prueba->DESCRIPCION;?></td>
              <td><?php echo $prueba->FECHA_REGISTRO;?></td>
              <td>
                <div class="btn-group text-center">
                  <a href="<?php echo base_url()?>admin/pruebas/edit/<?php echo $prueba->ID_PRUEBA;?>" class="btn btn-warning" title="Editar">
                    <span class="fa fa-pencil"></span>
                  </a>
                  <a href="<?php echo base_url()?>admin/pruebas/delete/<?php echo $prueba->ID_PRUEBA;?>" class="btn btn-danger btn-delete" id="btn-delete" title="Eliminar">
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

