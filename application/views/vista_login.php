<!-- end header -->
<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Iniciar Sesion</h2>
			</div>
		</div>
	</div>
	</section>
	 
	<section id="content">
		<div class="container">		 
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-lg-offset-4">
				<?php if($this->session->flashdata("error")):?>
        <div class="alert alert-danger">
        <p><?php echo $this->session->flashdata("error")?></p>
        </div>
        <?php endif;?>
        <form class="form-signin" role="form" action="<?php echo base_url();?>auth/login" method="post">
          <input class="form-control" placeholder="Usuario" required="" autofocus="" type="user" name="username"><br>
          <input class="form-control" placeholder="Contraseña" required="" type="password" name="password">
          <!-- <label class="checkbox">
            <input value="remember-me" type="checkbox"> Recordar contraseña
          </label> -->
          <input type="hidden" name="entrar" value="entrar"><br>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
          <!-- <input type="submit" value="Submit" class="btn btn-default"> -->
        </form>
      
    </div>

        </div>
    </div>
</div>
  
    
    </div>
</section>
