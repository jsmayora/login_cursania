<?php 

/**
 * 
 */
class conexion
{
	
	public function conectar()
	{
		# code...
		$con = new mysqli("localhost", "pruebas","pruebas");
		if ($con->connect_error) {
			die("Fallo la conexión: " . $con->connect_error);
			// return $cnn;
		} else {
	# code...
			echo "\nSe conecto\n";
			return $con;
		}



	}
}

// $cnn =new conexion();
// $cnn->conectar();
