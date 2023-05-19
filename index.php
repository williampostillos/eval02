<?php
    include "modelo/conexion.php";
    session_start();
    error_reporting(0);

    if(isset($_SESSION["nombre"])){
        header("Location: panel.php");
    }

    if(isset($_POST["nombre"])){
        $nombre=$_POST("nomnbre");
        $contraseña=$_POST{"contraseña"};

        $sql="select * from eval02 where nombre='$nombre' and contraseña='$contraseña'";
        $result=mysqli_query($con,$sql);

        if($result->num_rows>0){
            $row = mysqli_fech_assoc($result);
            $_SESSION['nombre'] = $row['nombre'];
            header("Location: panel.php");
        }else{
            echo "<script>alert('Nombre no existe');</script>";
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
        include "modelo/conexion.php";
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
                        <div class="form-group mt-3">
                            <label>Contraseña:</label>
                            <input id="contraseña" name="contraseña" type="password" class="form-control" placeholder="Contraseña" required>
                        </div>
            
                        <div class="col-12">
                            
                            <button type="submit" class="btn btn-primary float-start">Ingresar</button>
                            <a href="controlador_usuario/registro_usuario.php" class="btn btn-warning float-start" style="text-decoration: none; outline: none;">Regresar al inicio de sesión</a>
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