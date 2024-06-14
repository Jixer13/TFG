<?php
    session_start();

    // Inicias la sesión para poder acceder a las variables de sesión
    // Solo necesitas llamar session_start() una vez
    // Verifica si se han enviado datos mediante POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verifica si el campo "nombre" está establecido en el formulario
        if (isset($_POST["username"])) {
            $_SESSION['username'] = $_POST["username"];
            // Asigna el nombre de usuario a $_SESSION['username'] solo si se ha enviado en el formulario
            $username = $_SESSION['username'];
        }
    } else {
        // Si no hay datos POST, obtén el nombre de usuario de la sesión
        if (isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
        } else {
            // Si no hay nombre de usuario en la sesión, establece un valor predeterminado
            $username = "Tu Perfil"; 
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>About Us| Band Template</title>
		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="cssJD.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>

	<body>
		
		<div id="site-content">
			<header class="site-header">
				<div class="container">
					<a href="index.html" id="branding">
						<img style="width: 35%; height: 35%;" src="JixerDaude\image.png" alt="Site Title">
						<small style="text-align: center;" class="site-description"></small>
					</a> <!-- #branding -->
					
					<nav class="main-navigation">
						<button type="button" class="toggle-menu"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="1index.php">Inicio</a></li>
							<li class="menu-item"><a href="cantantes.php">Cantantes</a></li>
							<li class="menu-item"><a href="galeria.php">Galería</a></li>
							<li class="menu-item"><a href="videos.php">Videos</a></li>
							<li class="menu-item current-menu-item"><a href="noticias.php">Noticias</a></li>
							<li class="menu-item"><a href="encuestas.php">Encuestas</a></li>
						</ul> <!-- .menu -->
					</nav> <!-- .main-navigation -->
					<div class="mobile-menu"></div>
				</div>
			</header> <!-- .site-header -->
			
			<main class="main-content">
				<div class="fullwidth-block inner-content">
					<div class="container">
						<div class="row">
							<div class="col-md-7">
								<div class="content">
									<h2 class="entry-title">Noticias Recientes</h2>

									<div class="post">
										<div class="entry-date">
											<div class="date">23</div>
											<span class="month">Jun</span>
										</div>
										<div class="featured-image">
											<img src="JixerDaude\RBF.png" alt="">
										</div>
										<h2 class="entry-title"><a href="#">RBF MADRID 20 & 21 DE JULIO 2024 LA CAJA MÁGICA </a></h2>
										<p>Este verano podremos disfrutar del festival más importante de reggeaton de España en Madrid, con artistas de talla mundial como Anuel, Bryant Mayers, Noriel... Y MUCHOS MÁS!!!</p>
									</div>
									
									<div class="post">
										<div class="entry-date">
											<div class="date">21</div>
											<span class="month">JuL</span>
										</div>

										<div class="featured-image">
											<img src="JixerDaude\concierto.png" alt="">
										</div>
										<h2 class="entry-title"><a href="#">Holika festival 2024 en La Rioja</a></h2>
										<p>Holika Festival nos traerá una gran variedad de cantantes con unos estilos muy diferentes, destacan grandes artista como Bryant Mayers, Jhaycortez y Tainy</p>
									</div>

									<div class="post">
										<div class="entry-date">
											<div class="date">10</div>
											<span class="month">Jun</span>
										</div>
										<div class="featured-image">
											<img src="JixerDaude\conciertoJonz.png" alt="">
										</div>
										<h2 class="entry-title"><a href="#">Gira de Jon Z en España</a></h2>
										<p>Jon Z dará una gira por toda España este verano, incluyen muchas ciudades entre las que se encuentran Madrid, Barcelona, Sevilla...</p>
									</div>

									<div class="post">
										<div class="entry-date">
											<div class="date">22</div>
											<span class="month">Sep</span>
										</div>
										<div class="featured-image">
											<img src="JixerDaude\conciertohades66.png" alt="">
										</div>
										<h2 class="entry-title"><a href="#">Concierto de Hades66 en Shoko</a></h2>
										<p>Hades dará su primer concierto en España en la discote del centro de Madrid este próximo 22 de septiembre</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

							
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
>