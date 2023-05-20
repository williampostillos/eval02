<?php

session_start();

require 'modelo/conexion.php';

if (!empty($_POST['email']) && !empty($_POST['contraseña'])) {
    $records = $conn->prepare('SELECT idUsuario, email, contraseña FROM usuario WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();

    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['contraseña'], $results['contraseña'])) {
        $_SESSION['idUsuario'] = $results['idUsuario'];
        header('Location: controlador_usuario/vista_usuario.php');
    } else {
        $message = 'Contraseña o email incorrectos';
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php require 'partials/header.php'  ?>
    <h1>Login</h1>
    <span>or <a href="registrarse.php">Registrarse</a></span>

    <?php if (!empty($message)) : ?>
        <p><?= $message ?></p>
    <?php endif;?>

    <form action="login.php" method="post">
        <input type="text" name="email" placeholder="E-mail" required>
        <input type="password" name="contraseña" placeholder="Contraseña" required>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>
