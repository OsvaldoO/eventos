<?php 
class Bd{
		private $con;
		private $db;

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

		private function conectar(){
			$this->con = mysql_connect ( 'localhost', 'oosvaldo', 'oOnzO' );
			$this->db = mysql_select_db( 'eventos', $this->con ) or die ("Error Base de datos");
		}

		public function solicitud($sql){
			$this->conectar();
			$res = mysql_query( $sql );
			mysql_close($this->con);
			$res = $this->inArray($res);
			return ($res)?$res:NULL;
		}
	}