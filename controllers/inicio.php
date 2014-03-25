<?php
	include('views/home.php');
	include('controllers/mysql.php');
	/**
	* 
	*/
	class Inicio{
		private $bd;
		
		function __construct(){
			$this->bd = new Bd();
		}

		function index(){
			$sql = "SELECT name,MONTH(fecha) as mes,DAY(fecha) as dia,descripcion FROM eventos WHERE fecha < NOW()";
			$eventos = $this->bd->solicitud($sql);
			/*foreach ($eventos as $key => $evento) {
				$ultimos[$key]['name'] = $evento['name'];
				$ultimos[$key]['dia'] = $evento['dia'];
				$ultimos[$key]['mes'] = $evento['mes'];
				$ultimos[$key]['desc'] = $evento['desc'];
			}*/
			template_header('inicio');
			template_home($eventos);
			template_footer();
		}
	}

	$inicio = new Inicio();
	$inicio->index();
?>