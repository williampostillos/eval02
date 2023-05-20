<?php
session_start();

require 'modelo/conexion.php';

if (isset($_SESSION['idUsuario'])) {
    $records = $conn->prepare('select idUsuario, email, contraseña from usuario where idUsuario = :idUsuario');
    $records->bindParam(':idUsuario', $_SESSION['idUsuario']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $usuario = null;

    if(count($results)>0{
        $usuario = $results;
    })
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <?php require 'partials/header.php'  ?>

    <?php if (!empty($usuario)): ?>
        <br>Hola <?= $usuario['email'] ?>
        <br>Tú estás en la app
        <a href="logout.php">Cerrar sesión</a>
    <?php else: ?>
        <h1>Ingresa sesión o regístrate</h1>
        <a href="index.php">Inicio</a> or 
        <a href="registrarse.php">Registrarse</a>
    <?php endif; ?>
</body>
</html>
