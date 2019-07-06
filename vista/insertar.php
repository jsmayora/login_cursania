<?php 

include '../controlador/usuariosControlador.php';

// 06.- Validación del lado servidor - Login con PHP, Bootstrap y Jquery | @eytooestudios
// validando los datos pasados al controlador
if (isset($_POST["usuario"] ) || isset($_POST["contrasena"]) ) { 


//
	if (trim($_POST["usuario"]) == ""  ||  trim($_POST["contrasena"]) == "" ) 
	 {
# code...
		echo "3_FALSE ";
	}
	 else
	 {
		$usuariosCon = new usuariosControlador();
		if ($usuariosCon->insertarUsuarios($_POST["usuario"],$_POST["contrasena"])) {
		# code...
			echo "TRUE <br>";
			echo $_POST["usuario"]. "<br>";
			echo $_POST["contrasena"]. "<br>";
		}else {
		# code...
			echo "1_FALSE Se creo el usuario que no estaba en la bd";
		}
	 }
		
	} else {
		# code...
		echo "2_FALSE";
	}



?>