<?php
// Obtener el nombre del archivo PDF a mostrar
$filename = isset($_GET['filename']) ? $_GET['filename'] : '';

// Comprobar que el archivo existe
if (!file_exists($filename)) {
    die('El archivo no existe.');
}

// Establecer las cabeceras para indicar que se va a mostrar un archivo PDF
header('Content-Type: application/pdf');
header('Content-Disposition: inline; filename="' . basename($filename) . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');
header('Content-Length: ' . filesize($filename));

// Mostrar el contenido del archivo PDF
readfile($filename);
?>
