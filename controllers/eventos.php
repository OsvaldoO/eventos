<?php
	include('views/events.php');
	include('models/Evento.php');

	class Eventos{

		public function index(){
			template_header('eventos');
			eventos_list(Evento::getAll());
			template_footer();
		}

		public function evento($id){
			template_header('eventos');
			evento_show(new Evento($id));
			template_footer();
		}

		public function porTipo($tipo){
			template_header('eventos');
			eventos_list(Evento::getType($tipo));
			template_footer();
		}

		public function pendientes(){
			template_header('Eventos');
			eventos_list(Evento::getUncom());
			template_footer();
		}
	}

$evento = new Eventos();
if(count($ACTION) > 1){
	$metodo = $ACTION[1];
	if(is_numeric($metodo)){
		$evento->evento($metodo);
	}
	else if($metodo == 'proximos'){
		$evento->pendientes();
	}
	else{
		$evento->porTipo($metodo);
	}
}
else{ 
	$evento->index();
}
?>