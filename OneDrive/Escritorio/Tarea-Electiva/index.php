<?php
$servername = "db";
$username = "root";
$password = "rootpassword";
$dbname = "testdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "Hola Mundo! Conectado a la base de datos MySQL.";

$sql = "SELECT NOW() as now";
$result = $conn->query($sql);

if ($result) {
    $row = $result->fetch_assoc();
    echo "<br>Hora del servidor MySQL: " . $row['now'];
} else {
    echo "<br>Error en la consulta: " . $conn->error;
}

$conn->close();
?>