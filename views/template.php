<?php

function template_header($pageTitle = '') {
	header('Content-Type: text/html; charset=utf-8');?>

<!DOCTYPE html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content="Eventos Atemajac de brizuela" />
	<meta name="author" content="Osvaldo León"/>
	<meta name="keywords" content="web, eventos, atemajac, brizuela, musica"/>
	<meta http-equiv="Content-Language" content="es"/>
	<meta name="viewport" content="width=device-width; initial-scale=1.0" />
	<link rel="stylesheet" href="<?php echo URL_ROOT?>/css/reset.css" type="text/css" media="screen">
	<link rel="stylesheet" href="<?php echo URL_ROOT?>/css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="<?php echo URL_ROOT?>/css/grid.css" type="text/css" media="screen">
	<script src="<?php echo URL_ROOT?>/js/jquery-1.6.3.min.js" type="text/javascript"></script>
	<script src="<?php echo URL_ROOT?>/js/cufon-yui.js" type="text/javascript"></script>
	<script src="<?php echo URL_ROOT?>/js/cufon-replace.js" type="text/javascript"></script>
	<script src="<?php echo URL_ROOT?>/js/Vegur_700.font.js" type="text/javascript"></script>
	<script src="<?php echo URL_ROOT?>/js/Vegur_400.font.js" type="text/javascript"></script> 
	<script src="<?php echo URL_ROOT?>/js/FF-cash.js" type="text/javascript"></script> 
	<script src="<?php echo URL_ROOT?>/js/script.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/easyTooltip.js"></script>		
	<title>	<?php echo empty($pageTitle) ? '' : $pageTitle; ?></title>
	</head>
	<body id="page1">
		<div class="extra">
			<header>
				<div class="main">
					<div class="bg-1">
						<h1><a href="index.html">Eventos ATM</a></h1>
					</div>
					<nav>
						<div class="menu-bg-tail">
							<div class="menu-bg">
								<div class="container_12">
									<div class="grid_12">
										<ul class="menu">
											<li class="item"><a class="active" href="<?php echo URL_ROOT?>inicio">Inicio</a></li>
											<li><a href="<?php echo URL_ROOT?>eventos">Eventos</a></li>
											<li><a href="<?php echo URL_ROOT?>imagenes">Imagenes</a></li>
 											<li class="item-1"><a href="<?php echo URL_ROOT?>videos">Videos</a></li>
											<li class="last"><a href="<?php echo URL_ROOT?>contacto">Contactanos</a></li>
										</ul>
										<div class="clear"></div>
									</div>
									<div class="clear"></div>
								</div>
							</div>
						</div>
					</nav>
				</div>
			</header>
	<?php
} // template_header

function template_footer() {
?>
		<footer>
			<div class="main">
				<div class="footer-bg">
					<div class="container_12">
						<div class="wrapper">
							<div class="grid_12">
								<div class="footer-padding">
									<div class="wrapper">
										<span class="footer-link"><span>Superior.com &copy; 2011</span> <a rel="nofollow" target="_blank" class="link" href="http://www.templatemonster.com/">Website Template</a> by TemplateMonster.com</span>
										<ul class="list-services">
											<li><a class="tooltips n-1" title="Twitter" href="#"></a></li>
											<li><a class="tooltips n-2" title="Facebook" href="#"></a></li>
											<li class="last"><a class="tooltips n-3" title="Youtube" href="#"></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<script type="text/javascript"> Cufon.now(); </script>
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