<?php 
include ('views/videos.php');
include('controllers/mysql.php');

class Videos{
	private $bd;

	public function __construct(){
		$this->bd = new Bd();
	}

	public function index(){
		$sql = "SELECT * FROM videos";
		$videos = $this->bd->solicitud($sql);
		template_header('Videos');
		video_list($videos);
		template_footer();
	}

	public function evento($id){
		$sql = "SELECT * FROM videos WHERE evento_id=".$id;
		$videos = $this->bd->solicitud($sql);
		template_header('Videos');
		video_list($videos);
		template_footer();
	}

	public function porTipo($tipo){
		$sql = "SELECT * FROM videos as v, eventos as e WHERE v.evento_id = e.id AND e.tipo ='".$tipo."'";
		$videos = $this->bd->solicitud($sql);
		template_header('Videos');
		video_list($videos);
		template_footer();
	}

}

$video = new Videos();
if(count($ACTION) > 1){
	if(is_numeric($ACTION[1])){
		$video->evento($ACTION[1]);
	}
	else{
		$video->porTipo($ACTION[1]);
	}
}
else{ 
	$video->index();
}