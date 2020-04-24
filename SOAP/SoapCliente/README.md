#Consideraciones:
###vistas/rut.php
la variable $_POST['arg0'] es quien recibe el rut que se envia mediante el formulario al servicio al pulsar enviar

###vistas/nombre
Los campos "name" dentro de los formularios son los parametros que recibira el metodo post y se enviaran mediante $_POST['name'] al servidor, por lo que es necesario ponerlos acorde a los parametros que utiliza el servidor para ejecutar el servicio.

###controlador/
En el caso del cliente REST, en esta carpeta genere un archivo "ControladorResponse.php" donde se realizaba el enlace al servidor, ese seria el archivo que falta agregar. Lo ideal seria agregarlo aqui o en alguna carpeta similar con tal de tener las cosas bien organizadas, se puede tomar el ejemplo del otro cliente si quieren, en dicho cliente se trabajaron las peticiones al servidor como metodos de una clase, y asi mediante un "require_once 'controlador/{nombre.php}" en el index, se pueden utilizar dichos metodos en las vistas correspondientes.

##Para tener en cuenta
El cliente aun no esta interactuando con el servidor, solo se esta produciendo el cambio entre las distintas vistas y estan agregados los formularios correspondientes.