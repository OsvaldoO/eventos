<?php
function imagen_list($imagenes){
?>
<section id="content">
				<div class="main">
					<div class="content-padding-2">
						<div class="container_12">
							<div class="wrapper">
							<?php
							if($imagenes){
								foreach ($imagenes as $imagen) {
									echo $imagen['src'];
									echo $imagen['desc'];
								}
							}
							else echo '<h1>No hay imagenes</h1>';
}
