<?php

if(!empty($_GET["idUsuario"])){
    $idUsuario=$_GET["idUsuario"];
        $sql=$conexion->query("delete from usuario where idUsuario='$idUsuario'");
        if($sql==1){
            echo '<div class="alert alert-warning">Usuario eliminado</div>';
        }else{
            echo '<div class="alert alert-danger">Error al eliminar usuario</div>';
        }
    }
?>
