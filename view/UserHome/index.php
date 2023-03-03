<?php require_once("../../config/conexion.php"); ?>

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
                <div class="row mb-3">
                    <div class="col">
                        <form class="form-inline" action="" method="GET">
                            <input class="form-control mr-sm-2" type="search" placeholder="Buscar por CI" aria-label="Search" name="search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                        </form>
                    </div>
                </div>
                <table id="cursos_data" class="table">
                    <thead>
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col" class="text-center">Cedula</th>
                            <th scope="col" class="text-center">Nombre y Apellido</th>
                            <th scope="col" class="text-center">Curso</th>
                            <th scope="col" class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM reg_certificado";
                        if (isset($_GET['search'])) {
                            $search_term = $_GET['search'];
                            $query .= " WHERE ci LIKE '%$search_term%'";
                        }
                        $result = mysqli_query($conn, $query);

                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['id'] . "</td>";
                            echo "<td>" . $row['ci'] . "</td>";
                            echo "<td>" . $row['nombre'] . "</td>";
                            echo "<td>" . $row['curso'] . "</td>";
                            echo "<td><button class='btn btn-danger delete-btn' data-id='" . $row['id'] . "'>Eliminar</button></td>";
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
<script>
    // Agregar un controlador de eventos para el botón Eliminar
    $(document).on("click", ".delete-btn", function() {
        var id = $(this).data("id");
        if (confirm("¿Estás seguro de que quieres eliminar este registro?")) {
            $.ajax({
                url: "delete.php",
                type: "POST",
               

