<?php 
class Bd{
		private static $con;
		private static $db;

		private static function inArray($res){
			$eventos = array();
			if($res){
				$i = 0;
				while ($record = mysql_fetch_array($res)) {
					foreach ($record as $key => $value) {
						if(!is_numeric($key)){
							$eventos[$i][$key] = $record[$key];
						}
					}
					$i++;
				}
			}
			return $eventos;
		}

		private static function conectar(){
			Bd::$con = mysql_connect ( 'localhost', 'oosvaldo', 'oOnzO' );
			Bd::$db = mysql_select_db( 'eventos', Bd::$con ) or die ("Error Base de datos");
		}

		public static function read($sql){
			Bd::conectar();
			$res = mysql_query( $sql );
			mysql_close(Bd::$con);
			$res = Bd::inArray($res);
			return ($res)?$res:NULL;
		}

		public function write($sql){
			$this->conectar();
			$res = mysql_query( $sql );
			mysql_close($this->con);
			return $res;
		}

	}