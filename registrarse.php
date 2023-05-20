<?php
require 'modelo/conexion.php';

$message = '';

if (!empty($_POST["nombre"]) && !empty($_POST["ape_paterno"]) && !empty($_POST["ape_materno"]) && !empty($_POST["direccion"]) && !empty($_POST["email"]) && !empty($_POST["telefono"]) && !empty($_POST["contraseña"])) {
    $nombre = $_POST["nombre"];
    $ape_paterno = $_POST["ape_paterno"];
    $ape_materno = $_POST["ape_materno"];
    $direccion = $_POST["direccion"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $contraseña = $_POST["contraseña"];

    $sql = "insert into usuario (nombre, ape_paterno, ape_materno, direccion, email, telefono, contraseña) values ('$nombre','$ape_paterno','$ape_materno','$direccion','$email','$telefono','$contraseña')";

    if ($conexion->query($sql)) {
        $message = 'Conexión válida';
    } else {
        $message = 'Error al validar la conexión: ' . $conexion->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Registrarse</title>
</head>
<body>
    <?php require 'partials/header.php'; ?>

    <?php if (!empty($message)): ?>
        <p><?= $message ?></p>
    <?php endif; ?>

    <h1>Registro</h1>
    <span>or <a href="login.php">Login</a></span>

    <form action="registrarse.php" method="post">
        <div class="form-group">
            <label>Nombre</label>
            <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Nombre del usuario" required>
        </div>
        <div class="form-group">
            <label>Apellido Paterno:</label>
            <input id="ape_paterno" name="ape_paterno" type="text" class="form-control" placeholder="Apellido paterno del usuario" required>
        </div>
        <div class="form-group">
            <label>Apellido Materno:</label>
            <input id="ape_materno" name="ape_materno" type="text" class="form-control" placeholder="Apellido materno del usuario" required>
        </div>
        <div class="form-group">
            <label>Dirección:</label>
            <input id="direccion" name="direccion" type="text" class="form-control" placeholder="Dirección del usuario" required>
        </div>
        <div class="form-group">
            <label>E-mail:</label>
            <input id="email" name="email" type="text" class="form-control" placeholder="Correo electrónico" required>
        </div>
        <div class="form-group mt-3">
            <label>Teléfono:</label>
            <input id="telefono" name="telefono" type="text" class="form-control" placeholder="Teléfono" required>
        </div>
        <div class="form-group mt-3">
            <label>Contraseña:</label>
            <input id="contraseña" name="contraseña" type="password" class="form-control" placeholder="Contraseña" required>
        </div>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
