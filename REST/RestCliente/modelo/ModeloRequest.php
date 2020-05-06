<?php 

	class CurlRequest{
		public function nombreSendPost(){
			$data = array(
						"nombre" => $_POST['nombre'],
						"apellido_p" => $_POST['apellido_p'],
						"apellido_m" => $_POST['apellido_m'],
						"sexo" => $_POST['sexo']
					);
		    //url de la API nombre propio
		    $ch = curl_init("localhost:4000/nombre");
		    //true si es correcto, false si no lo es
		    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		    //establecemos el verbo http que queremos utilizar para la petición
		    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		    //enviamos el array data
		    curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
		    //obtenemos la respuesta
		    $response = curl_exec($ch);
		    // Se cierra el recurso CURL y se liberan los recursos del sistema
		    curl_close($ch);
		    if(!$response) {
		        return false;
		    }else{
		        return $response;
		    }
		}
		
	public function rutSendPost(){
            $data = array("rut" => $_POST['rut']);
            $ch = curl_init("http://localhost:4000/rut");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
            curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
            $response = curl_exec($ch);
            curl_close($ch);
            if(!$response) {
                return false;
            }else{
                 return $response;
          	}
		}
	}
 ?>
