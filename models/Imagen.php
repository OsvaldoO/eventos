<?php

include_once('models/mysql.php');

class Imagen{

	static function getLast(){
		$sql = "SELECT * FROM imagenes WHERE fecha < NOW() ORDER BY fecha LIMIT 1";
		return Bd::read($sql)[0];
	}

	static function getAll(){
		$sql = "SELECT * FROM imagenes";
		return Bd::read($sql);
	}

	static function getType($tipo){
		$sql = "SELECT * FROM imagenes as i, eventos as e WHERE i.evento_id = e.id AND e.tipo ='".$tipo."'";
		return Bd::read($sql);
	}
}


?>