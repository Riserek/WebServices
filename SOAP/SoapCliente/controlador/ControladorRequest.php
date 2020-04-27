<?php 
	class CurlRequest{
		public function nombreSendPost()
		{
			$nombres = $_POST['nombre']; //guarda el valor obtenido en el string direccion
			$apellidopa=$_POST['apellidopa'];
			$apellidoma=$_POST['apellidoma'];
			$sexo=$_POST['sexo'];
			$servicio2='http://localhost:1212/WS/Servicioweb?wsdl'; 
			$parametros2=array('arg0'=>$nombres,'arg1'=>$apellidopa,'arg2'=>$apellidoma,'arg3'=>$sexo);
			$client2=new SoapClient($servicio);
			$result2=$client2->nombrepropio($parametros2);
			print "<br>"."Hola ".$result2->return;	
		}
		
		public function rutSendPost(){
		
            $nombres = $_POST['nombre']; //guarda el valor obtenido en el string direccion
            $apellidopa=$_POST['apellidopa'];
            $apellidoma=$_POST['apellidoma'];
            $sexo=$_POST['sexo'];
            $servicio2='http://localhost:1212/WS/Servicioweb?wsdl'; 
            $parametros2=array('arg0'=>$nombres,'arg1'=>$apellidopa,'arg2'=>$apellidoma,'arg3'=>$sexo);
            $client2=new SoapClient($servicio);
            $result2=$client2->nombrepropio($parametros2);
            print "<br>"."Hola ".$result2->return;
	}
?>  
			