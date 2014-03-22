<?php
	include('views/events.php');
	class Eventos{
		public function inicio(){
			template_header('Eventos');
			eventos_index();
			template_footer();
		}

		public function listar(){
			template_header('Eventos');
			evento_show();
			template_footer();
		}
	}
	
	$evento = new Eventos();
	if(count($ACTION) > 1){
		$evento->$ACTION[1]();
	}
	else $evento->inicio();
?>