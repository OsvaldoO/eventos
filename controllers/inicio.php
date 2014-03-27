<?php
	include('views/home.php');
	include('models/Evento.php');
		
	$event= new Evento();
	template_header('inicio');
	template_home(Evento::getLast(), $event->getNext());
	template_footer();
?>