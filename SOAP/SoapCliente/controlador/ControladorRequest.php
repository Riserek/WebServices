<?php 
	class CurlRequest{
		public function rutSendPost()
		{
			$rut = $_POST['rut']; //guarda el valor obtenido en el string direccion
        	$servicio='http://localhost:1212/WS/Servicioweb?wsdl'; 
        	$parametros=array('arg0'=>$rut);
        	$client=new SoapClient($servicio);
        	$result=$client->validarrut($parametros);
    		print "<br>".$rut." es un ".$result->return;
		}
		
		public function nombreSendPost(){
		
            $nombres = $_POST['nombre']; //guarda el valor obtenido en el string direccion
            $apellidopa=$_POST['apellidopa'];
            $apellidoma=$_POST['apellidoma'];
            $sexo=$_POST['sexo'];
            $servicio2='http://localhost:1212/WS/Servicioweb?wsdl'; 
            $parametros2=array('arg0'=>$nombres,'arg1'=>$apellidopa,'arg2'=>$apellidoma,'arg3'=>$sexo);
            $client2=new SoapClient($servicio2);
            $result2=$client2->nombrepropio($parametros2);
            print "<br>"."Hola ".$result2->return;
	}
}
?>  
			