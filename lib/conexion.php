<?php

class Conexion {
	var $con;
	function __construct(){
		$db_connect['server'] = 'localhost';
		$db_connect['user'] = 'root';
		$db_connect['password'] = '';
		$db_connect['database'] = 'openmanager';

		$connect = mysql_connect($db_connect['server'], $db_connect['user'], $db_connect['password']);

		if($connect){
			mysql_select_db($db_connect['database']);
			$this->con=$connect;
		}
	}

	function getConexion(){
		return $this->con;
	}

	function close(){
		mysql_close($this->con);
	}
}
?>