<?php
	include_once('models/mysql.php');
	include('views/events.php');
	include('models/Evento.php');
	include('models/Music.php');

	class Eventos{

		public function index(){		
			eventos_list(Evento::getAll());
		}

		public function evento($id){
			eventos_show(new Evento($id));
		}

		public function porTipo($tipo){
			eventos_list(Evento::getType($tipo));
		}

		public function pendientes(){
			eventos_list(Evento::getUncom());
		}

		private function addMusicos($evento){
			foreach (explode(".",$evento->invitadosd) as $mus) {
				$musico = new Musico();
				$musico->name = $mus;
				$musico->clave = strtolower(str_ireplace(' ','', $mus));
				$musico->create();
				$evento->setMusic($musico->clave);
			}
		}

		public function crear(){
			$evento = new Evento();
			if (isset($_POST['name'])){
				foreach ($_POST as $campo => $value) {
					$evento->$campo = $value;
				}
				$evento->tipo = "otros";
				$evento->img = "default.jpg";
				$evento->create();
				$evento->AddMusicos($evento);
				//header('Location: '.URL_ROOT.'eventos/'.$evento->id);			
			}
			else{
				eventos_new();	
			}
		}
	}

$eventos = new Eventos();
template_header('eventos');
if(count($ACTION) > 1){
	$metodo = $ACTION[1];
	if(is_numeric($metodo)){
		$eventos->evento($metodo);
	}
	else{
		switch ($metodo) {
			case 'proximos':
				$eventos->pendientes();
				break;
			case 'nuevo':
				$eventos->crear();
				break;
			default:
				$eventos->porTipo($metodo);
				break;
		}
	}
}
else{ 
	$eventos->index();
}
template_footer();
?>