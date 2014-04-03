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
			foreach (explode("\n",$evento->invitados) as $mus) {
				if(strlen(trim($mus)) > 1){
					$musico = new Musico();
					$musico->nombre = $mus;
					$musico->clave = strtolower(trim(str_ireplace(array(' ','-','_','(',')'),'', $mus)));
					if(!Musico::exist($musico->clave)){
						$musico->create();
					}
					$evento->setMusic($musico->clave);
				}
			}
		}

		public function crear($evento){

		}

		public function editar($evento){

		}

		public function guardar(){
			$evento = new Evento();
			if (isset($_POST['id'])){
			foreach ($_POST as $campo => $value) {
					$evento->$campo = $value;
				}
			$evento->tipo = "otros";
			$evento->img = "default.jpg";
				if($evento->id == ''){
					$evento->create();
					mkdir("/var/www/eventos/images/events/".$evento->id, 0777);
				}
				else {
					$evento->update();
					$evento->dropMusics();
				}
				$this->AddMusicos($evento);
				header('Location: '.URL_ROOT.'eventos/'.$evento->id);			
			}
		}
	}

$eventos = new Eventos();
template_header('eventos');
if(count($ACTION) > 1){
	$metodo = $ACTION[1];
	if(is_numeric($metodo)){
		if(isset($ACTION[2])){
			switch ($ACTION[2]) {
			case 'img':
				evento_setImg($metodo);
				break;
			case 'editar':
				eventos_new(new Evento($metodo));
				break;
			default:
				die404();
				break;
			}	
		}
		else
			$eventos->evento($metodo);
	}
	else{
		switch ($metodo) {
			case 'proximos':
				$eventos->pendientes();
				break;
			case 'nuevo':
				eventos_new();
				break;
			case 'guardar':
				$eventos->guardar();
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