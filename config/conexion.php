<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "certificados_una";

// Establecer la conexión con la base de datos
$conn = new mysqli($host, $user, $password, $database);

// Comprobar si hay errores en la conexión
if ($conn->connect_error) {
    die("La conexión ha fallado: " . $conn->connect_error);
}

echo "Conexión establecida con éxito";
mysqli_set_charset($conn, "utf8");

?>
