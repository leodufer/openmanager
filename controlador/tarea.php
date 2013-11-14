<?php 
	switch ($_SERVER['REQUEST_METHOD']) {
		case 'GET':
			header('Location:../?p=tareas');		
			break;
		case 'POST':
			guardar();
			header('Location:../?p=tareas');		
			break;
		}
	function guardar(){
		include_once('../lib/tarea.php');
		$t = new Tarea();
		$t->descripcion = $_POST["descripcion"];
		$t->duracion = $_POST["duracion"];
		$t->estado = "nueva";
		$t->insertar();
	}
 ?>
