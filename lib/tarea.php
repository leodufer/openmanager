<?php 
include_once('sesion.php');

class Tarea{

	var $id;
	var $descripcion;
	var $duracion;
	var $estado;

	var $sesion;


	function __construct(){
		$this->sesion = new Sesion();
	}

	function insertar(){
		$sql = "INSERT INTO tareas (descripcion, duracion, estado) VALUES ('$this->descripcion', '$this->duracion', '$this->estado')";
		$this->sesion->executeQuery($sql);
	}

	function obtener_tareas(){
		$sql = "SELECT * FROM tareas";
		$this->sesion->executeQuery($sql);
		return $this->sesion->fetchAll();
	}

	function obtener_tareas_nuevas(){
		$sql = "SELECT * FROM tareas WHERE estado = 'nueva'";
		$this->sesion->executeQuery($sql);
		return $this->sesion->fetchAll();
	}
	function obtener(){
	$sql = "SELECT * FROM tareas WHERE id='$this->id'";
	$this->sesion->executeQuery($sql);
	$resultado = $this->sesion->fetchAll();
	foreach ($resultado as $res) {
		$this->descripcion = $res["descripcion"];
		$this->duracion = $res["duracion"];
		$this->estado = $res["estado"];
	}
}

	function actualizar_estado(){
		$sql = "UPDATE tareas SET estado='$this->estado' WHERE id = '$this->id'";	
		$this->sesion->executeQuery($sql);
	}


}





 ?>