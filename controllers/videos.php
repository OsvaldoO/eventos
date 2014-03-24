<?php 
include ('views/videos.php');
class Videos{
	public function index(){

	}

	public function evento($id){

	}

	public function porTipo($tipo){

	}

}

$video = new Videos();
if(count($ACTION) > 1){
	if(is_numeric($ACTION[1])){
		$video->evento($ACTION[1]);
	}
	else{
		$video->tipo($ACTION[1]);
	}
}
else{ 
	$video->all();
}