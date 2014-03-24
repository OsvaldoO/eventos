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
		public function listar(){
			$bd = new Bd();
			$sql = 'SELECT name,fecha,descripcion,img FROM eventos';
			$res = $bd->solicitud($sql);
			$eventos = array();
			$i = 0;
			while ($record = mysql_fetch_array($res)) {
				$eventos[$i]['name'] = $record['name'];
				$eventos[$i]['fecha'] = $record['fecha'];
				$eventos[$i]['descripcion'] = $record['descripcion'];
				$eventos[$i]['img'] = $record['img'];
				$i++;
			}
			template_header('Eventos');
			eventos_index($eventos);
			template_footer();
		}

		public function ver($id = 1){
			$bd = new Bd();
			$sql = 'SELECT name,fecha,descripcion,img FROM eventos WHERE id='.$id;
			$res = $bd->solicitud($sql);
			$evento = array();
			while ($record = mysql_fetch_array($res)) {
				$evento['name'] = $record['name'];
				$evento['fecha'] = $record['fecha'];
				$evento['descripcion'] = $record['descripcion'];
				$evento['img'] = $record['img'];
			}
			template_header('Eventos');
			evento_show($evento);
			template_footer();
		}
	}

	$evento = new Eventos();
	if(count($ACTION) > 1){
		$evento->$ACTION[1]();
	}
	else $evento->listar();
?>