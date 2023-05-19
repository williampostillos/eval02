<?php
if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["apePaterno"]) and !empty($_POST["apeMaterno"]) and !empty($_POST["direccion"]) and !empty($_POST["email"]) and !empty($_POST["telefono"]) and !empty($_POST["contraseña"])){
        $nombre = $_POST["nombre"];
        $apePaterno = $_POST["apePaterno"];
        $apeMaterno = $_POST["apeMaterno"];
        $direccion = $_POST["direccion"];
        $email = $_POST["email"];
        $telefono = $_POST["telefono"];
        $contraseña = $_POST["contraseña"];

        $sql = $conexion->query("INSERT INTO eval02(nombre, ape_paterno, ape_materno, direccion, email, telefono, contraseña) VALUES ('$nombre','$apePaterno','$apeMaterno','$direccion','$email','$telefono','$contraseña')");

        if($sql == 1){
            echo '<div class="alert alert-success">Usuario registrado correctamente</div>';
        }else{
            echo '<div class="alert alert-danger">Error al registrar usuario</div>';
        }

    }else{
        echo '<div class="alert alert-warning">Error</div>';
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
    <title>Mi sitio</title>
</head>
<body>
<div class="container">
    <div class="row mt-3">
        <h1>
            <?php
                echo $mensaje;
            ?>
        </h1>
        <h2>
            <?php
                echo ""
            ?>
        </h2>
        <?php
        include "../modelo/conexion.php";
        include "eliminar_usuario.php";
        ?>
        <div class="row">
            <div class="col-6 col-md-9 col-lg-6 mt-5">
                <div class="card">
                    <h2 class="card-tittle text-black text-center">
                        Datos de Usuario
                    </h2>
                </div>
                <div class="card-body">
                    <form id="formLogin" action="bienvenido.php" method="post">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Nombre del usuario" required>
                        </div>
                        <div class="form-group">
                            <label>Apellido Paterno:</label>
                            <input id="apePaterno" name="apePaterno" type="text" class="form-control" placeholder="Apellido paterno del usuario" required>
                        </div>
                        <div class="form-group">
                            <label>Apellido Materno:</label>
                            <input id="apeMaterno" name="apeMaterno" type="text" class="form-control" placeholder="Apellido materno del usuario" required>
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
            
                        <div class="col-12">
                            <a href="../index.php" class="btn btn-warning float-start" style="text-decoration: none; outline: none;">Regresar al inicio de sesión</a>
                            <button type="submit" class="btn btn-primary float-start ms-2">Registrar</button>
                            <input type="reset" class="btn btn-secondary float-start ms-2" value="Limpiar">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>  
</body>
</html>
