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
		
		<title>Gallery | Band Template</title>
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
							<li class="menu-item current-menu-item"><a href="videos.php">Videos</a></li>
							<li class="menu-item"><a href="noticias.php">Noticias</a></li>
							<li class="menu-item"><a href="encuestas.php">Encuestas</a></li>
						</ul> <!-- .menu -->
					</nav> <!-- .main-navigation -->
					<div class="mobile-menu"></div>
				</div>
			</header> <!-- .site-header -->
			
			<main class="main-content">
				<div class="fullwidth-block download">
					<div class="container">
						<div class="row">
							<div class="col-md-5">
								<h2 class="page-title">Musica</h2>

								<div class="item">
									<h3 class="item-title">Anuel AA - Na' Nuevo</h3>
									<span class="year">4:43 mins </span>
									<a href="https://github.com/Jixer13/TFG/blob/main/NaNuevo.mp3" class="button small primary">Descarga</a>
									<a href="https://www.youtube.com/watch?v=-0hWmeWqZWs" class="button small secondary" target="_blank">Reproducir</a>
								</div>

								<div class="item">
									<h3 class="item-title">POP SMOKE - DIOR</h3>
									<span class="year">2:52 mins</span>
									<a href="https://github.com/Jixer13/TFG/blob/main/Dior.mp3" class="button small primary">Descarga</a>
									<a href="https://youtu.be/oorVWW9ywG0?si=1ahex20Q_j66Vtk7" class="button small secondary" target="_blank">Reproducir</a>
								</div>

								<div class="item">
									<h3 class="item-title">King Von - Took Her To The O</h3>
									<span class="year">3:29 mins</span>
									<a href="https://github.com/Jixer13/TFG/blob/main/TookHerToTheO.mp3" class="button small primary">Descarga</a>
									<a href="https://youtu.be/hzt31eJTGxo?si=DIItusAiEI8vsxZz" class="button small secondary" target="_blank">Reproducir</a>
								</div>

								<div class="item">
									<h3 class="item-title">Anuel  - La 2blea</h3>
									<span class="year">5:27 mins</span>
									<a href="https://github.com/Jixer13/TFG/blob/main/La2blea.mp3" class="button small primary">Descarga</a>
									<a href="https://youtu.be/i9NgiuSPN_k?si=TrYjy7YbsrofBrwa" class="button small secondary" target="_blank">Reproducir</a>
								</div>

								<div class="item">
									<h3 class="item-title">Kidd Keo - Moon Talk</h3>
									<span class="year">3:08 mins</span>
									<a href="https://github.com/Jixer13/TFG/blob/main/MoonTalk.mp3" class="button small primary">Descarga</a>
									<a href="https://www.youtube.com/watch?v=flMNxME0Bz0" class="button small secondary" target="_blank">Reproducir</a>
								</div>

							</div>
							<div class="col-md-5 col-md-push-2">
								<br><br><br><br>
								
								<div class="item">
									<h3 class="item-title">Anuel AA - Anuel & Emmanuel</h3>
									<span class="year">4:38 mins</span>
									<a href="https://github.com/Jixer13/TFG/blob/main/Anuel%26Emmanuel.mp3" class="button small primary">Descarga</a>
									<a href="https://youtu.be/i9NgiuSPN_k?si=TrYjy7YbsrofBrwa" class="button small secondary" target="_blank">Reproducir</a>
								</div>

								<div class="item">
									<h3 class="item-title">Bryant Mayers - Como Panas</h3>
									<span class="year">3:19 mins</span>
									<a href="https://github.com/Jixer13/TFG/blob/main/ComoPanas.mp3" class="button small primary">Descarga</a>
									<a href="https://youtu.be/J06Kb62MvlI?si=YISrBlHrWBK5-qga" class="button small secondary" target="_blank">Reproducir</a>
								</div>

								<div class="item">
									<h3 class="item-title">Jon Z - Super Jon Z</h3>
									<span class="year">8:06 mins</span>
									<a href="https://github.com/Jixer13/TFG/blob/main/SuperJonZ.mp3" class="button small primary">Descarga</a>
									<a href="https://youtu.be/J-WZG4xDO2g?si=i9y1tDzrnxIbvejW" class="button small secondary" target="_blank">Reproducir</a>
								</div>

								<div class="item">
									<h3 class="item-title">Ele A El Dominio - Hace Mucho Tiempo</h3>
									<span class="year">5:00 mins</span>
									<a href="https://github.com/Jixer13/TFG/blob/main/HaceMuchoTiempo.mp3" class="button small primary">Descarga</a>
									<a href="https://youtu.be/gK247dFxEt0?si=Q1tV0IZjsj55AU9W" class="button small secondary" target="_blank">Reproducir</a>
								</div>

								<div class="item">
									<h3 class="item-title">KIDD KEO - Dracukeo</h3>
									<span class="year">2:36 mins</span>
									<a href="https://github.com/Jixer13/TFG/blob/main/Dracukeo.mp3" class="button small primary">Descarga</a>
									<a href="https://www.youtube.com/watch?v=A_fCv76c4uQ" class="button small secondary" target="_blank">Reproducir</a>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- .testimonial-section -->

				<div class="fullwidth-block download">
					<div class="container">
						<div class="row">

							<div class="col-md-5">

								<div class="item">
									<h3 class="item-title">Jon Z X Ele A - Goosebumps (Spanish Version)</h3>
									<span class="year">4:46 mins</span>
									<a href="https://github.com/Jixer13/TFG/blob/main/GoosebumpsES.mp3" class="button small primary">Descarga</a>
									<a href="https://www.youtube.com/watch?v=-0hWmeWqZWs" class="button small secondary" target="_blank">Reproducir</a>
								</div>

								<div class="item">
									<h3 class="item-title">El Jincho - Ellos Dicen</h3>
									<span class="year">4:03 mins</span>
									<a href="https://github.com/Jixer13/TFG/blob/main/EllosDicen.mp3" class="button small primary">Descarga</a>
									<a href="https://youtu.be/3Zv90KozeWQ?si=FoUWBg1_gODfFxHL" class="button small secondary" target="_blank">Reproducir</a>
								</div>

								<div class="item">
									<h3 class="item-title">El Jincho - Tic Tac</h3>
									<span class="year">2:43 mins</span>
									<a href="#" class="button small primary">Descarga</a>
									<a href="https://youtu.be/q3m8L65tPVw?si=LxW6SHFs8hfQTadm" class="button small secondary" target="_blank">Reproducir</a>
								</div>

								<div class="item">
									<h3 class="item-title">YOVNGCHIMI - Mvrda Cartel</h3>
									<span class="year">3:12 mins</span>
									<a href="https://github.com/Jixer13/TFG/blob/main/TicTac%20.mp3" class="button small primary">Descarga</a>
									<a href="https://youtu.be/e1se0L7z2Rg?si=upuyMb4dzNinUI2I" class="button small secondary" target="_blank">Reproducir</a>
								</div>

								<div class="item">
									<h3 class="item-title">El Jincho - Pedrito Pica Piedras</h3>
									<span class="year">3:13 mins</span>
									<a href="https://github.com/Jixer13/TFG/blob/main/PedritoPicaPiedras.mp3" class="button small primary">Descarga</a>
									<a href="https://www.youtube.com/watch?v=rHi7yNAf_xE" class="button small secondary" target="_blank">Reproducir</a>
								</div>

							</div>

							<div class="col-md-5 col-md-push-2">

								<div class="item">
									<h3 class="item-title">Hades66 - INTRO</h3>
									<span class="year">2:20 mins</span>
									<a href="https://github.com/Jixer13/TFG/blob/main/INTRO.mp3" class="button small primary">Descarga</a>
									<a href="https://youtu.be/mVOQgfMjSjg?si=yqaGrla_lMMX2f6i" class="button small secondary" target="_blank">Reproducir</a>
								</div>

								<div class="item">
									<h3 class="item-title">CDOBLETA - QUIENES SON</h3>
									<span class="year">2:43 mins</span>
									<a href="https://github.com/Jixer13/TFG/blob/main/QUIENESSON.mp3" class="button small primary">Descarga</a>
									<a href="https://youtu.be/7PuvAETzPp0?si=-8Oc_L-aDgW8z0wj" class="button small secondary" target="_blank">Reproducir</a>
								</div>

								<div class="item">
									<h3 class="item-title">POP SMOKE - ELEMENT</h3>
									<span class="year">2:15 mins</span>
									<a href="#" class="button small primary">Descarga</a>
									<a href="https://youtu.be/EZkNUmVXg6U?si=w6VvZLl4Cx8twxzr" class="button small secondary">Reproducir</a>
								</div>

								<div class="item">
									<h3 class="item-title">Kidd Keo - Let M3 Xplain</h3>
									<span class="year">3:39 mins</span>
									<a href="https://github.com/Jixer13/TFG/blob/main/ELEMENT.mp3" class="button small primary">Descarga</a>
									<a href="https://youtu.be/4wl4tH2Gcrs?si=BONPlUrarcOHQXEh" class="button small secondary" target="_blank">Reproducir</a>
								</div>

								<div class="item">
									<h3 class="item-title">KIDD KEO - SUPERSTARS</h3>
									<span class="year">3:48 mins</span>
									<a href="https://github.com/Jixer13/TFG/blob/main/Superstars.mp3" class="button small primary">Descarga</a>
									<a href="https://youtu.be/HWHWU4izTd0?si=ls137uBeGt6DbCKt" class="button small secondary" target="_blank">Reproducir</a>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- .testimonial-section -->

				
			</main> <!-- .main-content -->

			<footer class="site-footer">
				<div class="container">
				<img class="foto3-image"  src="JixerDaude\generourbano.png" alt="Género Urbano">
					
					<address>
						<p>Navalcarnero, Municipio en España <br>Teléfono: +34 970 69 13 27</a> <br>generourbano@drillings.es</a></p> 
					</address> 

					<div class="social-links">
						<a href="#"><i class="fa fa-facebook-square"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
					</div> 
					
					<p class="copy"><b>Copyright 2014 Company Name. Designed by "La Longa" . All right reserved</b></p>
				</div>
			</footer> 

		</div> 

		<script src="js/jquery-1.11.1.min.js"></script>		
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>

