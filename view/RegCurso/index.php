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
    <div class="container py-3">
        <h3>Agregar Certificados</h3>
        <div class="card mb-3">
            <img src="../../public/img/universo.jpeg" class="card-img-top" alt="...">
        </div>
        <form class="form-pequeno" action="" method="post" enctype="multipart/form-data">
            <div class="form-group mb-3">
                <label for="ci">Cédula de identidad</label>
                <input type="text" class="form-control form-control-sm" id="ci" name="ci" required>
            </div>
            <div class="form-group mb-3">
                <label for="nombre">Nombre y apellido</label>
                <input type="text" class="form-control form-control-sm" id="nombre" name="nombre" required>
            </div>
            <div class="form-group mb-3">
                <label for="curso">Nombre del curso</label>
                <input type="text" class="form-control form-control-sm" id="curso" name="curso" required>
            </div>
            <div class="form-group mb-3">
                <label for="archivo">Certificado (PDF)</label>
                <input type="file" class="form-control-file form-control-sm" id="archivo" name="archivo" accept=".pdf" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Subir archivo</button>
        </form>
        <?php require_once("../../config/insert.php"); ?>
    </div>
  
  
  <?php require_once("../html/MainJs.php"); ?>
</body>
</html>
