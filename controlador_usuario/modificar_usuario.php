<?php

if(!empty($_POST["btnregistrar"])){
    if (!empty($_POST["nombre"]) && !empty($_POST["ape_paterno"]) && !empty($_POST["ape_materno"]) && !empty($_POST["direccion"]) && !empty($_POST["email"]) && !empty($_POST["telefono"]) && !empty($_POST["contraseña"])) {
        $idUsuario = $_POST["idUsuario"];
        $nombre=$_POST["nombre"];
        $ape_paterno=$_POST["ape_paterno"];
        $ape_materno=$_POST["ape_materno"];
        $direccion=$_POST["direccion"];
        $email=$_POST["email"];
        $telefono=$_POST["telefono"];
        $contraseña=$_POST["contraseña"];

        $sql = $conexion->query("UPDATE usuario SET nombre ='$nombre',ape_paterno ='$ape_paterno',ape_materno ='$ape_materno',direccion ='$direccion',email ='$email',telefono ='$telefono', contraseña ='$contraseña' WHERE idUsuario ='$idUsuario'");

        if($sql){
            header("location:vista_usuario.php");
        }else{
            echo "<div class='alert alert-danger'>Error al editar Usuario </div>";
        }

    }else{
        echo "<div class='alert alert-warning'>Error</div>";
    }
}

?>