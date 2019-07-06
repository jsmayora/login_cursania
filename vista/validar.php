<?php 


include '../controlador/usuariosControlador.php';

if (isset($_POST["usuario"] ) || isset($_POST["contrasena"]) ) 
{
	if (trim($_POST["usuario"]) == ""  ||  trim($_POST["contrasena"]) == "" )  {
				// 08.- Cerrar sesión - Login con PHP, Bootstrap y Jquery | @eytooestudios
		// session_start();
		// $_SESSION["usuario"] = $_POST["usuario"];
		// $_SESSION["contrasena"] = $_POST["contrasena"];

		echo "false " . "\n3";
	}else{
		$usuariosCon = new usuariosControlador();
		$usuario = $usuariosCon->validarUsuarios($_POST["usuario"],$_POST["contrasena"]);
		if (count($usuario) > 0) {
			// $idUsuario = $usuariosCon->getId_usuario($_POST["usuario"],$_POST["contrasena"]);
			echo "true <br>";
			echo $_SESSION["id_usuario"] =  $usuario["id_usuario"] . "<br>";
		// echo $_SESSION["usuario"] =  $_POST["usuario"]. "<br>";
			echo $_SESSION["usuario"] =  $usuario["usuario"] . "<br>";
			echo $_SESSION["privilegio"] =  $usuario["privilegio"] . "<br>";

			echo "true";
		} else {
			echo "false";
		}
	}
} else {echo "false";}


?>