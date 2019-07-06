<!-- inicio 04.- Programar controlador - Login con PHP, Bootstrap y Jquery | @eytooestudios -->

<?php 
include '../datos/usuariosdatos.php';

/**
 * 
 */
class usuariosControlador
{
	
	function insertarUsuarios($usuario, $contrasena)
	{
		# code...
		$obj = new usuariosDatos();
		// SE REALIZA UN FILTRO PEQUEÑO DE DATOS
		return $obj->insertarUsuarios($usuario, $contrasena);

	}

	function validarUsuarios($usuario,$contrasena){ 
		$obj = new usuariosDatos();
		return $obj->validarUsuarios($usuario,$contrasena);
	}

	function getId_usuario($usuario,$contrasena){
		$obj = new usuariosDatos();
		return $obj->getId_usuario($usuario,$contrasena);	
	}
}


?>

<!-- fin 04.- Programar controlador - Login con PHP, Bootstrap y Jquery | @eytooestudios -->