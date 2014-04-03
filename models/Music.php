<?php

class Musico{

	static function get($clave){
		$sql = "SELECT * FROM invitados WHERE clave ='".$clave."'";
		if($musico = Bd::read($sql)[0]){
			foreach ($musico as $campo => $value) {
				$this->$campo = $value;
			}
		}
	}

	public function create(){
		$sql = "INSERT INTO invitados VALUES ('".$this->clave."','invitado.jpg','".$this->nombre."','Describeme')";
		return Bd::write($sql);
	}

	static function exist($clave){
		$sql = "SELECT EXISTS(SELECT 1 FROM invitados WHERE clave ='".$clave."' LIMIT 1) as e";
		if( BD::read($sql)[0]['e'] == 1){
			return true;
		}
		return false;
	}

	static function getAll(){
		$sql = "SELECT * FROM invitados";
		return Bd::read($sql);
	}

	public function getEvents(){
		$sql = "SELECT * FROM eventos as e, evento_invitado as ei WHERE e.id = ei_evento.id AND ei.clave_invitado ='".$this->clave."'";
		return Bd::read($sql);
	}
}


?>