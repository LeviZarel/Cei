<!-- end header -->
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle"> Administrar Grupos
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
        <a href="<?php echo base_url();?>admin/grupos/add" class="btn btn-primary btn-flat"><span class="fa fa-plus"></span> Registrar nuevo grupo</a>
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
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php if(!empty($grupos)):?>
            <?php foreach($grupos as $grupo):?>
            <tr>
              <td><?php echo $grupo->ID_GRUPO;?></td>
              <td><?php echo $grupo->NOMBRE;?></td>
              <td><?php echo $grupo->DESCRIPCION;?></td>
              <td>
                <div class="btn-group text-center">
                  <a href="<?php echo base_url()?>admin/grupos/edit/<?php echo $grupo->ID_GRUPO;?>" class="btn btn-warning" title="Editar">
                    <span class="fa fa-pencil"></span>
                  </a>
                  <a href="<?php echo base_url()?>admin/grupos/delete/<?php echo $grupo->ID_GRUPO;?>" class="btn btn-danger btn-delete" id="btn-delete" title="Eliminar">
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

