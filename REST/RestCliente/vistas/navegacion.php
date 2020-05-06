	
	<div class="p-3 bg-dark text-white d-flex justify-content-center"><h2>WEbService REST</h1></div>


<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
	
	<div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
			<div class="navbar-nav">
			
		<?php if(isset($_GET['pagina'])): ?>
			<?php if($_GET["pagina"] == "inicio" || $_GET["pagina"] == "rut" || $_GET["pagina"] == "nombre"): ?>

				<?php if($_GET["pagina"] == "inicio"): ?>
					<a class="nav-item nav-link active" href="index.php?pagina=inicio">Inicio <span class="sr-only">(current)</span></a>
				<?php else: ?>
					<a class="nav-item nav-link" href="index.php?pagina=inicio">Inicio 
				<?php endif ?>


				<?php if($_GET['pagina'] == "rut"): ?>
					<a class="nav-item nav-link active" href="index.php?pagina=rut">Servicio Rut</a><span class="sr-only">(current)</span>
				<?php else: ?>
					<a class="nav-item nav-link" href="index.php?pagina=rut">Servicio Rut</a>
				<?php endif ?>
				

				<?php if($_GET["pagina"] == "nombre"): ?>
					<a class="nav-item nav-link active" href="index.php?pagina=nombre">Servicio Nombre</a><span class="sr-only">(current)</span>
				<?php else: ?>
					<a class="nav-item nav-link" href="index.php?pagina=nombre">Servicio Nombre</a>
				<?php endif ?>
			<?php else: ?>
				<a class="nav-item nav-link active" href="index.php?pagina=inicio">Inicio <span class="sr-only">(current)</span></a>
				<a class="nav-item nav-link" href="index.php?pagina=rut">Servicio Rut</a>
				<a class="nav-item nav-link" href="index.php?pagina=nombre">Servicio Nombre</a>
			<?php endif ?>

		<?php else: ?>			
			<a class="nav-item nav-link active" href="index.php?pagina=inicio">Inicio <span class="sr-only">(current)</span></a>
			<a class="nav-item nav-link" href="index.php?pagina=rut">Servicio Rut</a>
			<a class="nav-item nav-link" href="index.php?pagina=nombre">Servicio Nombre</a>
		<?php endif ?>
		</div>
	</div>
</nav>
