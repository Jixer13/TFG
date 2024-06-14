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

	<!-- CSS PRINCIPALES -->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="cssJD.css">

</head>

<body class="header-collapse">
	
	<div id="site-content">
		<header class="site-header">
			<div class="container">
				<a href="index.html" id="branding">
					<img style="width: 35%; height: 35%;" src="JixerDaude\image.png" alt="Site Title">
				</a> 
				<form method="POST" action="cantantes.php">
					<nav class="main-navigation">
						<button type="button" class="toggle-menu"><i class="fa fa-bars"></i></button>

						<!-- NUESTRO MENU -->

						<ul class="menu">
							<li class="menu-item current-menu-item"><a href="index.html">Inicio</a></li>
							<li class="menu-item"><a href="cantantes.php">Cantantes</a></li>
							<li class="menu-item"><a href="galeria.php">Galería</a></li>
							<li class="menu-item"><a href="videos.php">Videos</a></li>
							<li class="menu-item"><a href="noticias.php">Noticias</a></li>
							<li class="menu-item "><a href="encuestas.php">Encuestas</a></li>
						</ul> 

					</nav> 
				</form>
				<div class="mobile-menu"></div>
			</div>
		</header> 
			<div class="hero">
				<div class="slider">
					<ul class="slides">

						<!-- TRES IMAGENES DE LOS CANTANTES MÁS TOP -->

						<li class="lazy-bg"  data-background="JixerDaude/anuel.png">
							<div class="container">
								<h2 class="slide-title">Anuel AA</h2>
								<h3 class="slide-subtitle"><b>"Real Hasta La Muerte Brrr"</b></h3>
								<p class="slide-desc"> <br> </p>

								
							</div>
						</li>
						<li class="lazy-bg" data-background="JixerDaude/popsmoke.png">
							<div class="container">
									<h2 class="slide-title">Pop Smoke</h2>
									<h3 class="slide-subtitle"><b>"The WOO"</b></h3>
									<p class="slide-desc"> <br> </p>

									
							</div>
						</li>
						<li class="lazy-bg" data-background="JixerDaude/kiddkeo.png">
							<div class="container">
									<h2 class="slide-title">kidd Keo</h2>
									<h3 class="slide-subtitle"><b>"Welcome to Rockport"</b></h3>
									<p class="slide-desc"> <br> </p>

							
							</div>
						</li>
					</ul>
				</div>
			</div>
			
			<!-- FRASES DE CANCIONES DE CANTATES -->

			<main class="main-content">
				<div class="fullwidth-block testimonial-section">
					<div class="container">
						<div class="quote-slider">

							<!-- COMENTARIOS FIJOS QUE NO DEPENDEN DE LA BASE DE DATOS -->

							<ul class="slides">
								<li>
									<blockquote>
										<p>" Ni preso yo me apago, cabrón, la luz yo se las di
											To'a esta' barra' están pateando como Neymar en Pari "</p>
										<cite>Anuel AA</cite>
										<span>Cantante Puerto-Riqueño</span>
									</blockquote>
								</li>
								<li>
									<blockquote>
										<p>" Mike Amiri, Mike Amiri, Billie Jean, Billie Jean, uh
                                            Christian Dior, Dior, I'm up in all the stores
                                            When it rains, it pours, she like the way I rrr "</p>
										<cite>Pop Smoke</cite>
										<span>Cantante Estadon-Unidense</span>
									</blockquote>
								</li>
								<li>
									<blockquote>
										<p>" Digan lo que digan yo no vo'a a cambiar. Ahora vivo como vivo, 
											bendición al Trap. Cienes y cienes, esto pa' hacerlo volar.
											Nadie hacía esto, yo lo hice sonar "</p>
										<cite>Kidd Keo</cite>
										<span>Cantante Español</span>
									</blockquote>
								</li>
							</ul>
						</div>
					</div>
				</div>

			
				<!-- PRINCIPALES ALBUMES -->
				 
				<div class="fullwidth-block upcoming-event-section" data-bg-color="#191919">
					<div class="container">
						<header class="section-header">
							<h2 class="section-title">Albumes Destacados</h2>

						</header> 
						<div class="event-carousel">
							
							<!-- REAL HASTA LA MUERTE -->

							<div class="event">
								<a href="https://open.spotify.com/intl-es/album/5pQwQRnQOuKrbVUVnGMEN4?si=AY1w4BUcSjme24JkwtdhHA" target="_blank"><img class="evento-image" src="JixerDaude\RHLM.png"><a>
								<div class="entry-date">
									<div class="date">17</div>
									<span class="month">Jul / 18</span>
								</div>
								<h2 class="entry-title"><a href="https://open.spotify.com/intl-es/album/5pQwQRnQOuKrbVUVnGMEN4?si=AY1w4BUcSjme24JkwtdhHA target=_blank">Real Hasta La Muerte "RHLM"</a></h2>
								<p></p>
							</div> 
							
							<!-- LAS LEYENDAS NUNCA MUEREN 2 -->
							
							<div class="event">
								<a href="https://open.spotify.com/intl-es/album/6DJslQtfD7mGFGZpfiyrVf?si=-d2auWuxQbGTBKkSztCYOw" target="_blank"><img class="evento-image" src="JixerDaude\LLNM2.png"><a>
								<div class="entry-date">
									<div class="date">09</div>
									<span class="month">Dic / 22</span>
								</div>
								<h2 class="entry-title"><a href="https://open.spotify.com/intl-es/album/6DJslQtfD7mGFGZpfiyrVf?si=-d2auWuxQbGTBKkSztCYOw target=_blank">Las Leyendas Nunca Mueren "LLNM2"</a></h2>
								<p></p>
							</div>
							
							<!-- BACK TO ROCKPORT -->

							<div class="event">
								<a href="https://open.spotify.com/intl-es/album/2gMs3mjUTftMtuunWWxZzM?si=qLmRQw3KSbaDBMHoHw-Wcg" target="_blank"><img class="evento-image" src="JixerDaude\ROCKPORT.png">
								<div class="entry-date">
									<div class="date">28</div>
									<span class="month">Aug / 20</span>
								</div>
								<h2 class="entry-title"><a href="https://open.spotify.com/intl-es/album/2gMs3mjUTftMtuunWWxZzM?si=qLmRQw3KSbaDBMHoHw-Wcg target=_blank">BACK TO ROCKPORT</a></h2>
								<p></p>
							</div> 
							
							<!-- MEET THE WOO -->

							<div class="event">
								<a href="https://open.spotify.com/album/6d1vGZsr6Uy3h9IigBpPAf?si=A8Yrir07SQaUkDFSui1XVQ" target="_blank"><img class="evento-image" src="JixerDaude\MeetTheWoo.png">
								<div class="entry-date">
									<div class="date">26</div>
									<span class="month">Jul / 19</span>
								</div>
								
									<h2 class="entry-title"><a href="https://open.spotify.com/album/6d1vGZsr6Uy3h9IigBpPAf?si=A8Yrir07SQaUkDFSui1XVQ target=_blank">Meet The Woo</a></h2>
									<p></p>
								
							</div> 
						</div> 
					</div> 
				</div> 

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

		</div> 

		<script src="js/jquery-1.11.1.min.js"></script>		
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>