<?php
	include_once('models/mysql.php');
	include('views/home.php');
	include('models/Evento.php');
		
	$event = new Evento();
	$event->getNext();
	template_header('inicio');
	template_home(Evento::getLast(),$event);
	template_footer();
?>