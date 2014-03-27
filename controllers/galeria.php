<?php 
include ('views/images.php');
include('models/Evento.php');
include('models/Imagen.php');

class Imagenes{

	public function index(){
		template_header('Imagenes');
		imagen_list(Imagen::getAll());
		template_footer();
	}

	public function evento($id){
		$evento = new Evento($id);
		$images = (isset($evento->id))?$evento->getImages():null;
		template_header('Imagenes');
		imagen_list($images);
		template_footer();
	}

	public function porTipo($tipo){
		template_header('imagenes');
		imagen_list(Imagen::getType($tipo));
		template_footer();
	}
}

$imagen = new Imagenes();
if(count($ACTION) > 1){
	if(is_numeric($ACTION[1])){
		$imagen->evento($ACTION[1]);
	}
	else{
		$imagen->porTipo($ACTION[1]);
	}
}
else{ 
	$imagen->index();
}