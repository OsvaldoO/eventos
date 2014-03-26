<?php
function template_contact(){
?>
  <!--content -->
  <article id="content">
    <div class="wrapper">
    	<div class="col3">
        	<h2>Comunicate</h2>
        	<p>Comparte tus comentarios, quejas, sujerencias, dinos que grupos te gustaria encontrar en los eventos, Djs, tipo de musica.</br>
        		Si tienes algun grupo, eres Dj o realizas algun tipo de espectaculo dejanos conocerte para tenerte en cuenta en futuros eventos</p>
      	</div>
      <form id="ContactForm" action="#">
        <div>
          <div class="wrapper"> <span>Nombre:</span>
            <input type="text" class="input" >
          </div>
          <div class="wrapper"> <span>Correo:</span>
            <input type="text" class="input" >
          </div>
          <div class="wrapper"> <span>Asunto:</span>
            <input type="text" class="input" >
          </div>
          <div class="textarea_box"> <span>Mensaje:</span>
            <textarea name="textarea" cols="1" rows="1"></textarea>
          </div>
          <a href="#" class="button">enviar</a> <a href="#" class="button">limpiar</a> </div>
      </form>
    </div>
  </article>
  <!--content end-->
<?php 
}

?>