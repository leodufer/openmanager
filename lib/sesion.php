<?php

include_once('conexion.php');


class Sesion{
	var $conexion;
	var $consulta;
	var $resultados;

	function __construct(){
		$this->conexion = new Conexion();
	}

	function executeQuery($consulta){
		$this->consulta= mysql_query($consulta,$this->conexion->getConexion()) or die("Error de sintaxis $consulta: ".mysql_error());
		return $this->consulta;
	}
	function getResults(){
		return $this->consulta;	
	}

	function Close(){
		$this->conexion->Close();
	}	
	
	function Clean(){
		mysql_free_result($this->consulta);
	}
	
	function getResultados() {
		return mysql_affected_rows($this->conexion->getConexion()) ;
	}
	
	function getAffect(){
		return mysql_affected_rows($this->conexion->getConexion()) ;
	}

	function fetchAll()
    {
        $rows=array();
		if ($this->consulta)
		{
			while($row=  mysql_fetch_array($this->consulta))
			{
				$rows[]=$row;
			}
		}
        return $rows;
    }
}

?>