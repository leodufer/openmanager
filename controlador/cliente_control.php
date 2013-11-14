<?php 
	
switch ($_SERVER['REQUEST_METHOD']) {
		case 'GET':
			
			header('Location:../?content=CLIENTES');		
			break;
		case 'POST':
			
			if(!isset($_POST['id'])){
				guardar();
			}
			if(isset($_POST['id'])){
				if(isset($_GET['accion']))
					eliminar();
				else
					actualizar();
			}
			break;
	}

	function guardar(){
		include_once('../lib/cliente.php');
		$cliente = new Cliente();
		$cliente->nombre = $_POST["nombre"];
		$cliente->telefono = $_POST["telefono"];
		$cliente->documento = $_POST["documento"];
		$cliente->direccion = $_POST["direccion"];
		$cliente->email = $_POST["email"];
		$cliente->insertar();
		header('Location:../?p=clientes');
	}

	function actualizar(){
		include_once('../lib/cliente.php');
		$cliente = new Cliente();
		$cliente->id = $_POST['id'];
		$cliente->nombre = $_POST["nombre"];
		$cliente->telefono = $_POST["telefono"];
		$cliente->documento = $_POST["documento"];
		$cliente->direccion = $_POST["direccion"];
		$cliente->email = $_POST["email"];
		$cliente->actualizar();
		header('Location:../?content=CLIENTES');
	}

	function eliminar(){
		include_once('../lib/cliente.php');
		$cliente = new Cliente();
		$cliente->id = $_POST['id'];
		$cliente->eliminar();
		header('Location:../?content=CLIENTES');
	}

 ?>