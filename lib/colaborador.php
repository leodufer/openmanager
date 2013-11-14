<?php 
include_once('sesion.php');


class Colaborador{

	var $id;
	var $nombre;
	var $apellido;
	var $telefono;
	var $email;
	var $estado;
	
	var $sesion;

	function __construct(){
		$this->sesion = new Sesion();
	}

	function insertar(){
		$sql = "INSERT INTO colaboradores (nombre, 
									apellido,  
									telefono,
									email, estado) VALUES ('$this->nombre',
													'$this->apellido',
													'$this->telefono',
													'$this->email','$this->estado')";
		$this->sesion->executeQuery($sql);
	}


function obtener(){
	$sql = "SELECT * FROM colaboradores WHERE id='$this->id'";
	$this->sesion->executeQuery($sql);
	$resultado = $this->sesion->fetchAll();
	foreach ($resultado as $res) {
		$this->nombre = $res["nombre"];
		$this->apellido = $res["apellido"];
		$this->email = $res["email"];
		$this->telefono = $res["telefono"];
		$this->estado = $res["estado"];
	}
}

function obtener_todos(){
	$sql = "SELECT * FROM colaboradores";
	$this->sesion->executeQuery($sql);
	return $this->sesion->fetchAll();	
}

}
?>