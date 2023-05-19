<?php
include "modelo/conexion.php";
error_reporting(0);
session_start();


if(isset($_SESSION["nombre"])){
    header("Location: panel.php");
}

if(isset($_POST['submit'])){
    $nombre = $_POST['nombre'];
    $contraseña = md5($_POST['contraseña']);
    $pcontraseña = md5($_POST['pcontraseña']);
    
    if($contraseña==$pcontraseña){
        $sql="select * from usuario where
        nombre='$nombre'";
        $result = mysqli_query($conexion, $sql);
        if(!result->num_rows>0){
            $sql="insert into eval02
            (nombre, contraseña)";
            $result=mysqli_query($conexion, $sql);

            if($result){
                echo "<script>alert('El usuario ya existe')</script>";
                $nombre="";
                $contraseña="";
                $nombre = $_POST['nombre'];
                $contraseña = md5($_POST['contraseña']);

            
            }else{
                echo "<script>alert('El usuario no existe')</script>";
            }
        }else{
            echo "<script>alert('El usuario ya existe')</script>";
        }
    }else{
        echo "<script>alert('El usuario no existe')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <?php
            if($nombre == 'echo $nombre' && $contraseña == 'william.postillos@tecsup.edu.pe'){

            }
            else{
            ?>
                <h1>Usuario no valido</h1>
                <a href="index.php" class="btn btn-danger">Regresar al Login</a>
                <?php
                }
                
            ?>
            <?php
            
            ?>
                </div>
    </div>      
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
</body>
</html>