<?php

function template_header($title = '') {
header('Content-Type: text/html; charset=utf-8');
$$title = 'page1';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title ?></title>
<meta charset="utf-8">
<link rel="stylesheet" href="<?php echo URL_ROOT?>/css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo URL_ROOT?>/css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo URL_ROOT?>/css/style.css" type="text/css" media="all">
<script src="<?php echo URL_ROOT?>/js/jquery-1.6.js" ></script>
<script src="<?php echo URL_ROOT?>/js/cufon-yui.js"></script>
<script src="<?php echo URL_ROOT?>/js/cufon-replace.js"></script>
<script src="<?php echo URL_ROOT?>/js/NewsGoth_BT_400.font.js"></script>
<script src="<?php echo URL_ROOT?>/js/NewsGoth_BT_700.font.js"></script>
<?php if(isset($inicio)) { ?>
<script src="<?php echo URL_ROOT?>/js/script.js"></script>
<script src="<?php echo URL_ROOT?>/js/holder.js"></script>
<script src="<?php echo URL_ROOT?>/js/jcarousellite.js"></script>
<script src="<?php echo URL_ROOT?>/js/jquery.easing.1.3.js"></script>
<script src="<?php echo URL_ROOT?>/js/jquery.mousewheel.js"></script>
<?php } ?>
<script src="<?php echo URL_ROOT?>/js/atooltip.jquery.js"></script>
</head>
<body id="<?php echo $$title; ?>">
<div class="bg1">
  <div class="main">
    <!--header -->
    <header>
      <nav>
        <ul id="menu">
          <li class="<?php echo (isset($inicio))?'active':'';?>"><a href="<?php echo URL_ROOT?>inicio">Inicio</a></li>
          <li class="<?php echo (isset($eventos))?'active':'';?>"><a href="<?php echo URL_ROOT?>eventos">Eventos</a></li>
          <li class="<?php echo (isset($galeria))?'active':'';?>"><a href="<?php echo URL_ROOT?>galeria">Galeria</a></li>
          <li class="<?php echo (isset($invitados))?'active':'';?>"><a href="<?php echo URL_ROOT?>invitados">Invitados</a></li>
          <li class="<?php echo (isset($noticias))?'active':'';?>"><a href="<?php echo URL_ROOT?>noticias">Noticias</a></li>
          <li class="<?php echo (isset($contacto))?'active':'';?>"><a href="<?php echo URL_ROOT?>contacto">Contacto</a></li>
        </ul>
      </nav>
      <h1><a href="index.html" id="logo">nightclub feel the rhythm</a></h1>
    </header>
      <!--header end-->
    <div class="box">
<?php
} // template_header

function template_footer() {
?> 
<!--footer -->
      <footer>
          <div class="left"> <address>Nombre completo encrgado</br>
          		3333333333 | micorreo@gmail.com</address></br>
          </div>
         <ul class="right" id="icons">
                <li><a href="#" class="normaltip"><img src="<?php echo URL_ROOT?>/images/face.png" alt=""></a></li>
                <li><a href="#" class="normaltip"><img src="<?php echo URL_ROOT?>/images/yout.png" alt=""></a></li>
          </ul>
                    		<small class="center">Desarollo web <a class="link1" href='https://www.facebook.com/OsvaldOoLeOon'>Oosvaldo LeoOn</a></small>

      </footer>
      <!--footer end-->
    </div>
  </div>
</div>
</body>
</html>

<?php

	die(); 
	// NO legitimate reason to do ANYTHING after footer is output!

} // template_footer

function die404() {

	header('HTTP/1.1 404 Not Found');
	template_header('HTTP/1.1 404 Not Found');
	
	echo '
		<h2>Unable to find requested file</h2>
		<p>
			You attempted to access '.htmlspecialchars($_SERVER['REQUEST_URI']).'
			Which does not exist on this server.
		</p><p>
			Please access the <a href="',URL_ROOT,'">main page of this site</a> instead.
		</p>
	';
	
	template_footer();
	
} // die404

?>