<?php
function imagen_list($imagenes){
?>
      <article id="content">
        <div class="wrapper">
          <h2>Rnb Party Gallery</h2>
          <dl class="folio">
            <dt> <img src="images/gallery_big_img1.jpg" alt="" id="img1"> <img src="images/gallery_big_img2.jpg" alt="" id="img2"> <img src="images/gallery_big_img3.jpg" alt=""  class="active" id="img3"> <img src="images/gallery_big_img4.jpg" alt="" id="img4"> <img src="images/gallery_big_img5.jpg" alt="" id="img5"> <img src="images/gallery_big_img6.jpg" alt="" id="img6"> <img src="images/gallery_big_img7.jpg" alt="" id="img7"> <img src="images/gallery_big_img8.jpg" alt="" id="img8"> <img src="images/gallery_big_img9.jpg" alt="" id="img9"> </dt>
            <dd>
              <ul class="marg_right1">
                <li><a href="#img1"><img src="images/gallery_img1.jpg" alt="" width="260" height="171"></a></li>
                <li><a href="#img2"><img src="images/gallery_img2.jpg" alt="" width="260" height="171"></a></li>
                <li><a href="#img3"><img src="images/gallery_img3.jpg" alt="" width="260" height="171"></a></li>
              </ul>
              <ul class="marg_right1">
                <li><a href="#img4"><img src="images/gallery_img4.jpg" alt="" width="260" height="171"></a></li>
                <li><a href="#img5"><img src="images/gallery_img5.jpg" alt="" width="260" height="171"></a></li>
                <li><a href="#img6"><img src="images/gallery_img6.jpg" alt="" width="260" height="171"></a></li>
              </ul>
              <ul>
                <li><a href="#img7"><img src="images/gallery_img7.jpg" alt="" width="260" height="171"></a></li>
                <li><a href="#img8"><img src="images/gallery_img8.jpg" alt="" width="260" height="171"></a></li>
                <li><a href="#img9"><img src="images/gallery_img9.jpg" alt="" width="260" height="171"></a></li>
              </ul>
            </dd>
          </dl>
        </div>
      </article>
							<?php /*
							if($imagenes){
								foreach ($imagenes as $imagen) {
									echo $imagen['src'];
									echo $imagen['desc'];
								}
							}
							else echo '<h1>No hay imagenes</h1>';*/
}
