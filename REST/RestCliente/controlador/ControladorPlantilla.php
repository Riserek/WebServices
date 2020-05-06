<?php 

	class ControladorPlantilla{


		public function ctrTraerPlantilla(){
			include "vistas/plantilla.php";
		}

		public function ctrControlarEnlaces(){

			if(isset($_GET["pagina"])){

				$controladorEnlace = $_GET["pagina"];
			}
			else{
				$controladorEnlace = "";
			}
				$respuesta = EnlacesPagina::enlacesPaginasModelo($controladorEnlace);
				include $respuesta;
			}

	}
?>