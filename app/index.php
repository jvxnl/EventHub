<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['username'])) {
    header("Location: login.html"); // Redirigir a la página de inicio de sesión si no ha iniciado sesión
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Calendario de Eventos</title>
</head>
<body>
    <h1>Calendario de Eventos</h1>
    
    <!-- Formulario para agregar eventos -->
    <form action="agregar_evento.php" method="post">
        <label for="titulo">Título del Evento:</label>
        <input type="text" name="titulo" required>
        <label for="fecha">Fecha del Evento:</label>
        <input type="date" name="fecha" required>
        <button type="submit">Agregar Evento</button>
    </form>

    <!-- Lista de eventos -->
    <h2>Listado de Eventos</h2>
    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php include 'mostrar_eventos.php'; ?>
        </tbody>
    </table>
    <p><a href="logout.php">Cerrar sesión</a></p>
</body>
</html>
