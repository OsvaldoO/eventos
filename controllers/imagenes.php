<?php 
include ('views/images.php');
include('controllers/mysql.php');

class Imagenes{
	private $bd;

	public function __construct(){
		$this->bd = new Bd();
	}

	public function index(){
		$sql = "SELECT * FROM imagenes";
		$imagenes = $this->bd->solicitud($sql);
		template_header('Imagenes');
		imagen_list($imagenes);
		template_footer();
	}

	public function evento($id){
		$sql = "SELECT * FROM imagenes WHERE evento_id=".$id;
		$imagenes = $this->bd->solicitud($sql);
		template_header('Imagenes');
		imagen_list($imagenes);
		template_footer();
	}

	public function porTipo($tipo){
		
	}

}

$imagen = new Imagenes();
if(count($ACTION) > 1){
	if(is_numeric($ACTION[1])){
		$imagen->evento($ACTION[1]);
	}
	else{
		$imagen->tipo($ACTION[1]);
	}
}
else{ 
	$imagen->index();
}