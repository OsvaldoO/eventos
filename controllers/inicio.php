<?php
	include('views/home.php');
	include('models/Evento.php');
	/**
	* 
	*/
	class Inicio{

		function __construct(){
		}

		function index(){		
			$eventos  = Evento::getLast();
			$event= new Evento();
			$event->getNext();
			template_header('inicio');
			template_home($eventos, $event);
			template_footer();
		}
	}

	$inicio = new Inicio();
	$inicio->index();
?>