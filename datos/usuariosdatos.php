<?php 

// parte logica de insertar los usuarios
include '../entidades/usuarios.php';
// 07.- Validando usuarios registrados - Login con PHP, Bootstrap y Jquery | @eytooestudios
// include '../entidades/usuarios_indes.php';
include 'conexion.php';
//sistemve.com/formlogin/datos/conexion.php
	// aqui se creara la clase que insertara los valores de la vista a la tbl_usuarios en la bd_ 
	// formlogin
	// parte logiga para inseratr los datos

	// esta clase llamara a la tbl usuarios para insertar los valores

/**
 * 
 */
// 03.- Getters y Setters en capa Entidades - Login con PHP, Bootstrap y Jquery | @eytooestudios
class usuariosDatos
{
	// esta funcion se conecta al host, bd y a la tbl usuarios par insertar valores
	public function insertarUsuarios($usuario, $contrasena)
	{
		// echo "string";exit;
		# Estableciendo coneccion al servidor 'conexion.php';
		$cnn = new conexion();
		$con = $cnn->conectar();
		

		# Estableciendo coneccion a la clase usuarios del '../entidades/usuarios.php';
		#Creando el filtro de datos 
		$usuarios = new usuarios();
		$usuarios->usuario = $usuario ;
		$usuarios->contrasena = $contrasena ;

		# Seleccionando bd
		// mysqli_select_db($con,"ptra");
		$con->select_db("ptra");
		#fin del filtro de datos 

		$insert_tbl =  "INSERT INTO tbl_usuarios (usuario, contrasena)
		VALUES ('".$usuarios->usuario."', '".$usuarios->contrasena."' )";

		if ($con->query($insert_tbl) === TRUE) {

			# code...
			echo "\nFue creado el usuario ";
			return true;

		} else {
			# code...
			echo "\nNo se creo el usuario\n" .$insert_tbl. "<br>". $con->error;
			return false;
		}
		
		// mysqli_close($con);
		$con->close();
	}


// llamando al objeto o clase usuariosDatos para crea los usuarios en la tbl
// $objeto = new usuariosDatos();
// // echo $objeto; exit;

// if ($objeto->insertarUsuarios("Gustavo","petra")) {
// 	# code...
// 	echo " Todo va bien ";
// }
//  else {
// // 	# code...
// 	echo "no paso";
// }
// SE LLAMA AL OBJETO SOLO PARA PROBRA, SE DEBE CREAR OTRO FILTRO LLAMADO CONTROLADOR
//  EN DONDE SE CREARAN LOS USUARIOS

// 06.- Validación del lado servidor - Login con PHP, Bootstrap y Jquery | @eytooestudios


	public	function validarUsuarios($usuario, $contrasena){
# Estableciendo coneccion al servidor 'conexion.php';
		$cnn = new conexion();
		$con = $cnn->conectar();


		# Estableciendo coneccion a la clase usuarios del '../entidades/usuarios.php';
		#Creando el filtro de datos 
		$usuarios = new usuarios();
		$usuarios->usuario    = $usuario ;
		$usuarios->contrasena = base64_encode($contrasena) ;

		# Seleccionando bdfetch_assoc
		mysqli_select_db($con,"ptra");

		$select_tbl =  "SELECT * FROM tbl_usuarios 
		WHERE usuario ='".$usuarios->usuario."' AND contrasena ='".$usuarios->contrasena."'";

		$consulta_tbl = $con->query($select_tbl);
		$fila = $consulta_tbl->fetch_array();//fetch_assoc
		if ($fila > 0) {
			if ($fila["usuario"] == $usuarios->usuario  && $fila["contrasena"] == $usuarios->contrasena) {
				# code...
				// 12.- Privilegios para acceso Multiusuario - Login con PHP, Bootstrap y Jquery || @eytooestudios
				echo "\nusuario=\n" . $fila["usuario"] . "\ncontraseña=\n" . $fila["contrasena"] ;
				return $fila;  
			}
			# code...
			// echo "TRUE %s (%S)\n", $fila["usuario"] , $fila["contrasena"] ;
		}
		// else {

		// 	return false;
		// }
		// mysqli_close($con);
	}



	public function getId_usuario($usuario,$contrasena){

		# Estableciendo coneccion al servidor 'conexion.php';
		$cnn = new conexion();
		$con = $cnn->conectar();


		# Estableciendo coneccion a la clase usuarios del '../entidades/usuarios.php';
		#Creando el filtro de datos 
		$usuarios = new usuarios();
		$usuarios->usuario    = $usuario ;
		$usuarios->contrasena = base64_encode($contrasena) ;

		# Seleccionando bdfetch_assoc
		$con->select_db("ptra");

		$select_tbl =  "SELECT * FROM tbl_usuarios 
		WHERE usuario ='".$usuarios->usuario."' AND contrasena ='".$usuarios->contrasena."'";

		$consulta_tbl = $con->query($select_tbl);
		$fila = $consulta_tbl->fetch_array();//fetch_assoc
		if ($fila > 0) {
			if ($fila["usuario"] == $usuarios->usuario  && $fila["contrasena"] == $usuarios->contrasena) {
				# code...
				// 12.- Privilegios para acceso Multiusuario - Login con PHP, Bootstrap y Jquery || @eytooestudios
				echo "\nusuario=\n" . $fila["usuario"] . "\ncontraseña=\n" . $fila["contrasena"] ;
				return $fila["id_usuario"];  
			}
			
		}else{
			return 0;
		}
	}

}

// llamando al objeto o clase usuariosDatos para crea los usuarios en la tbl
$objeto = new usuariosDatos();
// echo $objeto; exit;

if ($objeto->insertarUsuarios("toto","toto")) {
	# code...
	 echo " \nTodo va bien ";
}
else {
// 	# code...
	echo "\nno paso\n";
}
// SE LLAMA AL OBJETO SOLO PARA PROBRA, SE DEBE CREAR OTRO FILTRO LLAMADO CONTROLADOR
//  EN DONDE SE CREARAN LOS USUARIOS

echo "<br><br>\n";
echo "\nvalidarUsuario";
// llamar a la clase
//  $ObjusuariosDatos = new usuariosDatos();

// $result = $ObjusuariosDatos->validarUsuarios("jose", "jose");

// if ($result) {

// 	echo "\nEl  usuarios es correcto\n";
// 	# code...
// } else {
// 	# code...
// 	echo "\nel usuarios no es correcto\n";
// }

// echo "<br><br>\nId_usuario";
//  $ObjusuariosDatos = new usuariosDatos();

// $result = $ObjusuariosDatos->getId_usuario("jose", "jose");

// if ($result) {

// 	echo "\nEl  usuarios es correcto\n";
// 	# code...
// } else {
// 	# code...
// 	echo "\nel usuarios no es correcto\n";
// }

?>