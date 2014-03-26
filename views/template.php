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
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
<script src="js/jquery-1.6.js" ></script>
<script src="js/cufon-yui.js"></script>
<script src="js/cufon-replace.js"></script>
<script src="js/NewsGoth_BT_400.font.js"></script>
<script src="js/NewsGoth_BT_700.font.js"></script>
<?php if(isset($inicio)) { ?>
<script src="js/script.js"></script>
<script src="js/jcarousellite.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.mousewheel.js"></script>
<?php } ?>
<script src="js/atooltip.jquery.js"></script>
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
          <li class="<?php echo (isset($contacto))?'active':'';?>"><a href="<?php echo URL_ROOT?>contacto">Contactos</a></li>
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
        <div class="line1">
          <div class="line2 wrapper">
            <div class="icons">
              <h4>Buscanos</h4>
              <ul id="icons">
                <li><a href="#" class="normaltip"><img src="images/face.png" alt=""></a></li>
                <li><a href="#" class="normaltip"><img src="images/twi.png" alt=""></a></li>
                <li><a href="#" class="normaltip"><img src="images/yout.png" alt=""></a></li>

              </ul>
              <!-- {%FOOTER_LINK} -->
            </div>
            <div class="info">
              <h4>About Us</h4>
              <ul>
                <li><a href="#">Club Info</a></li>
                <li><a href="#">Music</a></li>
                <li><a href="#">DJ Sets</a></li>
                <li><a href="#">News</a></li>
              </ul>
            </div>
            <div class="info">
              <h4>Join In</h4>
              <ul>
                <li><a href="#">Sign In</a></li>
                <li><a href="#">Forums</a></li>
                <li><a href="#">Promotions</a></li>
              </ul>
            </div>
            <div class="phone">
              <h4>Order Tickets</h4>
              <p>Free Phone<span>8-800-123-NIGHT</span></p>
            </div>
          </div>
          Atemajac de Brizuela 2014 &copy; | Web Name </a></div>
      </footer>
      <!--footer end-->
    </div>
  </div>
</div>
<div align=center>Desarollado por <a href='https://www.facebook.com/OsvaldOoLeOon'>Oosvaldo LeoOn</a></div></body>
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