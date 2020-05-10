<?php 
	class CurlRequest{
		public function rutSendPost()
		{
			$rut = $_POST['rut']; //guarda el valor obtenido en el string direccion
        	$servicio='http://192.168.0.10:8080/SoapService/services/SoapService?wsdl'; 
        	$parametros=array('rut'=>$rut);
        	$client=new SoapClient($servicio);
			$result=$client->validarrut($parametros);
    		print "<div class=\"form-group px-5 shadow p-3 mb-5 bg-white rounded\">
			<p>".$rut." es un ".$result->validarrutReturn."</p> </div>";
		}
		
		public function nombreSendPost(){
		
            $nombres = $_POST['nombre']; //guarda el valor obtenido en el string direccion
            $apellidopa=$_POST['apellidopa'];
            $apellidoma=$_POST['apellidoma'];
            $sexo=$_POST['sexo'];
            $servicio2='http://192.168.0.10:8080/SoapService/services/SoapService?wsdl'; 
            $parametros2=array('nombres'=>$nombres,'apellidopa'=>$apellidopa,'apellidoma'=>$apellidoma,'sexo'=>$sexo);
            $client2=new SoapClient($servicio2);
            $result2=$client2->nombrepropio($parametros2);
			print "<div class=\"form-group px-5 shadow p-3 mb-5 bg-white rounded \">
			<p class=\"text-center\"> Hola ".$result2->nombrepropioReturn."</p> </div>"; 
	
	}
}
?>  
			