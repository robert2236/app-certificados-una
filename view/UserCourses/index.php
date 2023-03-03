<?php require_once("../../config/conexion.php"); ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php require_once("../html/MainHead.php"); ?>
    <title>Administracion de Certificados Usuario</title>
</head>
<body>
    <?php require_once("../html/MainHeader.php"); ?>
    <?php require_once("../html/MainMenu.php"); ?>
    <div class="container py-3">
        <h3>Agregar Certificados</h3>
<?php require_once("../../config/read.php"); ?>
<?php
// Si hay resultados, mostrar tabla
if ($resultado->num_rows > 0) {
    echo '<table class="table mx-auto">';
    echo '<thead><tr><th>Cédula de Identidad</th><th>Nombre y Apellido</th><th>Curso</th><th>Descargar Certificado</th></tr></thead>';
    echo '<tbody>';
    while ($fila = $resultado->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $fila["ci"] . '</td>';
        echo '<td>' . $fila["nombre"] . '</td>';
        echo '<td>' . $fila["curso"] . '</td>';
        echo '<td><form method="GET" action="../../config/download.php"><input type="hidden" name="filename" value="' . $fila["archivo"] . '"><button type="submit">Ver</button></form></td>';

        echo '</tr>';
    }
    echo '</tbody>';
    echo '</table>';
} else {
    echo "No se encontraron resultados.";
}


// Cerrar conexión

$conn->close();
?>     
    
  <?php require_once("../html/MainJs.php"); ?>
</body>
</html>
