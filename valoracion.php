<?php
session_start();

$conn = new mysqli('localhost', 'root', '', 'webcantantes');

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener la valoración y el comentario del formulario 
$valoracion = isset($_POST['rating']) ? $_POST['rating'] : null;
$comentario = isset($_POST['comentario']) ? $_POST['comentario'] : null;
// $usuario = isset($_POST['username']);
$cantante = isset($_POST['cantante']) ? $_POST['cantante'] : null;

if ($valoracion !== null && $cantante !== null) {
    // Preparar y ejecutar la consulta SQL para insertar la nueva valoración
    if ($comentario !== null && $comentario != "") {
        $stmt = $conn->prepare("INSERT INTO valoraciones (cantante, valor, comentario) VALUES (?, ?, ?)");
        $stmt->bind_param("sis", $cantante, $valoracion, $comentario);

        if ($stmt->execute()) {
            echo "Valoración a $cantante y comentario guardados exitosamente.";
            header("Refresh: 5; url=encuestas.php");
        } else {
            echo "Error: " . $stmt->error;
        }
    } else {
        // Si no hay comentario, inserta solo la valoración
        $stmt = $conn->prepare("INSERT INTO valoraciones (cantante, valor) VALUES ( ?, ?)");
        $stmt->bind_param("si", $cantante, $valoracion);

        if ($stmt->execute()) {
            echo "Valoración a $cantante guardada exitosamente.";
            header("Refresh: 5; url=encuestas.php");
        } else {
            echo "Error: " . $stmt->error;
        }
    }

    $stmt->close();
} else {
    echo "No se ha seleccionado ninguna valoración o el cantante no está especificado.";
    header("Refresh: 5; url=encuestas.php");
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Valorar Cantante</title>
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
</body>
</html>
