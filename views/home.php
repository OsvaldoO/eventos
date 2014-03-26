<?php
function template_home($ultimos){
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
                    echo $evento['descripcion'].'</br>';
                    echo '<a href="#" class="link1 right">Ver detalles</a></p></li>';
              	}
              	?>
              </ul>
            </div>
            <a href="#" class="next"></a> <a href="#" class="prev"></a> </section>
        </div>
        <div class="wrapper">
          <h2>Next Party</h2>
          <div class="wrapper">
            <figure class="left marg_right1"><a href="#"><img src="images/banner1.jpg" alt=""></a></figure>
            <h3>Best RNB from Europe</h3>
            <p class="pad_bot1">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo:</p>
            <ul class="list1 pad_bot1">
              <li><a href="#">Ut enim ad minima veniam, quis nostrum exercitationem ullam</a></li>
              <li><a href="#">Quis autem vel eum iure reprehenderit qui in voluptate</a></li>
              <li><a href="#">Velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum</a></li>
              <li><a href="#">Fugiat quo voluptas nulla pariatur lorem ipsum dolor sit amet</a></li>
            </ul>
            <p>Inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate voluptatem quia voluptas sit aspernatur.</p>
          </div>
        </div>
      </article>
      <!--content end-->
<?php 
}

?>