<?php 
	switch ($_SERVER['REQUEST_METHOD']) {
		case 'GET':
			header('Location:../?p=asignar');		
			break;
		case 'POST':
			guardar();
			header('Location:../?p=asignar');		
			break;
		}
	function guardar(){
		include_once('../lib/tarea.php');
		include_once('../lib/tarea_colaborador.php');
		$tarea = new Tarea();
		$tarea_colaborador = new Tarea_Colaborador();
		$tarea_colaborador->tarea = $_POST['tarea']; 
		$tarea_colaborador->colaborador = $_POST['colaborador'];
		$tarea_colaborador->fecha_asignacion = date('Y-m-d');
		$tarea->id = $_POST['tarea'];
		$tarea->obtener();
		$tarea_colaborador->fecha_vencimiento = vencimiento($tarea->duracion);
		$tarea_colaborador->insertar();
		$tarea->estado="asignada";
		$tarea->actualizar_estado();
	}

	function vencimiento($duracion){
		return date('Y-m-d', strtotime(date('Y-m-d'). ' + '.$duracion.' days'));
	}
 ?>