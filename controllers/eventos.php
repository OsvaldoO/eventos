<?php
	include('views/events.php');
	include('models/Evento.php');

	class Eventos{

		public function index(){		
			eventos_list(Evento::getAll());
		}

		public function evento($id){
			evento_show(new Evento($id));
		}

		public function porTipo($tipo){
			eventos_list(Evento::getType($tipo));
		}

		public function pendientes(){
			eventos_list(Evento::getUncom());
		}
	}

$eventos = new Eventos();
template_header('eventos');
if(count($ACTION) > 1){
	$metodo = $ACTION[1];
	if(is_numeric($metodo)){
		$eventos->evento($metodo);
	}
	else if($metodo == 'proximos'){
		$eventos->pendientes();
	}
	else{
		$eventos->porTipo($metodo);
	}
}
else{ 
	$eventos->index();
}
template_footer();
?>