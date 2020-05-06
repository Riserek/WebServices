<div class="container">
	<div class="row">
		<div class="col-3"> </div>
		<div class="col-6">
			<br>
			<h1  class="display-3 text-center">Verificar rut</h1> <br> <br> <br>
			<form method='post'>
				<div class="container mx-auto">
					<div class="form-group px-5 shadow p-3 mb-5 bg-white rounded">
						<label for="rut">Ingrese su rut</label>
						<input type="text" required="required" pattern="[0-9]{7,8}-[0-9Kk]{1}" class="form-control" name="rut" id="rut" placeholder="123456789-5" title="ej. 12345678-5"><br>				
						<button type="submit">Enviar</button><br>
					</div>
				</div>
				<?php 
					if($_POST)
					{
						$peticion = new CurlRequest();
						$res_json = json_decode($peticion -> rutSendPost(),true);
						print $res_json;
					}
				?>
			</form>
		</div>
		<div class="col-3"> </div>	
	</div>			
</div>

	