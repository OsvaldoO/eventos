<?php
	include('views/events.php');
	include('controllers/mysql.php');

	class Eventos{

		public function index(){
			$bd = new Bd();
			$sql = 'SELECT name,fecha,descripcion,img FROM eventos';
			$eventos = $bd->solicitud($sql);
			template_header('Eventos');
			eventos_list($eventos);
			template_footer();
		}

		public function evento($id){
			$bd = new Bd();
			$sql = 'SELECT * FROM eventos WHERE id='.$id;
			$evento = $bd->solicitud($sql)[0];
			template_header('Eventos');
			evento_show($evento);
			template_footer();
		}

		public function porTipo($tipo){
			$bd = new Bd();
			$sql = "SELECT name,fecha,descripcion,img FROM eventos WHERE tipo='".$tipo."'";
			$eventos = $bd->solicitud($sql);
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