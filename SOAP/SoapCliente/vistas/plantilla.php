<!DOCTYPE html>
 <html>
 <head>
 	<title>SOAP WebService</title>
 </head>
 <body>
 	
	<div>
		<ul>
			<li>
				<a href="index.php?pagina=inicio">Inicio</a>
			</li>
			<li>
				<a href="index.php?pagina=rut">Verificar rut</a>	
			</li>
			<li>
				<a href="index.php?pagina=nombre">Nombre propio</a>
			</li>
		</ul>
	</div>
	<div>


		<?php 
			if(isset($_GET['pagina'])){
				if( $_GET['pagina'] == "rut" ||
					$_GET['pagina'] == "nombre"){
					include "vistas/".$_GET['pagina'].".php";
				}else{
					include "vistas/inicio.php";
				}
			}else{
				include "vistas/inicio.php";
			}
		 ?>

	</div>
 </body>
 </html>

