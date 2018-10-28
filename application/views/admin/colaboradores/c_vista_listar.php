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
      </div>
    </div><hr>	
    <div class="row">
      <div class="col-md-12">
        <table id="example1" class="table table-bordered">
          <thead>
            <tr>
              <th>#</th>
              <th>Nombre y Apellido</th>
              <th>Correo</th>
              <th>Departamento</th>
              <th>CI</th>
              <th>Telf</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php if(!empty($facilitadores)):?>
            <?php foreach($facilitadores as $facilitador):?>
            <tr>
              <td><?php echo $facilitador->ID_FACILITADOR;?></td>
              <td><?php echo $facilitador->NOMBRE_APELLIDO;?></td>
              <td><?php echo $facilitador->CORREO;?></td>
              <td><?php echo $facilitador->DEPARTAMENTO;?></td>
              <td><?php echo $facilitador->CI;?></td>
              <td><?php echo $facilitador->TELF;?></td>
              <td>
              <div class="btn-group text-center">
                <a href="" class="btn btn-info"><span class="fa fa-eye"></span></a>
                <a href="" class="btn btn-warning"><span class="fa fa-pencil"></span></a>
                <a href="" class="btn btn-danger"><span class="fa fa-trash-o"></span></a>
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
	</div>
  
    
    </div>
</section>