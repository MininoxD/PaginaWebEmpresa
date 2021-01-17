<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="Sitio de consultoria">  
  	<meta name="author" content="[Luis Atencio Verastegui]"> 
	<title>Consultoria</title>

	<link href='http://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Dosis:500' rel='stylesheet' type='text/css'>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="./js/responsiveslides.min.js"></script>
	<script src="./js/script.js"></script>
	<link rel="stylesheet" href="./css/responsiveslides.css">
	<script>
  		$(function() {
    	$(".rslides").responsiveSlides();
  		});
  		function Color(){
  		}
	</script>
	<link rel="stylesheet" type="text/css" href="./css/modelado.css">
</head>
<body>
	<header id="header" class="">
		<div id="logo" class="base">
			<img src="./img/logo.png" alt="" width="250px" height="130px">
		</div>
		
		<div id="navega">
			<nav class="base">
			<div id="pasco"><p>Pasco</p></div>
				<ul>
						
						<li><a href="./tres.php" title="" id="cambia">CONTACTO</a></li>
						<li><a href="./dos.php" title="" id="cambia1">SERVICIOS</a></li>
						<li><a href="./cuatro.php" title="" id="cambia2">NOSOTROS</a></li>
						<li><a href="./index.php" title="" id="cambia3">INICIO</a></li>
						
				</ul>
			<div id="peru"><p>Peru</p></div>
			</nav>
		</div>

		<div class="base" id="galeria">
			<ul class="rslides" id="slider">
  				<li><img src="./fotos/slide_00.jpg" title="Funky roots" /><p class="caption">Imagen uno de prueba </p></li>
  				<li><img src="./fotos/slide_01.jpg" title="The long and winding road" /> <p class="caption">Imagen dos de prueba</p></li>
  				<li><img src="./fotos/slide_02.jpg" title="Happy trees" /><p class="caption">Imagen tres de Peueba </p></li>
			</ul>
		</div>
	</header>