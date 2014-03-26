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
			$sql = "SELECT id, name, MONTH(fecha) as mes, DAY(fecha) as dia, descripcion, taquilla, prev, img FROM eventos WHERE fecha > NOW() ORDER BY fecha ASC LIMIT 1";
			$event = $this->bd->solicitud($sql)[0];
			$sql = "SELECT distinct i.nombre FROM invitados i INNER JOIN evento_invitado ei ON ( ei.id_evento = ".$event['id']." )";
			$invitados = $this->bd->solicitud($sql);
			var_dump($invitados);
			template_header('inicio');
			template_home($eventos, $event, $invitados);
			template_footer();
		}
	}

	$inicio = new Inicio();
	$inicio->index();
?>