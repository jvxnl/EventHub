<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }
    
    $sql = "SELECT * FROM eventos";
    $result = $conn->query($sql);
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['titulo'] . "</td>";
        echo "<td>" . $row['fecha'] . "</td>";
        echo "<td><a href='eliminar_evento.php?id=" . $row['id'] . "'>Eliminar</a></td>";
        echo "</tr>";
    }
    
    $conn->close();

    
?>
