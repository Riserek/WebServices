<?php 

	class CurlRequest{
		public function nombreSendPost(){
			$nombre = $_POST['nombre'];
			$apellido_p = $_POST['apellido_p'];
			$apellido_m = $_POST['apellido_m'];
			$sexo = $_POST['sexo'];

			$data = array(
						"nombre" => $nombre,
						"apellido_p" => $apellido_p,
						"apellido_m" => $apellido_m,
						"sexo" => $sexo
					);
		    //url de la API nombre propio
		    $ch = curl_init("localhost:4000/nombre");
		    //a true, obtendremos una respuesta de la url, en otro caso, 
		    //true si es correcto, false si no lo es
		    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		    //establecemos el verbo http que queremos utilizar para la petición
		    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		    //enviamos el array data
		    curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
		    //obtenemos la respuesta
		    $_response = curl_exec($ch);
		    // Se cierra el recurso CURL y se liberan los recursos del sistema
		    curl_close($ch);
		    if(!$response) {
		        return false;
		    }else{
		        return $response;
		    }
		}
		
	public function rutSendPost(){
			$rut = $_POST['rut'];
            $data = array("rut" => $rut);
            //url de la API verificar rut
            $ch = curl_init("http://localhost:4000/rut");
            //a true, obtendremos una respuesta de la url, en otro caso, 
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
	}
 ?>