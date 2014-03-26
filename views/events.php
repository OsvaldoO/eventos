<?php 
function eventos_list($eventos){
?>
<!--==============================content================================-->
<!--content -->
      <article id="content">
        <div class="wrapper">
          <h2>Upcoming Parties</h2>
          <div class="wrapper">
            <div class="cols marg_right1">
              <figure class="pad_bot1"><a href="#"><img src="images/page2_img1.jpg" alt=""></a></figure>
            </div>
            <div class="cols marg_right1">
              <figure class="pad_bot1"><a href="#"><img src="images/page2_img3.jpg" alt=""></a></figure>
              <figure><a href="#"><img src="images/page2_img4.jpg" alt=""></a></figure>
            </div>
            <div class="cols">
              <figure class="pad_bot1"><a href="#"><img src="images/page2_img5.jpg" alt=""></a></figure>
            </div>
          </div>
        </div>
      </article>
      <!--content end-->
							<?php /*
							if($eventos){
								foreach ($eventos as $evento) {
									echo $evento['name'];
									echo $evento['fecha'];
									echo $evento['descripcion'];
									echo $evento['img'];
								}
							}
							else echo '<h1>No hay Eventos</h1>';
							*/ ?>
<!--==============================footer=================================-->
<?php
}

function evento_show($evento){
?>
<!--==============================content================================-->
<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com. November 21, 2011!</div>
				<div class="main">
					<div class="content-padding-2">
						<div class="container_12">
							<div class="wrapper">
									<?php
									if($evento){
										echo $evento['name'];
										echo $evento['fecha'];
										echo $evento['descripcion'];
										echo $evento['img'];
									}
									else{
										echo '<h2>Evento no encontrado</h2>';
									}
									?>
<?php 
}