<?php 
include_once('sesion.php');


class Cliente{

	var $id;
	var $nombre;
	var $documento;
	var $direccion;
	var $email;
	var $telefono;
	
	var $sesion;

	function __construct(){
		$this->sesion = new Sesion();
	}

	function insertar(){
		$sql = "INSERT INTO clientes(nombre, 
									documento, 
									direccion,
									email, telefono) VALUES ('$this->nombre',
													'$this->documento',
													'$this->direccion',
													'$this->email', '$this->telefono')";
		$this->sesion->executeQuery($sql);
	}

	function obtener_clientes_con_visitas_pendientes($tiempo){
		$sql="select max(v.id) as visita, max(fecha), DATEDIFF(now(),max(fecha)) as tiempo, cliente from visitas v WHERE DATEDIFF(now(), fecha)>='$tiempo' group by cliente";
		$this->sesion->executeQuery($sql);
		return $this->sesion->fetchAll();
	}

	function eliminar(){
		$sql = "DELETE FROM clientes WHERE id='$this->id'";
		$this->sesion->executeQuery($sql);
	}

function obtener(){
	$sql = "SELECT * FROM clientes WHERE id='$this->id'";
	$this->sesion->executeQuery($sql);
	$resultado = $this->sesion->fetchAll();
	foreach ($resultado as $res) {
		$this->nombre = $res["nombre"];
		$this->telefono = $res["telefono"];
		$this->documento = $res["documento"];
		$this->direccion = $res["direccion"];
		$this->email = $res["email"];
	}
}

function obtener_todos(){
	$sql = "SELECT * FROM clientes";
	$this->sesion->executeQuery($sql);
	return $this->sesion->fetchAll();	
}

function actualizar(){
	$sql = "UPDATE clientes set nombre = '$this->nombre',
								telefono = '$this->telefono',
								documento = '$this->documento',
								direccion = '$this->direccion',
								email = '$this->email' 	WHERE id = '$this->id'";
	$this->sesion->executeQuery($sql);
	}


}

?>