<?php
    session_start();

    $conn = new mysqli('localhost', 'root', '', 'webcantantes');

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Genero Urbano</title>

		<!-- CSS EXTRA -->
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- CSS PRINCIPAL -->
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="cssJD.css">

	</head>

	<body>
		<div id="site-content">
			<header class="site-header">
				<div class="container">

					<!-- NUESTRO LOGO-->
					<a href="index.html" id="branding">
						<img style="width: 35%; height: 35%;" src="JixerDaude\image.png" alt="Site Title">
						<small style="text-align: center;" class="site-description"></small>
					</a>

					<!-- NUESTRO MENU -->
					
					<nav class="main-navigation">
						<button type="button" class="toggle-menu"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="1index.php">Inicio</a></li>
							<li class="menu-item "><a href="cantantes.php">Cantantes</a></li>
							<li class="menu-item"><a href="galeria.php">Galería</a></li>
							<li class="menu-item"><a href="videos.php">Videos</a></li>
							<li class="menu-item"><a href="noticias.php">Noticias</a></li>
							<li class="menu-item current-menu-item"><a href="encuestas.php">Encuestas</a></li>
							<li class="menu-item"><a href="tuperfil.php">Tu Perfil</a></li>
						</ul>
					</nav>
					<div class="mobile-menu"></div>
				</div>
			</header>

			<!-- ENCUESTAS CON INFO DINAMICA, GUARDAD EN AL BASE DE DATOS -->
			
			

		<!-- NUESTRO PIE DE PÁGINA PERSONALIZADO -->

		<footer class="site-footer">
				<div class="container">
					<img class="foto3-image"  src="JixerDaude\generourbano.png" alt="Género Urbano">
					
					<address>
						<p>Navalcarnero, Municipio en España <br>Teléfono: +34 970 69 13 27</a> <br>generourbano@drillings.es</a></p> 
					</address> 

					<p class="copy"><b>Copyright 2014 Company Name. Designed by "La Longa" . All right reserved</b></p>
				</div>
			</footer> 



		<script src="js/jquery-1.11.1.min.js"></script>		
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>

