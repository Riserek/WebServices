<?php 

class EnlacesPagina{

	Static public function enlacesPaginasModelo($navegacion){
		if( $navegacion == "inicio" ||
			$navegacion == "rut" ||
		    $navegacion == "nombre"){

			$modelo = "vistas/".$navegacion.".php";
		}
		else{
			$modelo = "vistas/inicio.php";
		}
		return $modelo;
	}
}

 ?>