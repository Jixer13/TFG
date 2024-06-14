<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Galería | Genero Urbano</title>

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
					<a href="index.html" id="branding">
						<img style="width: 35%; height: 35%;" src="JixerDaude\image.png" alt="Site Title">
						<small style="text-align: center;" class="site-description"></small>
					</a>
					
					<!-- NUESTRO MENU -->

					<nav class="main-navigation">
						<button type="button" class="toggle-menu"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="1index.php">Inicio</a></li>
							<li class="menu-item"><a href="cantantes.php">Cantantes</a></li>
							<li class="menu-item current-menu-item"><a href="galeria.php">Galería</a></li>
							<li class="menu-item"><a href="videos.php">Videos</a></li>
							<li class="menu-item"><a href="noticias.php">Noticias</a></li>
							<li class="menu-item "><a href="encuestas.php">Encuestas</a></li>
						</ul>
					</nav>
					<div class="mobile-menu"></div>
				</div>
			</header> 
			
			

			<main class="main-content">
				<div class="fullwidth-block gallery">
					<div class="container">
						<div class="content fullwidth">
							<h2 class="entry-title">Galería</h2>
							<div class="filter-links filterable-nav">
								<select class="mobile-filter">
									<option value="*">Show all</option>
									<option value=".concert">Concert</option>
									<option value=".band">Band</option>
									<option value=".stuff">Stuff</option>
									<option value=".stuff">IA</option>
								</select>
								<a href="#" class="current" data-filter="*">Todas</a>
								<a href="#" data-filter=".concert">Cantantes</a>
								<a href="#" data-filter=".band">Sin Editar</a>
								<a href="#" data-filter=".stuff">Editadas</a>
								<a href="#" data-filter=".IA">IA</a>
							</div>
							<div class="filterable-items">

								<!-- CANTANTES -->

								<div class="filterable-item concert">
									<figure><img src="JixerDaude\jonzPerfil.png"></figure>
								</div>
								<div class="filterable-item concert">
									<figure><img src="JixerDaude\anuelPerfil.png"></figure>
								</div>
								<div class="filterable-item concert">
									<figure><img src="JixerDaude\keoPerfil.png"></figure>
								</div>
								<div class="filterable-item concert">
									<figure><img src="JixerDaude\popPerfil.png"></figure>
								</div>
								<div class="filterable-item concert">
									<figure><img src="JixerDaude\yovngPerfil.png"></figure>
								</div>
								<div class="filterable-item concert">
									<figure><img src="JixerDaude\kingPerfil.png"></figure>
								</div>

								<!-- FOTOS SIN EDITAR -->

								<div class="filterable-item band">
									<figure><img src="JixerDaude\logo.png"></figure>
								</div>

								<div class="filterable-item band">
									<figure><img src="JixerDaude\indexfoto.png" ></figure>
								</div>
								

								<!-- FOTOS EDITADAS -->

								<div class="filterable-item stuff">
									<figure><img src="JixerDaude\generourbano1.png"></figure>
								</div>

								<div class="filterable-item stuff">
									<figure><img src="JixerDaude\fotofondo.png" ></figure>
								</div>
							
								<!-- FOTOS SACADAS CON IA -->

								<div class="filterable-item IA">
									<figure style=""><img src="JixerDaude\kiddkeo.png" ></figure>
								</div>

								<div class="filterable-item IA">
									<figure><img src="JixerDaude\image2.png" ></figure>
								</div>
								

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

					<p class="copy"><b>Copyright 2014 Company Name. Designed by "La Longa" . All right reserved</b></p>
				</div>
			</footer> 

		</div> <!-- #site-content -->

		<script src="js/jquery-1.11.1.min.js"></script>		
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>
