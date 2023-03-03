<?php 
if (isset($_POST['submit'])) {
    $ci = $_POST["ci"];
    $nombre = $_POST["nombre"];
    $curso = $_POST["curso"];
    $archivo = $_FILES["archivo"]["name"];
    $temp_archivo = $_FILES["archivo"]["tmp_name"];

    // Guardar el archivo en la carpeta correspondiente
    $ruta_archivo = "C:/xampp/htdocs/certificados_una_v2/archivos/cert/" . $archivo;
    move_uploaded_file($temp_archivo, $ruta_archivo);

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO reg_certificado (ci, nombre, curso, archivo) VALUES ('$ci', '$nombre', '$curso', '$ruta_archivo')";

    if ($conn->query($sql) === TRUE) {
        echo '<div class="alert alert-success" role="alert">Los datos fueron registrados exitosamente.</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Error: ' . $sql . '<br>' . $conn->error . '</div>';
    }

    $conn->close();
}
?>