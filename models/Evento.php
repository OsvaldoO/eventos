<?php

class Evento{

	function __construct( $id = null ){
		if($id){
			$this->get($id);
		}
	}

	public function get($id){
		$sql = 'SELECT * FROM eventos WHERE id='.$id;
		if($evento = Bd::read($sql)[0]){
			foreach ($evento as $campo => $value) {
				$this->$campo = $value;
			}
		}
	}

	public function getNext(){
		$sql = "SELECT id FROM eventos WHERE fecha > NOW() ORDER BY fecha ASC LIMIT 1";
		$event = Bd::read($sql)[0];
		$this->get($event['id']);
	}

	static function getLast(){
		$sql = "SELECT id, name,MONTH(fecha) as mes,DAY(fecha) as dia,descrip FROM eventos WHERE fecha < NOW() LIMIT 5";
		return Bd::read($sql);
	}

	static function getAll(){
		$sql = 'SELECT id, name, fecha, descrip, img FROM eventos';
		return Bd::read($sql);
	}

	public function getMusic(){
		$sql = "SELECT i.nombre FROM invitados as i, evento_invitado as ei WHERE i.clave = ei.clave_invitado AND ei.id_evento = ".$this->id;
		return Bd::read($sql);
	}

	public function setMusic($incitado){
		$sql = "INSERT INTO evento_invitado VALUES (".$this->id.','.$invitado.")";
		return Bd::read($sql);
	}

	static function getType($tipo){
		$sql = "SELECT id, name,fecha,descrip,img FROM eventos WHERE tipo='".$tipo."'";
		return Bd::read($sql);
	}

	static function getUncom(){
		$sql = "SELECT name, fecha, descrip, img FROM eventos WHERE fecha > NOW()";
		return Bd::read($sql);
	}

	public function getImages(){
		$sql = "SELECT * FROM imagenes WHERE evento_id=".$this->id;
		return Bd::read($sql);
	}

	public function create(){
		$sql = "INSERT INTO eventos VALUES (default,'".$this->name."','".$this->fecha."','".$this->hini."','".$this->hfin."','".$this->tipo."','".$this->lugar."','".$this->descrip."',".$this->taq.",".$this->prev.",'".$this->img."')";
		if(Bd::write($sql)){
			$sql = "SELECT max(id) as id FROM eventos";
			$evento = BD::read($sql)[0];
			$this->id = $evento['id'];
		}
	}

	public function save(){
		$sql = "UPDATE eventos SET name = ".$this->name.", fecha = ".$this->fecha.", hini = ".$this->hini.", hfin = ".$this->hfin.", tipo = ".$this->tipo.", lugar = ".$this->lugar.", desc = ".$this->descrip.", taq = ".$this->taq.", prev = ".$this->prev.",img = ".$this->img." WHERE id=".$this->id;
		return Bd::write($sql);
	}
}


?>