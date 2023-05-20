<?php

if(!empty($_POST["btnregistrar"])){
    if (!empty($_POST["nombre"]) && !empty($_POST["descripcion"]) && !empty($_POST["stock"]) && !empty($_POST["precioVenta"])) {
        $idProducto = $_POST["idProducto"];
        $nombre = $_POST["nombre"];
        $descripcion = $_POST["descripcion"];
        $stock = $_POST["stock"];
        $precioVenta = $_POST["precioVenta"];

        $sql = $conexion->query("UPDATE producto SET nombre ='$nombre',descripcion ='$descripcion',stock ='$stock',precioVenta ='$precioVenta' WHERE idProducto ='$idProducto'");

        if($sql){
            header("location:vista_producto.php");
        }else{
            echo "<div class='alert alert-danger'>Error al editar Producto </div>";
        }

    }else{
        echo "<div class='alert alert-warning'>Error</div>";
    }
}

?>