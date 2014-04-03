<?php 
function eventos_list($eventos){
?>
<a href="<?php echo URL_ROOT?>eventos/nuevo">Nuevo</a><br/>
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

function evento_setImg($evento){
?>
<form action="<?php echo URL_ROOT?>img" method="POST" enctype="multipart/form-data">
  <label for="imagen">Imagen:</label>
  <input type="file" name="imagen" id="imagen" />
  <input type="submit" name="subir" value="Subir"/>
</form>
<?php 
}

function eventos_new($evento = null){
?>
	<article id="content">
    <div class="wrapper">
    	<div class="col3">
        	<h2>Nuevo Evento</h2>
      	</div>
      <form id="ContactForm" method="post" action="<?php echo URL_ROOT?>eventos/guardar">
        <div>
          <input name="id" type="hidden" value="<?php echo ($evento)?$evento->id:'';?>" >
          <div class="wrapper"> <label for="name">Nombre:</label>
            <input name="name" id="name" value="<?php echo ($evento)?$evento->name:'';?>" type="text" class="i_medio" >
          </div>
          <div class="wrapper"> <label for="fecha">Fecha:</label>
            <input id="fecha" name="fecha" type="date" value="<?php echo ($evento)?$evento->fecha:date('Y-m-d'); ?>" >
          </div>
          <div class="wrapper"> <label for="hini">Inicia:</label>
            <input id="hini" name="hini" type="time" value="<?php echo ($evento)?$evento->hini:'12:00';?>" >
            <label for="hfin">Finaliza:</label>
            <input id="hfin" name="hfin" type="time" value="<?php echo ($evento)?$evento->hfin:'12:00';?>">
          </div>
          <div class="wrapper"> <label for="lugar">Lugar:</label>
            <input name="lugar" id="lugar" type="text" value="<?php echo ($evento)?$evento->lugar:'';?>" class="i_medio" >
          </div>
          <div class="textarea_box"> <label for="invitados">Invitados:</label>
            <textarea name="invitados" id="invitados" cols="1" rows="1"><?php foreach ($evento->getMusic() as $invitado) {
              echo $invitado['nombre']."\n";
              } ?></textarea>
          </div>
          <div class="wrapper"> <label for="prev">Preventa:</label>
            <input id="prev" name="prev" type="text" value="<?php echo ($evento)?$evento->prev:'';?>">
            <label for="taq">Taquilla:</label>
            <input id="taq" name="taq" type="text" value="<?php echo ($evento)?$evento->taq:'';?>">
          </div>
          <div class="textarea_box"> <label for="descript">Detalles:</label>
            <textarea name="descrip" id="descript" cols="1" rows="1" ><?php echo ($evento)?$evento->descrip:'';?></textarea>
          </div>
          <div class="buttons"> <button type="submit" class="button">enviar</button> <button type="reset" class="button">limpiar</button> </div></div>
      </form>
    </div>
  </article>
<?php
}