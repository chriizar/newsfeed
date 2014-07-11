<!DOCTYPE html>
<html>
<head>
	<title>Publicar Noticias</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/estiloNewsfeed.css">
</head>
<body>
	<div class="container page">
		<div class="row">
			<div class="col-md-10 col-lg-10"><h2 class="titulo">Publicación de Noticias</h2></div>
			<div id="fecha" class="col-md-2 col-lg-2"></div>
		</div>
		<hr>
		<div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 contPublicar">
			<p><i class="glyphicon glyphicon-hand-down"></i>&nbsp;Ingresa las noticias relacionadas con Semic en los siguientes espacios.</p>
			<form id="formPublicar" class="col-md-12 col-lg-12 form-inline" role="form">
			 <!--  <div class="form-group">
			    <div class="input-group">

			      <div class="input-group-addon">*Fecha</div>
			      <input id="Nfecha" class="form-control" type="text" placeholder="">
			    </div>
			  </div> -->
			   <div class="form-group">
			    <div class="input-group">
			      <div class="input-group-addon">*Titulo</div>
			      <input id="Ntitulo" class="form-control" type="text" placeholder="">
			    </div>
			  </div>
			   <div class="form-group">
			    <div class="input-group">
			      <div class="input-group-addon">*Descripción</div>
			      <textarea id="Ndescripcion" class="form-control" rows="8"></textarea>
			    </div>
			  </div>
			  <div class="form-group">
			  <div class="input-group">
			    <div class="input-group-addon">*Editor</div>
			      <input id="Neditor" class="form-control" type="text" placeholder="">
			    </div>
			  </div> 
			  <button id="Nenviar" type="button" class="btn btn-default">Guardar</button>
			</form>
			<div class="col-md-12 col-lg-12 alert">
				
			</div>
		</div>
	</div>

      <script src="../js/jquery-1.11.0.min.js"></script>

	<script>
		//Mostrar fecha actual
		var f = new Date();
		var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
		$("#fecha").append(f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());

/*
		$("#Nenviar").click(function(){

			var formPublicar = {
							//fecha: $("#Nfecha").val(),
							titulo: $("#Ntitulo").val(),
							descripcion: $("#Ndescripcion").val()
						  };
			$.ajax({
					  type: "POST",
					  url: "../includes/leerController.php",
					  data: formPublicar,
				})
				.done(function(response){
                     var obj = jQuery.parseJSON(response);
                       if(obj.err == null)
                       {
				         $(".alert").html('<i class="glyphicon glyphicon-ok-sign"></i>&nbsp;Agregado con exito.');
				         $('.alert').show(); 
				         $('.alert').delay(1000).hide(250);  
					}else{
						$(".alert").html('<i class="glyphicon glyphicon-exclamation-sign"></i>&nbsp;Error al publicar noticia.<br>Por favor, vuélve a intentarlo. Si el problema continúa reportarlo con el administrador.');
				        $('.alert').show(); 
				        $('.alert').delay(1000).hide(250);  
					}
				})
				.fail(function(request,status,error) {
			        console.log('ocurrio un error al enviar la info');
				})
				.always(function(){
					console.log('finished');
				})
		});
*/
	</script>

</body>
</html>