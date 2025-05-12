<?php
$mysqli = new mysqli("mysql-server", "root", "1234", "ejemplo");

if ($mysqli->connect_error) {
    die("Conexión fallida: " . $mysqli->connect_error);
}

$result = $mysqli->query("SELECT * FROM personas");

echo "<h1>Personas</h1><ul>";
while ($row = $result->fetch_assoc()) {
    echo "<li>" . $row['nombre'] . "</li>";
}
echo "</ul>";

$mysqli->close();
?>
