<!DOCTYPE html>
 <html>
 <head>
 	<title>Cliente SOAP</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
 </head>
 <body>
 <div class="container">
    <nav class="navbar-expand-lg navbar-dark bg-dark">
		<ul class="nav nav-pills nav-fill">
  			<li class="nav-item"> <a class="nav-link active" href="index.php?pagina=inicio">Inicio</a></li>
  			<li class="nav-item"> <a class="nav-link text-white" href="index.php?pagina=rut">Verificar rut</a></li>
  			<li class="nav-item"> <a class="nav-link text-white" href="index.php?pagina=nombre">Nombre propio </a></li>
		</ul>
    </nav>
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
	<script src="js/bootstrap.min.js"> </script>
 </body>
 </html>

