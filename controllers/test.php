<?php
	include_once('models/mysql.php');
  	include('models/Evento.php');
  	include('models/Music.php');
	include('views/test.php');
	
	function addMusicos($musicos){
			foreach (explode(".",$musicos) as $mus) {
				$musico = new Musico();
				$musico->nombre = $mus;
				$musico->clave = strtolower(str_ireplace(' ','', $mus));
				$musico->create();
			}
		}

	template_header('contacto');
	$var = addMusicos("Arrolladora.Pakita la del barrio");
	test($var);
	template_footer();
?>