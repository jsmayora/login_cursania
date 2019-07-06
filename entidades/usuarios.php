<?php 


	// 03.- Getters y Setters en capa Entidades - Login con PHP, Bootstrap y Jquery | @eytooestudios
	// inserta usuarios de manera dinamica	 // 
	//  mapeos de usuarios
// contiene los valores que estan en la tbl usuarios de la bd formlogin
//  esta clase s
class usuarios
{
	public $id_usuario;
	public $usuario;
	public $contrasena;

	// 12.- Privilegios para acceso Multiusuario - Login con PHP, Bootstrap y Jquery || @eytooestudios
	public $privilegio;

	function get_id_usuario() {
		return $this->id_usuario;
	}

	function set_id_usuario($id_usuario){

		$this->id_usuario = $id_usuario;
	}


	function get_usuario(){

		return $this->usuario ;
	}
	
	
	function set_usuario($usuario){
		$this->usuario = $usuario;

	}
	function get_contrasena(){

		return $this->contrasena;
	}

	function set_contrasena($contrasena){
		$this->contrasena = $contrasena;

	}

// 12.- Privilegios para acceso Multiusuario - Login con PHP, Bootstrap y Jquery || @eytooestudios
	function get_privilegio(){

		return $this->privilegio;
	}

	function set_privilegio($privilegio){
		$this->privilegio = $privilegio;

	}
}