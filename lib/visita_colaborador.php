<?php 
	include_once('sesion.php');

	class Visita_Colaborador{
		var $id;
		var $visita;
		var $colaborador;
		var $observacion;

		var $sesion;

		function __construct(){
			$this->sesion = new Sesion();
		}
		function insertar(){
			$sql="INSERT INTO visita_colaborador (visita, colaborador, observacion) VALUES ('$this->visita', '$this->colaborador','$this->observacion')";
			$this->sesion->executeQuery($sql);
		}

		function obtener_por_visita(){
			$sql="SELECT * FROM visita_colaborador WHERE visita='$this->visita'";
			$this->sesion->executeQuery($sql);
			$resultado = $this->sesion->fetchAll();
			foreach ($resultado as $res) {
				$this->id = $res["id"];
				$this->visita = $res["visita"];
				$this->colaborador = $res["colaborador"];
				$this->observacion = $res["observacion"];
			}
		}
	}
 ?>