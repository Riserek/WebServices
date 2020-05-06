

<div>
		
		<h1>Cliente rest rut</h1>

		<form action="" method="post" >
		<input type="text" name='rut' placeholder="Ingrese rut">
		<button type="submit">Enviar</button><br>

		<?php 
		if($_POST){
			$peticion = new CurlRequest();
			$res_json = json_decode($peticion -> rutSendPost(),true);
			 //var_dump($res_json);
			 print $res_json;
		}
		?>
		</form>
</div>

	