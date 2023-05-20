<?php
include "modelo/conexion.php";

$idUsuario=$_GET["idUsuario"];

$sql=$conexion->query("select * from usuario where idUsuario='$idUsuario'");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
    <form class="col-4 p-3 m-auto" method="POST">
        <h3 class="text-center alert alert-secondary p-3">Modificar Usuario</h3>
        <input type="hidden" name="idUsuario" value="<?= $_GET["idUsuario"] ?>">
        <?php
        include "controlador_usuario/modificar_usuario.php";
        while($datos=$sql->fetch_object()){?>
        <div class="form-group">
            <label>Nombre</label>
            <input id="nombre" name="nombre" type="text" class="form-control" value="<?= $datos->nombre ?>"required>
        </div>
        <div class="form-group">
            <label>Apellido Paterno:</label>
            <input id="ape_paterno" name="ape_paterno" type="text" class="form-control"  value="<?= $datos->ape_paterno ?>" required>
        </div>
        <div class="form-group">
            <label>Apellido Materno:</label>
            <input id="ape_materno" name="ape_materno" type="text" class="form-control" value="<?= $datos->ape_materno ?>" required>
        </div>
        <div class="form-group">
            <label>Dirección:</label>
            <input id="direccion" name="direccion" type="text" class="form-control" value="<?= $datos->direccion ?>" required>
        </div>
        <div class="form-group">
            <label>E-mail:</label>
            <input id="email" name="email" type="text" class="form-control" value="<?= $datos->email ?>" required>
        </div>
        <div class="form-group mt-3">
            <label>Teléfono:</label>
            <input id="telefono" name="telefono" type="text" class="form-control" value="<?= $datos->telefono ?>" required>
        </div>
        <div class="form-group mt-3">
            <label>Contraseña:</label>
            <input id="contraseña" name="contraseña" type="password" class="form-control" value="<?= $datos->contraseña ?>" required>
        </div>
        <?php }
        ?>
        
        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>
