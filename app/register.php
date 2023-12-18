<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (username, password) VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "<h1><center>Registro exitoso. </center></h1>";
    echo "<center><a href='login.html'>Iniciar sesión</a></center>";
} else {
    echo "Error al registrar usuario: " . $conn->error;
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