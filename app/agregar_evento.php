<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$titulo = $_POST['titulo'];
$fecha = $_POST['fecha'];

$sql = "INSERT INTO eventos (titulo, fecha) VALUES ('$titulo', '$fecha')";

if ($conn->query($sql) === TRUE) {
    echo "<h1><center>Evento agregado con éxito</center></h1>";
    echo "<center><a href='index.php'>Regresar a la pagina principal</a></center></h2>";
} else {
    echo "Error al agregar evento: " . $conn->error;
}

$conn->close();
?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Registro De Evento</title>
</head>