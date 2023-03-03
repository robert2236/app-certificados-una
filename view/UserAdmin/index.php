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
            <h3>Mis Cursos</h3>
            <div class="card mb-3">
             <img src="../../public/img/universo.jpeg" class="card-img-top" alt="...">
             </div>       
            <ul class="list-unstyled">
                <li><h5>Administrador</h5>Certificados Cursos</li>
                <table id="cursos_data" class="table">
                <thead>
  <tr>
    <th scope="col" class="text-center">#</th>
    <th scope="col" class="text-center">Nombres y Apellidos</th>
    <th scope="col" class="text-center">Email</th>
    <th scope="col" class="text-center">Cedula</th>
    <th scope="col" class="text-center">Participación</th>
    <th scope="col" class="text-center">Fecha de Registro</th>
  </tr>
</thead>

  <tbody>
    <?php
    $query = "SELECT * FROM certificado_usuarios";
    $result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_array($result)) {
      echo "<tr>";
      echo "<td>" . $row['id'] . "</td>";
      echo "<td>" . $row['apellido_nombre'] ."</td>";
      echo "<td>" . $row['ci'] . "</td>";
      echo "<td>" . $row['email'] . "</td>";
      echo "<td>" . $row['part'] . "</td>";
      echo "<td>" . $row['fechaReg'] . "</td>";
      echo "</tr>";
    }
    ?>
  </tbody>
</table>

            </ul>
        </div>
    </div>
</div>
<?php require_once("../html/MainJs.php"); ?>
</body>
</html>
