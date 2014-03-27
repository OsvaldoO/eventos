<?php 
include ('views/galery.php');
include('models/Evento.php');
include('models/Galeria.php');

class Galery{

	public function index(){
		imagen_list(Galeria::getAll());
	}

	public function evento($id){
		$evento = new Evento($id);
		$images = (isset($evento->id))?$evento->getImages():null;
		imagen_list($images);
	}

	public function porTipo($tipo){
		imagen_list(Galeria::getType($tipo));
	}
}

$galery = new Galery();
template_header('galeria');
if(count($ACTION) > 1){
	if(is_numeric($ACTION[1])){
		$galery->evento($ACTION[1]);
	}
	else{
		$galery->porTipo($ACTION[1]);
	}
}
else{ 
	$galery->index();
}
template_footer();