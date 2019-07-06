<?php 

//  este codigo completo funciona
include 'conexion.php';

 // Creación de base de datos
function crearbd()
{
		// Creando una nueva conexion al servidor de la bd (mysql) localhost
	$cnn = new conexion();
	$con = $cnn->conectar();

		// variable quye crea la base de datos
	$create_bd = "CREATE DATABASE ptra";

		

	if (mysqli_query($con,$create_bd)) {

			# code...
		echo "Consulta correcta...!!!! " ;
	} else {
		echo "Error al  crear...!!! " ;
	}

	// return $con; 

	mysqli_close($con);
}


// ÉSTA ES LA FORMA PARA LLAMAR A UNA FUNCIÓN PARA EJECUTAR EL PROCESO QUE TIENE INTERNO
// crearbd();

function creartbls()
{
	$cnn = new conexion();
	$con = $cnn->conectar();

	// SELECIONANDO LA BASE DE DATOS

	// luego que se conecta a la bd por el host se tiene que elegir la bd en donde se crearan las tbls	 

	//   forma exitosa 1
	mysqli_select_db($con,"ptra");
	
	$createTblUsuarios = "CREATE TABLE tbl_usuarios (
	
	id_usuario INT(11) NOT NULL AUTO_INCREMENT,
	usuario CHAR(50),
	contrasena CHAR(50),
	PRIMARY KEY (id_usuario) ) ";

		 //forma exitosa de crear tbl
	if ( mysqli_query($con,$createTblUsuarios ) === TRUE )
	{
			# code...
		echo "Tabla creada:::  " ;
		
	} 
	else
	{
		echo  "  error al creat tbl" . $con->error ;
	}
	mysqli_close($con);

}

// LLAMAR A LA FUNCIÒN QUE CREARA LA TBL PARA LOS USURAIOS EN LA BASE DE DATOS
 // creartbls();



?>