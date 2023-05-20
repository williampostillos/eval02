<?php

if(!empty($_GET["idProducto"])){
    $idProducto=$_GET["idProducto"];
        $sql=$conexion->query("delete from producto where idProducto='$idProducto'");
        if($sql==1){
            echo '<div class="alert alert-warning">Producto eliminado</div>';
        }else{
            echo '<div class="alert alert-danger">Error al eliminar Producto</div>';
        }
    }
?>
