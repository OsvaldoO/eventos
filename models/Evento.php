<?php

include_once('models/mysql.php');

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
		$sql = "SELECT name,MONTH(fecha) as mes,DAY(fecha) as dia,descrip FROM eventos WHERE fecha < NOW() LIMIT 5";
		return Bd::read($sql);
	}

	static function getAll(){
		$sql = 'SELECT name, fecha, descrip, img FROM eventos';
		return Bd::read($sql);
	}

	public function getMusic(){
		$sql = "SELECT distinct i.nombre FROM invitados i JOIN evento_invitado ei ON ( ei.id_evento = ".$this->id." )";
		return Bd::read($sql);
	}

	static function getType($tipo){
		$sql = "SELECT name,fecha,descrip,img FROM eventos WHERE tipo='".$tipo."'";
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

	public function save(){
		if (isset($this->id)){
			$sql = "UPDATE eventos SET name = ".$this->name.", fecha = ".$this->fecha.", hini = ".$this->hini.", hfin = ".$this->hfin.", tipo = ".$this->tipo.", lugar = ".$this->lugar.", desc = ".$this->desc.", taq = ".$this->taq.", prev = ".$this->prev.",img = ".$this->img." WHERE id=".$this->id;
		} 
		else {
			$sql = "INSERT INTO eventos VALUES (default,".$this->name.",".$this->fecha.",".$this->hini.",".$this->hfin.",".$this->tipo.",".$this->lugar.",".$this->desc.",".$this->taq.",".$this->prev.",".$this->img.")";
		}
		return Bd::write($sql);
	}
}


?>