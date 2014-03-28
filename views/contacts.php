<?php
function template_contact(){
?>
  <!--content -->
  <article id="content">
    <div class="wrapper">
    	<div class="col3">
        	<h2>Comunicate</h2>
        	<p class="detalles">Comparte tus comentarios, quejas, sujerencias, dinos que grupos te gustaria encontrar en los eventos, Djs, tipo de musica. Si tienes algun grupo, eres Dj o realizas algun tipo de espectaculo dejanos conocerte para tenerte en cuenta en futuros eventos</p>
      	</div>
      <form id="ContactForm" action="#">
        <div>
          <div class="wrapper"> <label>Nombre:</label>
            <input type="text" class="input" >
          </div>
          <div class="wrapper"> <label>Correo:</label>
            <input type="text" class="input" >
          </div>
          <div class="wrapper"> <label>Asunto:</label>
            <input type="text" class="input" >
          </div>
          <div class="textarea_box"> <label>Mensaje:</label>
            <textarea name="textarea" cols="1" rows="1"></textarea>
          </div>
          <div class="buttons"><button class="button">enviar</button> <button class="button">limpiar</button> </div></div>
      </form>
    </div>
  </article>
  <!--content end-->
<?php 
}

?>