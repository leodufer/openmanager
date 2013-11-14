<?php 
	switch ($_SERVER['REQUEST_METHOD']) {
		case 'GET':
			header('Location:../?p=colaboradores');		
			break;
		case 'POST':
			guardar();
			header('Location:../?p=colaboradores');		
			break;
		}
	function guardar(){
		include_once('../lib/colaborador.php');
		$col = new Colaborador();
		$col->nombre = $_POST["nombre"];
		$col->apellido = $_POST["apellido"];
		$col->email = $_POST["email"];
		$col->telefono = $_POST["telefono"];
		$col->estado = $_POST["estado"];
		$col->insertar();
	}
 ?>
