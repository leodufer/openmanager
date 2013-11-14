<?php 
	include_once('sesion.php');

class Tarea_Colaborador{
	var $id;
	var $tarea;
	var $colaborador;
	var $fecha_asignacion;
	var $fecha_vencimiento;

	var $sesion;

	function __construct(){
		$this->sesion = new Sesion();
	}

	function insertar(){
		$sql = "INSERT INTO tarea_colaborador (tarea, colaborador, fecha_asignacion, fecha_vencimiento) VALUES ('$this->tarea', '$this->colaborador','$this->fecha_asignacion','$this->fecha_vencimiento')";
		$this->sesion->executeQuery($sql);
	}
}
 ?>