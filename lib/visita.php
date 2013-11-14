<?php 
include_once('sesion.php');

class Visita{
	var $id;
	var $fecha;
	var $cliente;

	var $sesion;

	function __construct(){
		$this->sesion = new Sesion();
	}

	function insertar(){
		$sql = "INSERT INTO visitas (fecha, cliente) VALUES ()";
	}

}

 ?>