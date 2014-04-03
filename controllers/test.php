<?php
	include_once('models/mysql.php');
  	include('models/Evento.php');
  	include('models/Music.php');
	include('views/test.php');

	template_header('contacto');
	$evento = new Evento(2);
	$var = $evento->dropMusics();
	test($var);
	template_footer();
?>