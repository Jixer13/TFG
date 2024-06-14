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

					<!-- NUESTRO LOGO -->

					<a href="index.html" id="branding">
						<img style="width: 35%; height: 35%;" src="JixerDaude\image.png" alt="Site Title">
						<small style="text-align: center;" class="site-description"></small>
					</a> 
					
					<!-- NUESTRO MENÚ -->

					<nav class="main-navigation">
						<button type="button" class="toggle-menu"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="1index.php">Inicio</a></li>
							<li class="menu-item current-menu-item"><a href="cantantes.php">Cantantes</a></li>
							<li class="menu-item"><a href="galeria.php">Galería</a></li>
							<li class="menu-item"><a href="videos.php">Videos</a></li>
							<li class="menu-item"><a href="noticias.php">Noticias</a></li>
							<li class="menu-item "><a href="encuestas.php">Encuestas</a></li>
						</ul>
					</nav>
					<div class="mobile-menu"></div>
				</div>
			</header>
		
			<!-- NUSTRO BUSCADOR DINAMICO QUE DEPENDE DE LA BASE DE DATOS -->

			<main class="main-content">
				<div class="fullwidth-block inner-content">
					<div class="container">
						<div class="row">
							<div class="col-md-7">
								<div class="widget">
									<h3 class="widget-title">Encuentra aquí tu cantante favorito :</h3>
									<form action="" method="GET">
										<input type="text" name="busqueda" id="buscador" class="text" placeholder=" Buscar Cantante ...">
										 <br><br>
										 
										<?php 

											if(isset($_GET['busqueda'])) {
												$busqueda = $_GET['busqueda'];
												$consulta = $conn->query("SELECT ruta FROM cantantes where nombre LIKE '%$busqueda%'");
												
											// USANDO EL METODO "GET" BUSCA CONTENIDO EN EL "INPUT BUSQUEDA", SI TIENE CONTENIDO EJECUTA EL "IF" Y METE EL CONTENIDO EN LA VARIABLE "$BUSQUEDA".
											// CREAMOS UNA VARAIBLE CON UNA "QUERY" PARA BUSCAR EN NUESTRA BASE DE DATOS DEPENDIENDO DEL CANTANTE EL CONTENIDO DE ESTE.

										?>
										<br>
										<?php
												while ($row = $consulta->fetch_array()) {
													echo $row['ruta'] . '<br>';
												}
												
											}
											
											//
											//

										?>
										
									</form>			
								</div>
							</div>

							<!-- RECOMENDACIONES FIJAS DE LOS ALGUNO DE LOS CANTANTES  -->

							<div class="col-md-4 col-md-push-1">
								<aside class="sidebar">
									<div class="widget">
										<h3 class="widget-title">Recomendaciones :</h3>
										<ul class="discography-list">
											<li>
												<figure class="cover"><img src="JixerDaude\9k.png" alt="thumbnail 1"></figure>
												<div class="detail">
													<h3><a href="anuel.php">Anuel AA</a></h3>
													<span class="year">Nacido 1992 - 31 años</span>
													<span class="track"><b>10 Canciones Disponibles</b></span>
												</div>
											</li>
											<li>
												<figure class="cover"><img class="reimagen" src="JixerDaude\keoperfil1.png" alt="thumbnail 2"></figure>
												<div class="detail">
													<h3><a href="keo.php">kidd Keo</a></h3>
													<span class="year">Nacido 1997 - 27 años</span>
													<span class="track"></b>3 Canciones Disponibles</b></span>
												</div>
											</li>
											<li>
												<figure class="cover"><img class="reimagen" src="JixerDaude\popsmokePerfil1.png" alt="thumbnail 3"></figure>
												<div class="detail">
													<h3><a href="pop.php">Pop Smoke</a></h3>
													<span class="year">Nacido 1999 - 2020,  21 años ✝ </span>
													<span class="track"></b>25 Canciones Disponibles</b></span>
												</div>
											</li>
											<li>
												<figure class="cover"><img class="reimagen" src="JixerDaude\yovngchimiPerfil1.png" alt="thumbnail 4"></figure>
												<div class="detail">
													<h3><a href="yovng.php">Yovngchimi</a></h3>
													<span class="year">Nacido 1996 - 28 años</span>
													<span class="track"></b>47 Canciones Disponibles</b></span>
												</div>
											</li>
											<li>
												<figure class="cover"><img class="reimagen" src="JixerDaude\jonzPerfil1.png" alt="thumbnail 5"></figure>
												<div class="detail">
													<h3><a href="jon.php">Jon Z</a></h3>
													<span class="year">Nacido 1991 - 32 años</span>
													<span class="track">1 Canciones Disponibles</span>
												</div>
											</li>
										</ul>
									</div>
								</aside>
							</div>
						</div>
					</div>
				</div>

				
			</main>

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

