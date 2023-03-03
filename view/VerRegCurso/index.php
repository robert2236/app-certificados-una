<?php
require_once("../../config/conexion.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php require_once("../html/MainHead.php"); ?>
    <title>Administracion de Certificados Usuario</title>
</head>
<body>
<?php require_once("../html/MainHeader.php"); ?>
<?php require_once("../html/MainMenuAdmin.php"); ?>
        <div class="col py-3">
            <h3>Participantes Registrados</h3>
            <div class="card mb-3">
             <img src="../../public/img/universo.jpeg" class="card-img-top" alt="...">
             </div>       
            <ul class="list-unstyled">
                <li><h5>Registro de Participantes</h5>Cursos</li>
                <table id="cursos_data" class="table">
                <thead>
  <tr>
    <th scope="col" class="text-left">#</th>
    <th scope="col" class="text-left">Cedula</th>
    <th scope="col" class="text-left">Nombre y Apellido</th>
    <th scope="col" class="text-left">Curso</th>
  </tr>
</thead>

  <tbody>
    <?php
    $query = "SELECT * FROM reg_certificado";
    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td>" . $row['id'] . "</td>";
      echo "<td>" . $row['ci'] ."</td>";
      echo "<td>" . $row['nombre'] . "</td>";
      echo "<td>" . $row['curso'] . "</td>";
      echo "<td><button class='btn btn-danger' onclick='eliminarRegistro(" . $row['id'] . ")'>Eliminar</button></td>";
      echo "</tr>";
    }
    ?>
  </tbody>c
</table>

            </ul>
        </div>
    </div>
</div>
<?php require_once("../html/MainJs.php"); ?>
<script>
function eliminarRegistro(id) {
    if (confirm("¿Estás seguro de que deseas eliminar este registro?")) {
        $.ajax({
            type: "POST",
            url: "http://localhost/certificados_una_v2/view/VerRegCurso/",
            data: { id: id },
            success: function() {
                location.reload();
            }
        });
    }
}
</script>
</body>
</html>
