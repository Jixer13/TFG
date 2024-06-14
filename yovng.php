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
    <!-- CSS EXTRA-->
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet" type="text/css">
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- CSS PRINCIPALES-->
	<link rel="stylesheet" href="cssJD.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="tablas.css">

</head>
<body>
    <div id="site-content">
        <header class="site-header">
            <div class="container">

                <!-- NUESTRO LOGO -->

                <a href="index.html" id="branding">
                    <img style="width: 35%; height: 35%;" src="JixerDaude/image.png" alt="Site Title">
                    <small style="text-align: center;" class="site-description"></small>
                </a> 
                
                <!-- NUESTRO MENU -->

                <nav class="main-navigation">
                    <button type="button" class="toggle-menu"><i class="fa fa-bars"></i></button>
                    <ul class="menu">
                        <li class="menu-item"><a href="1index.php">Inicio</a></li>
                        <li class="menu-item current-menu-item"><a href="cantantes.php">Cantantes</a></li>
                        <li class="menu-item"><a href="galeria.php">Galería</a></li>
                        <li class="menu-item"><a href="videos.php">Videos</a></li>
                        <li class="menu-item"><a href="noticias.php">Noticias</a></li>
                        <li class="menu-item"><a href="encuestas.php">Encuestas</a></li>
                    </ul>
                </nav> 
                <div class="mobile-menu"></div>
            </div>
        </header>
        
        <!-- INFORMACIÓN DEL CANTANTE QUE HA SIDO BUSCADO EN NUESTRO BUSCADOR -->

        <main class="main-content">
            <div class="fullwidth-block inner-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="widget">
                                <h3 class="widget-title">Yovngchimi</h3>
                                <form action="" method="GET">
                                    <br><br>
                                    <?php
                                        
                                        $consulta = $conn->query("SELECT biografia FROM cantantes WHERE nombre = 'Yovngchimi'");
                                        $resultado = $consulta->fetch_assoc(); 

                                        if (isset($resultado)) {
                                            $biografia = $resultado['biografia'];
                                            echo $biografia;
                                        } else {
                                            echo "No se encontraron resultados para 'Yovngchimi'";
                                        }

                                        // CREAMOS LA CONSULTA PARA ACCEDER AL CONTENIDO DE LA BASE DE DATOS Y LO AGRAGEGAMOS A LA VARIABLE "$CONSULTA", Y SACAMOS EL CONTENIDO USANDO LA VARIABLE "$RESULTADO" //
                                        // COMPORBAMOS EL CONTENIDO DE LA VARIABEL "$CONSULTA", SI TIENE CONTENIDO NOS CREARA OTRA VARIABLE "$BIOGRAFIA" //
                                        // QUE NOS SACA SOLO LA BIOGRAFIA DEL NOMBRE ESPECIFICADO EN LA VARIABLE "$RESULTADO //
                                        // SI NO TIENE CONTENIDO NOS DARA EL ERROR  //

                                    ?>
                                </form>          
                            </div>
                        </div>

                        <!-- CANCIONES DEL CANTANTE FIJAS  -->

                        <div class="col-md-4 col-md-push-1">
                            <aside class="sidebar">
                                <div class="widget">
                                    <h3 class="widget-title">Canciones :</h3>
                                    <table class="table-c">
                                        <thead>
                                            <tr>
												<b>
                                                <th>#</th>
                                                <th></th>
                                                <th>Título</th>
                                                <th>Álbum</th>
												</b>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><b class="id">1</b></td>
                                                <td><img class="img-canciones" src="JixerDaude\modelito.png" alt="Paraíso"></td>
                                                <td>MODELITO<br>Yovngchimi</td>
                                                <td>Paraíso</td>
                                            </tr>
                                            <tr>
                                                <td><b class="id">2<b></td>
                                                <td><img class="img-canciones" src="JixerDaude\nuevo.png" alt="Nuevo"></td>
                                                <td>Nuevo<br>Yovngchimi</td>
                                                <td>Nuevo</td>
                                            </tr>
                                            <tr>
                                                <td><b class="id">3</b></td>
                                                <td><img class="img-canciones" src="JixerDaude\losqueson.png" alt="Los Que Son"></td>
                                                <td>Los Que Son<br>Yovngchimi</td>
                                                <td>Los Que Son</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </aside> 
                        </div>
                    </div>
                </div>

				<main class="main-content">
            <div class="fullwidth-block inner-content">
                <div class="container">

                    <!-- REDIRECCIÓN A ENCUESTAS.PHP -->
					
                    <div class="row">
                        <div class="col-md-7">
                            <div class="widget">
                                <a href="encuestas.php"><button class="valora">Valoración</button></a><br>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
			
        </main> 
			
        </main> 
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
</body>
</html>
