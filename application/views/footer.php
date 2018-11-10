<!-- inicio de footer -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="widget">
					<p><i class="fa fa-map-marker"></i> Calle Paplo Jaimes 176 entre Beni y Av. Reducto acera norte</p>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<p><i class="fa fa-phone"></i> (591) 65367521</p>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<p><i class="fa fa-clock-o"></i> Lunes a Sábado 9:00 am a 6:00 pm </p>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<p><i class="fa fa-envelope"></i> charlyfranz@hotmail.com</p>
				</div>
			</div>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy; Copyright 2018 todos los derechos reservados </span>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.easing.1.3.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.fancybox.pack.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.fancybox-media.js"></script> 
<script src="<?php echo base_url(); ?>assets/js/Gallery/jquery.quicksand.js"></script>
<script src="<?php echo base_url(); ?>assets/js/Gallery/setting.js"></script>
<script src="<?php echo base_url(); ?>assets/js/jquery.flexslider.js"></script>
<script src="<?php echo base_url(); ?>assets/js/animate.js"></script>
<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
<script src="<?php echo base_url(); ?>assets/js/owl-carousel/owl.carousel.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url(); ?>assets/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>assets/select2/dist/js/select2.full.min.js"></script>
<!-- page script -->
<script>
  $(function () {
		var base_url="<?php echo base_url();?>";
		/* boton delete para cualquiera */
		$('.btn-delete').on("click", function(e){
			e.preventDefault();
			var ruta = $(this).attr("href");
			if(! confirm("¿Seguro que desea eliminar el registro?")){ return 0; }
			$.ajax({
				url: ruta,
				type:"POST",
				success: function(resp){
					window.location.href = base_url + resp;
				}
			});
		});
		/* boton ver colaborador*/
		$('.btn-ver-colaborador').on("click", function(){
			var colaborador = $(this).val();
			var arrayColaborador = colaborador.split("*");
			var habilitado = (arrayColaborador[6]==1) ? "si" : "no";

			var html = "<p><strong>Nombre completo: </strong>"+arrayColaborador[1]+"</p>"
			html += "<p><strong>Correo: </strong>"+arrayColaborador[2]+"</p>"
			html += "<p><strong>Departamento: </strong>"+arrayColaborador[3]+"</p>"
			html += "<p><strong>C.I.: </strong>"+arrayColaborador[4]+"</p>"
			html += "<p><strong>Telefono: </strong>"+arrayColaborador[5]+"</p>"
			html += "<p><strong>Habilitado: </strong>"+habilitado+"</p>"
			html += "<p><strong>Nombre Usuario: </strong>"+arrayColaborador[7]+"</p>"

			$("#myModal .modal-body").html(html);

		});
		/* boton ver nino */
		$('.btn-ver-nino').on("click", function(){
			var nino = $(this).val();
			var arrayNino = nino.split("*");
			var habilitado = (arrayNino[12]==1) ? "si" : "no";

			var html = "<img src='"+arrayNino[13]+"assets/img/ninos/upload/"+arrayNino[4]+"' alt='foto nino' height='100' width='100'><br><br>"
			html += "<p><strong>Nombre completo: </strong>"+arrayNino[5]+" "+arrayNino[6]+" "+arrayNino[7]+"</p>"
			html += "<p><strong>Genero: </strong>"+arrayNino[8]+"</p>"
			html += "<p><strong>C.I.: </strong>"+arrayNino[9]+"</p>"
			html += "<p><strong>Habilitado: </strong>"+habilitado+"</p><br>"
			html += "<p><strong>Tutor padre o responsable: </strong>"+arrayNino[1]+"</p>"
			html += "<p><strong>Relacion: </strong>"+arrayNino[2]+"</p>"
			

			$("#myModal .modal-body").html(html);

		});
		/* boton ver tutor */
		$('.btn-ver').on("click", function(){
			var id = $(this).val();
			$.ajax({
				url: base_url + "admin/tutores/view/" + id,
				type: "POST",
				success:function(resp){
					$("#myModal .modal-body").html(resp);
					/* alert(base_url+" "+id); */
				}
			});
		});
		/* otros */
		/* $('#example1').DataTable(); */
		$('#example1').DataTable({
			"language": {
				"lengthMenu": "Mostrar _MENU_ registros por página",
				"zeroRecords": "No se encontraron resultados",
				"searchPlaceholder": "Buscar registros",
				"info": "Mostrando registros de _START_ al _END_ de un total de _TOTAL_ registros",
				"infoFiltered": "(filtrando de un total de _MAX_ registros)",
				"search": "Buscar",
				"paginate": {
						"first": "Primero",
						"last": "Último",
						"next": "Siguiente",
						"previous": "Anterior"
				},
			}
		});
		//Date picker
    $('#datepicker').datepicker({
			autoclose: true,
			format: 'dd/mm/yyyy'
    })
		$('#datepicker2').datepicker({
			autoclose: true,
			format: 'dd/mm/yyyy'
    })
		//Initialize Select2 Elements
    $('.select2').select2()

    /* $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    }) */
		//para intentar cambiar los inputs de campos de preguntas
        $('.tipo_pregunta').hide();
        $('#tipo_pregunta').change(function(event) {
            if($(this).val() != 0) {
                $('.tipo_pregunta').hide();
                $('.tipo_pregunta_'+$(this).val()).show();
            }
        }); 
  })
</script>
</body>
</html>