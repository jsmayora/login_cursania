<?php 
session_start();
// comprobar si las sesion exite
// &&  isset($_SESSION["contrasena"]))
if (isset($_SESSION["usuario"])  {
	# code...
	echo " hola ". $_SESSION["id_usuario"] ."\n" . " bienvenido";

echo "<a href='cerrarsesion.php'>Cerrar Sesión</a>";

}else {
	# code...
	echo "<meta http-equiv='refresh' content='0;url=index.php'>";
}


?>







