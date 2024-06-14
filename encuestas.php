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
						</ul>
					</nav>
					<div class="mobile-menu"></div>
				</div>
			</header>

			<!-- ENCUESTAS CON INFO DINAMICA, GUARDAD EN AL BASE DE DATOS -->
			
			<main class="main-content">
				<div class="fullwidth-block inner-content">
					<div class="container">
					<div class="row">
							<div class="col-md-7">
								<div class="widget">
									<h3 class="widget-title">ENCUESTAS</h3>

									<!-- ENCUESTA 1 -->

									<h2>Valoraciones de Cantantes<h2>
									<form action="valoracion.php" method="POST">
										<select class="selcantantes" name="cantante">
											<option value="">Elige un cantante</option>
											<option value="Anuel AA">Anuel AA</option>
											<option value="Jonz">Jon Z</option>
											<option value="Yovng">Yovngchimi</option>
											<option value="Pop Smoke">Pop Smoke</option>
											<option value="Kidd keo">Kidd Keo</option>
											<option value="king Von">King Von</option>
										</select>

										<!-- ESTRELLAS -->

										<div class="rating">
											<input type="radio" id="star5" name="rating" value="5">
											<label for="star5">&#9733;</label>
											<input type="radio" id="star4" name="rating" value="4">
											<label for="star4">&#9733;</label>
											<input type="radio" id="star3" name="rating" value="3">
											<label for="star3">&#9733;</label>
											<input type="radio" id="star2" name="rating" value="2">
											<label for="star2">&#9733;</label>
											<input type="radio" id="star1" name="rating" value="1">
											<label for="star1">&#9733;</label>
										</div><br>
                                 <script>
                                             const ratingInputs = document.querySelectorAll('input[name="rating"]');
                                                ratingInputs.forEach(input => {
                                                input.addEventListener('change', function() {
                                                     const ratingValue = parseInt(this.value);
                                                for (let i = 1; i <= 5; i++) {
                                                    const star = document.getElementById(`star${i}`);
                                                if (i <= ratingValue) {
                                                    star.checked = true;
                                                } else {
                                                    star.checked = false;
                                                }
                                            }
                                        });
                                     });

									////
									////
									////
									////

									 
								
                                </script>
									<input class="comt" type="text" name="comentario" placeholder=" Comentarios..."><br><br>
									<button class="env" type="submit">Enviar</button>
								</form><br>

								<!-- ENCUESTA 2  -->

								<h2> Valoraciones de la Web en General<h2>
								<form action="valoracionG.php" method="POST">
									<div class="rating" name="valcantanteG">
										<input type="radio" id="star5g" name="rating" value="5">
										<label for="star5g">&#9733;</label>
										<input type="radio" id="star4g" name="rating" value="4">
										<label for="star4g">&#9733;</label>
										<input type="radio" id="star3g" name="rating" value="3">
										<label for="star3g">&#9733;</label>
										<input type="radio" id="star2g" name="rating" value="2">
										<label for="star2g">&#9733;</label>
										<input type="radio" id="star1g" name="rating" value="1">
										<label for="star1g">&#9733;</label>
									</div><br>

								<!-- ESTRELLAS 2 -->

                                 <script>
                                            
                                             const ratingInputs = document.querySelectorAll('input[name="rating"]');
                                                ratingInputs.forEach(input => {
                                                input.addEventListener('change', function() {
                                                     const ratingValue = parseInt(this.value);
                                                for (let i = 1; i <= 5; i++) {
                                                    const star = document.getElementById(`star${i}`);
                                                if (i <= ratingValue) {
                                                    star.checked = true;
                                                } else {
                                                    star.checked = false;
                                                }
                                            }
                                        });
                                     });

									////
									////
									////
									////

                                </script>

								<!-- COMENTARIO GUARDADO EN LA BASE DE DATOS -->

									<input class="comt" type="text" name="comentario" placeholder=" Ideas para mejorar..."><br><br>
									<button class="env" type="submit">Enviar</button>
								</form> <br><br>
							</div>	
						</div>
	

		<div class="col-md-4 col-md-push-1">
				<aside class="sidebar">
					<div class="widget">
						<h3 class="widget-title">VALORACIONES</h3>
						
			<!-- VALORACIONES TOTALES DE CADA CANTANTE -->

			<h2>Valoraciones de la Web en General</h2>
    <form method="POST">
        <select class="selcantantes" name="valcantante">
            <option value="">Elige un cantante</option>
            <option value="Anuel AA">Anuel AA</option>
            <option value="Jonz">Jon Z</option>
            <option value="Yovng">Yovngchimi</option>
            <option value="Pop Smoke">Pop Smoke</option>
            <option value="Kidd keo">Kidd Keo</option>
            <option value="king Von">King Von</option>
        </select>

        <button type="submit">Buscar 🔎</button>
    </form><br>

			<?php

				if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['valcantante'])) {

					$cantanteSelect= $conn->real_escape_string($_POST['valcantante']);
					$sql = "SELECT usuario, cantante, valor, comentario FROM valoraciones WHERE cantante = '$cantanteSelect'";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						// Salida de los datos de cada fila
						while ($x = $result->fetch_assoc()) {
							echo "<br>Se ha valorado a " . $x["cantante"] . " con un " . $x["valor"] . "/5 ⭐ <br> ". $x["comentario"];
						}
					} else {
						echo "0 resultados";
					}

				}
			?>
			<br><br>

				
			<?php
	
				$sql = "SELECT AVG(valor) AS media_valor FROM valoracionesg";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()) {
						$media_valor = $row["media_valor"];
						
						$media_= number_format($media_valor, 2, '.', '');
					}
				} else {
					echo "0 resultados";
				}
			?>
			<h2 class="widget-title">VALORACION GENERAL DE LA PÁGINA : <?php echo $media_; ?></h2>


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



		<script src="js/jquery-1.11.1.min.js"></script>		
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>
