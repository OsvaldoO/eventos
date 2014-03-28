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
                    echo '<a href="#" class="link1 right">Ver detalles</a></p></li>';
              	}
              	?>
              </ul>
            </div>
            <a href="#" class="next"></a> <a href="#" class="prev"></a> </section>
        </div>
        <div class="wrapper">
          <h2>Proximo Evento</h2>
          <div class="wrapper">
            <figure class="left marg_right1"><a href="#"><img src="images/<?php echo $event->img;?>" alt=""></a></figure>
            <h3><?php echo $event->name; ?></h3>
            <p class="pad_bot1"><?php echo $event->descrip; ?></p>
            <ul class="list1 pad_bot1">
            	<?php foreach ($event->getMusic() as $invitado) {
            		echo '<li><a href="#"></a>'.$invitado['nombre'].'</li>';
            	} ?>
            </ul>
            <p> <?php echo $event->prev;?> </p>
          </div>
        </div>
      </article>
      <!--content end-->
<?php 
}

?>