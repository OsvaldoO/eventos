<?php
function template_home($ultimos, $event){
	$mes = array(1 => 'Enero' ,2 => 'Febrero' ,3 => 'Marzo' ,4 => 'Abril' ,5 => 'Mayo' ,6 => 'Junio' ,7 => 'Julio' ,8 => 'Agosto' ,9 => 'Septiembre' ,10 => 'Octubre' ,11 => 'Noviembre' ,12 => 'Diciembre');
?>
	<!--content -->
      <article id="content">
        <div class="wrapper pad_bot1">
          <section class="col1">
            <h2 id="welcom">Sobre Nosotros!</h2>
            <p class="color1">Informacion de la web, Informacion de la web, Informacion de la web, Informacion de la web ,Informacion de la web ,Informacion de la web ,Informacion de la web ,Informacion de la web</p>
            <p class="pad_bot1">Informacion de la web, Informacion de la web, Informacion de la web, Informacion de la web,Informacion de la web, Informacion de la web, Informacion de la web,Informacion de la web,Informacion de la web</p>
           </section>
          <section class="col1 pad_left1">
            <h2>Ultimos Eventos</h2>
            <div id="gallery1">
              <ul>
              <?php 
              	foreach ($ultimos as $evento) {
              		echo '<li> <span class="dropcap_1">'.$evento['dia'].'<span>'.$mes[$evento['mes']].'</span></span>';
                  	echo '<p><span class="color1">'.$evento['name'].'</span><br>';
                    echo $evento['descrip'].'</br>';
                    echo '<a href="'.URL_ROOT.'eventos/'.$evento['id'].'" class="link1 right">Ver detalles</a></p></li>';
              	}
              	?>
              </ul>
            </div>
            <a href="#" class="next"></a> <a href="#" class="prev"></a> </section>
        </div>
        <div class="wrapper">
          <h2>Proximo Evento</h2>
          <div class="wrapper">
            <figure class="left marg_right1"><a href="#"><img class="fit" src="images/<?php echo $event->img;?>" alt=""></a></figure>
            <h3><?php echo $event->name; ?></h3>
            <?php echo $event->fecha;?>
            <p class="pad_bot1 detalles"><?php echo $event->descrip; ?></p>
            contamos con la precencia de:
            <ul class="list1 pad_bot1">
            	<?php foreach ($event->getMusic() as $invitado) {
            		echo '<li><a href="'.URL_ROOT.'invitados">'.$invitado['nombre'].'</a></li>';
            	} ?>
            </ul>
            <p class="color1"> <?php echo $event->lugar;?></p>
            <p>Preventa <?php echo $event->prev;?>$ </br>
            Taquilla <?php echo $event->taq;?>$ </p>
          </div>
        </div>
      </article>
      <!--content end-->
<?php 
}

?>