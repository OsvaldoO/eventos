<?php
function video_list($videos){
?>
<section id="content">
				<div class="main">
					<div class="content-padding-2">
						<div class="container_12">
							<div class="wrapper">
							<?php
							if($videos){
								foreach ($videos as $video) {
									echo $video['src'];
									echo $video['desc'];
								}
							}
							else echo '<h1>No hay Videos</h1>';
}
