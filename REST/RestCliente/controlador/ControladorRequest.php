<?php 

class ControladorRequest{

	public function ctrNombre(){
		$peticion = CurlRequest::nombreSendPost();
		$res_json = json_decode($peticion,true);
		echo '<div class="alert alert-primary" role="alert">';
		echo "Hola ".$res_json["message"]." ".$res_json["Nombre"]." ".$res_json["apellido_p"]." ".$res_json["apellido_m"],", gracias por usar el servicio :)" ;
		echo "</div>";
	}


	public function ctrRut(){
		$peticion = CurlRequest::rutSendPost();
		$res_json = json_decode($peticion, true);
		if($res_json["message"] == "V"){
			echo '<div class="alert alert-success" role="alert">';
			echo "El rut ".$res_json["rut"]." ingresado es valido :)";
			echo '</div>';
		}else{
			echo '<div class="alert alert-danger" role="alert">';
			echo "El rut ".$res_json["rut"]." ingresado es invalido :(";
			echo '</div>';
		}
	}

}

 ?>