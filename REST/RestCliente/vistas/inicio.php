<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
</head>
<body>
	<div class="container px-5 py-5">

	<h1>Servicios</h1>
	<br><h2>Servicio Rut</h2>
	<p><h5>
		Este servicio permite ingresar un rut en el formato 12345678-9 y validar si el dígito verificador ingresado es valido o no, la parte entera del rut (ed. 12345678) puede tener largo 7 u 8. <br><br>Dicha validación aparecera en pantalla de la siguiente forma:<br><br>
	</h5>
	<div class="alert alert-success" role="alert">
		El rut 19280741-7 ingresado es valido :)
	</div>
	<div class="alert alert-danger" role="alert">
		El rut 19280741-8 ingresado es invalido :(
	</div>
	</p><br>
	<h2>Servicio Nombre</h2>
	<p><h5>
		Este servicio permite ingresar, Nombres, Apellido paterno, Apellido materno y Sexo, una vez completados todos los campos, se mostrara un mensaje acorde a la información entregada.
		<br>Ejemplos:<br><br>
		</h5>
		<h5>Si indicamos sexo = F:</h5>
		<div class="alert alert-primary" role="alert">
			Hola Sra. Josefina Alejandra Gonzales perez, gracias por usar el servicio :)
		</div>
		<h5>Si indicamos sexo = M:</h5>
		<div class="alert alert-primary" role="alert">
			Hola Sr. Juan Jose Perez Pereira, gracias por usar el servicio :)
		</div>
	</p>
	</div>
</body>
</html>