<?php
require 'modelo/conexion.php';

$message = '';

if (!empty($_POST["nombre"]) && !empty($_POST["descripcion"]) && !empty($_POST["stock"]) && !empty($_POST["precioVenta"])) {
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $stock = $_POST["stock"];
    $precioVenta = $_POST["precioVenta"];

    $sql = "insert into producto (nombre, descripcion, stock, precioVenta) values ('$nombre','$descripcion','$stock','$precioVenta')";

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
            <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Nombre del producto" required>
        </div>
        <div class="form-group">
            <label>Descripcion:</label>
            <input id="descripcion" name="descripcion" type="text" class="form-control" placeholder="Descripcion" required>
        </div>
        <div class="form-group">
            <label>Stock:</label>
            <input id="stock" name="stock" type="text" class="form-control" placeholder="Stock" required>
        </div>
        <div class="form-group">
            <label>Precio de venta:</label>
            <input id="precioVenta" name="precioVenta" type="text" class="form-control" placeholder="Precio de venta" required>
        </div>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
