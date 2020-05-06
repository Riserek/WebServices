<h1>Cliente rest nombre</h1>
<form action="" method="post">

<label for="nombre">Nombre:</label><br>
<input type="text" name="nombre" placeholder="Escriba su nombre"><br>

<label for="apellidopa">Apellido paterno:</label><br>
<input type="text" name="apellidopa" placeholder="Apellido paterno"><br>

<label for="apellidoma">Apellido materno</label><br>
<input type="text" name="apellidoma" placeholder="Apellido materno"><br>

<label for="sexo">Indique su genero (M)hombre, (F)mujer</label><br>
<select name="sexo">
<option></option>
<option value="F">F</option>
<option value="M">M</option>
</select><br>
<button type="submit">Enviar</button><br>
<?php
if($_POST){
			$peticion = new CurlRequest();
			$res_json = json_decode($peticion -> nombreSendPost(), true);
			//var_dump($res_json);
			print $res_json;
		}
?>
</form>