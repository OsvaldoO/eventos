<?php 
function eventos_list($eventos){
?>
<!--==============================content================================-->
<!--content -->
     <!-- <article id="content">
        <div class="wrapper">
          <h2>Upcoming Parties</h2>
          <div class="wrapper">
            <div class="cols marg_right1">
              <figure class="pad_bot1"><a href="#"><img src="images/page2_img1.jpg" alt=""></a></figure>
              <figure><a href="#"><img src="images/page2_img4.jpg" alt=""></a></figure>
            </div>
            <div class="cols marg_right1">
              <figure class="pad_bot1"><a href="#"><img src="images/page2_img3.jpg" alt=""></a></figure>
              <figure><a href="#"><img src="images/page2_img4.jpg" alt=""></a></figure>
            </div>
            <div class="cols">
              <figure class="pad_bot1"><a href="#"><img src="images/page2_img5.jpg" alt=""></a></figure>
              <figure><a href="#"><img src="images/page2_img4.jpg" alt=""></a></figure>
            </div>
          </div>
        </div>
      </article> -->
      <!--content end-->
							<?php 
							if($eventos){
								foreach ($eventos as $evento) {
									echo '<a href="'.URL_ROOT.'eventos/'.$evento["id"].'">'.$evento["name"].'</a></br>';
									echo $evento['fecha'].'</br></br>';
								}
							}
							else echo '<h1>No hay Eventos</h1>';
					?>

<!--==============================footer=================================-->
<?php
}

function eventos_show($evento){
?>
<!--==============================content================================-->
									<?php
									if(isset($evento->id)){
										echo $evento->name.'</br>';
										echo $evento->fecha.'</br>';
                    echo $evento->lugar.'</br>';
										echo $evento->descrip.'</br>';
										echo $evento->prev.'</br>';
									}
									else{
										echo '<h2>Evento no encontrado</h2>';
									}
									?>
<?php 
}

function eventos_addImg($evento){
?>
	<form action="processupload.php" method="post" enctype="multipart/form-data" id="MyUploadForm">
		<input name="ImageFile" id="imageInput" type="file" />
		<input type="submit"  id="submit-btn" value="Upload" />
		<img src="images/ajax-loader.gif" id="loading-img" style="display:none;" alt="Please Wait"/>
	</form>
	<div id="output"></div>
<?php 
}

function eventos_new(){
?>
	<article id="content">
    <div class="wrapper">
    	<div class="col3">
        	<h2>Nuevo Evento</h2>
      	</div>
      <form id="ContactForm" method="post" action="<?php echo URL_ROOT?>eventos/nuevo">
        <div>
          <div class="wrapper"> <label for="name">Nombre:</label>
            <input name="name" id="name" type="text" class="i_medio" >
          </div>
          <div class="wrapper"> <label for="fecha">Fecha:</label>
            <input id="fecha" name="fecha" type="date" value="<?php echo date('Y-m-d'); ?>" >
          </div>
          <div class="wrapper"> <label for="hini">Inicia:</label>
            <input id="hini" name="hini" type="time" value="12:00" >
            <label for="hfin">Finaliza:</label>
            <input id="hfin" name="hfin" type="time" value="12:00">
          </div>
          <div class="wrapper"> <label for="lugar">Lugar:</label>
            <input name="lugar" id="lugar" type="text" class="i_medio" >
          </div>
          <div class="textarea_box"> <label for="invitados">Invitados:</label>
            <textarea name="invitados" id="invitados" cols="1" rows="1"></textarea>
          </div>
          <div class="wrapper"> <label for="prev">Preventa:</label>
            <input id="prev" name="prev" type="text">
            <label for="taq">Taquilla:</label>
            <input id="taq" name="taq" type="text">
          </div>
          <div class="textarea_box"> <label for="descript">Detalles:</label>
            <textarea name="descrip" id="descript" cols="1" rows="1"></textarea>
          </div>
          <div class="buttons"> <button type="submit" class="button">enviar</button> <button type="reset" class="button">limpiar</button> </div></div>
      </form>
    </div>
  </article>
<?php
}