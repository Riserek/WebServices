<div class="container px-5 py-5">
	<h1>Nombre propio Service</h1>
	<p>Ingrese su nombre completo y genero</p>
	<?php if($_POST): ?>
		<?php 
			$peticion = new CurlRequest();
			$res_json = json_decode($peticion -> nombreSendPost(), true);
		?>
	<div class="alert alert-dark" role="alert">
		<?php 
		echo "Hola, ".$res_json["message"]." ".$res_json["Nombre"]." ".$res_json["apellido_p"]." ".$res_json["apellido_m"],", gracias por usar el servicio :)" ;
		 ?>
		<?php endif ?>
	</div>
</div>
<form method='post'>
	<div class="container mx-auto">
		<div class="form-group px-5 shadow p-3 mb-5 bg-white rounded">
			<label for="nombre">Nombres</label><br>
			<input type="text" name="nombre" placeholder="Nombres" required="required" class="form-control">
			<br>

			<label for="apellido_p">Apellido paterno</label><br>
			<input type="text" name="apellido_p" placeholder="Apellido paterno" required="required" class="form-control">
			<br>

			<label for="apellido_m">Apellido materno</label><br>
			<input type="text" name="apellido_m" placeholder="Apellido materno" required="required" class="form-control">
			<br>

			<label for="sexo">Indique su genero (F) mujer, (M) hombre</label><br>
			<div class="form-check form-check-inline" >

				<input type="radio" class="form-check-input" name="sexo" id="radio1" value="F" required="required">
				<label for="radio1">F </label>		
			</div>	
			<div class="form-check form-check-inline" class="required">
				<input type="radio" class="form-check-input" name="sexo" id="radio2" value="M" required="required">
				<label for="radio2">M </label>	
			</div>
			<br><button type="submit">Enviar</button><br>
		</div>
	</div>
</form>
