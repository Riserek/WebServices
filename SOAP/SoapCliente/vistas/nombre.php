<div class="container"><br>
<h3 class="display-3 text-center">Nombre propio</h1><br>
<form method='post'>
<div class="container">
	<div class="row">
		<div class="col-3"> </div>
		<div class="col-6">
				<div class="form-group px-5 shadow p-3 mb-5 bg-white rounded">
					<label for="nombre">Nombre: </label><br>
					<input type="text" name="nombre" placeholder="Nombre: " required="required" class="form-control">
					<br>

					<label for="apellidopa">Apellido paterno: </label><br>
					<input type="text" name="apellidopa" placeholder="Apellido paterno" required="required" class="form-control">
					<br>

					<label for="apellidoma">Apellido materno</label><br>
					<input type="text" name="apellidoma" placeholder="Apellido materno" required="required" class="form-control">
					<br>

					<label for="sexo">Indique su sexo (F) Femenino, (M) Masculino</label><br>
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
		<div class="col-3"></div>
	</div>
</div>
	<?php
	if($_POST){
			$peticion = new CurlRequest();
			$res_json = json_decode($peticion -> nombreSendPost(), true);
			//var_dump($res_json);
			print $res_json;
		}
	?>
</form>

