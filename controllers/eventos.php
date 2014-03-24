<?php
	include('views/events.php');
	include('controllers/mysql.php');

	class Eventos{

		private $bd;

		public function __construct(){
			$this->bd = new Bd();
		}

		public function index(){
			$sql = 'SELECT name,fecha,descripcion,img FROM eventos';
			$eventos = $this->bd->solicitud($sql);
			template_header('Eventos');
			eventos_list($eventos);
			template_footer();
		}

		public function evento($id){
			$sql = 'SELECT * FROM eventos WHERE id='.$id;
			$evento = $this->bd->solicitud($sql)[0];
			template_header('Eventos');
			evento_show($evento);
			template_footer();
		}

		public function porTipo($tipo){
			$sql = "SELECT name,fecha,descripcion,img FROM eventos WHERE tipo='".$tipo."'";
			$eventos = $this->bd->solicitud($sql);
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