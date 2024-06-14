<?php
session_start();

$conn = new mysqli('localhost', 'root', '', 'webcantantes');

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener la valoración y el comentario del formulario y el nombre de usuario de la sesión
$valoracion = isset($_POST['rating']) ? $_POST['rating'] : null;
$comentario = isset($_POST['comentario']) ? $_POST['comentario'] : null;


if ($valoracion !== null) {
    // Preparar y ejecutar la consulta SQL para insertar la nueva valoración
    if ($comentario !== null && $comentario != "") {
        $stmt = $conn->prepare("INSERT INTO valoracionesg (valor, comentario) VALUES (?, ?)");
        $stmt->bind_param("is", $valoracion, $comentario);

        if ($stmt->execute()) {
            echo "Valoración y comentario guardados exitosamente.";
            header("Refresh: 5; url=encuestas.php");
        } else {
            echo "Error: " . $stmt->error;
        }
    } else {
        // Si no hay comentario, inserta solo la valoración
        $stmt = $conn->prepare("INSERT INTO valoracionesg (valor, comentario) VALUES (?, '')");
        $stmt->bind_param("i", $valoracion);

        if ($stmt->execute()) {
            echo "Valoración se ha guardado exitosamente.";
            header("Refresh: 5; url=encuestas.php");
        } else {
            echo "Error: " . $stmt->error;
        }
    }

    $stmt->close();
} else {
    echo "No se ha seleccionado ninguna valoración.";
    header("Refresh: 5; url=encuestas.php");
}

// Consulta para obtener la media de las valoraciones
$sql = "SELECT AVG(valor) AS media FROM valoracionesg";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $media = $row["media"];
        // sacamos el valor para que tenga un solo dígito entero y dos decimales
        $media = number_format($media, 2, '.', '');
    }
} else {
    echo "No hay valoraciones disponibles.";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Valorar WebCantantes</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="cssJD.css">
    <style>
        body, html {
            background-color:rgba(25,25,25,255); /* Cambia esto al color que desees */
            color: orangered;
            text-align: center;
            margin: 0;
            padding: 0;
            height: 100%;
            width: 100%;
        }
    </style>
</head>
<body>
</body>
</html>
