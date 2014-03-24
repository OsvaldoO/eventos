<?php
	include('views/events.php');

	class Bd{
		private $con;
		private $db;

		private function conectar(){
			$this->con = mysql_connect ( 'localhost', 'oosvaldo', 'oOnzO' );
			$this->db = mysql_select_db( 'eventos', $this->con ) or die ("Error Base de datos");
		}

		public function solicitud($sql){
			$this->conectar();
			$res = mysql_query( $sql );
			mysql_close($this->con);
			return ($res)?$res:NULL;
		}
	}

	class Eventos{

		private function inArray($res){
			$eventos = array();
			if($res){
				$i = 0;
				while ($record = mysql_fetch_array($res)) {
					foreach ($record as $key => $value) {
						$eventos[$i][$key] = $record[$key];
					}
					$i++;
				}
			}
			return $eventos;
		}

		public function index(){
			$bd = new Bd();
			$sql = 'SELECT name,fecha,descripcion,img FROM eventos';
			$res = $bd->solicitud($sql);
			$eventos = $this->inArray($res);
			template_header('Eventos');
			eventos_list($eventos);
			template_footer();
		}

		public function evento($id){
			$bd = new Bd();
			$sql = 'SELECT * FROM eventos WHERE id='.$id;
			$res = $bd->solicitud($sql);
			$evento = $this->inArray($res)[0];
			template_header('Eventos');
			evento_show($evento);
			template_footer();
		}

		public function porTipo($tipo){
			$bd = new Bd();
			$sql = "SELECT name,fecha,descripcion,img FROM eventos WHERE tipo='".$tipo."'";
			$res = $bd->solicitud($sql);
			$eventos = $this->inArray($res);
			template_header('Eventos');
			eventos_list($eventos);
			template_footer();
		}
	}

$evento = new Eventos();
if(count($ACTION) > 1){
	if(is_numeric($ACTION[1])){
		$evento->evento($ACTION[1]);
	}
	else{
		$evento->porTipo($ACTION[1]);
	}
}
else{ 
	$evento->index();
}
?>