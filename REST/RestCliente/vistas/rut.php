<div class="container px-5 py-5">
	<h1>Rut Service</h1>
	<p>ingrese su rut sin puntos y con -<br> el servicio comprobara si su dígito verificador es valido o no</p>
	<?php 
		if($_POST){
			$respuesta = new ControladorRequest();
			$respuesta -> ctrRut();
		}		
	?>		
</div>
<form method='post'>
	<div class="container mx-auto">
		<div class="form-group px-5 shadow p-3 mb-5 bg-white rounded">
		<label for="rut">Ingrese su rut</label>
		<input type="text" required="required" pattern="[0-9]{7,8}-[0-9Kk]{1}" class="form-control" name="rut" id="rut" placeholder="123456789-5" title="ej. 12345678-5"><br>				
		<button type="submit">Enviar</button><br>
		</div>
	</div>
</form>