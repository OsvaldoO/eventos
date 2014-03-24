<?php 
function eventos_list($eventos){
?>
<!--==============================content================================-->
<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com. November 21, 2011!</div>
				<div class="main">
					<div class="content-padding-2">
						<div class="container_12">
							<div class="wrapper">
							<?php
							if($eventos){
								foreach ($eventos as $evento) {
									echo $evento['name'];
									echo $evento['fecha'];
									echo $evento['descripcion'];
									echo $evento['img'];
								}
							}
							else echo '<h1>No hay Eventos</h1>';
							 ?>
						 </div>
						</div>
					</div>
				</div>
				<div class="block"></div>
			</section>
		</div>
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
						 	</div>
						</div>
					</div>
				</div>
				<div class="block"></div>
			</section>
		</div>
<!--==============================footer=================================-->
<?php 
}