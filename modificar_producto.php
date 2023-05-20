<?php
include "modelo/conexion.php";

$idProducto=$_GET["idProducto"];

$sql=$conexion->query("select * from producto where idProducto='$idProducto'");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
    <form class="col-4 p-3 m-auto" method="POST">
        <h3 class="text-center alert alert-secondary p-3">Modificar Producto</h3>
        <input type="hidden" name="idProducto" value="<?= $_GET["idProducto"] ?>">
        <?php
        include "controlador_producto/modificar_producto.php";
        while($datos=$sql->fetch_object()){?>
        <div class="form-group">
            <label>Nombre</label>
            <input id="nombre" name="nombre" type="text" class="form-control" value="<?= $datos->nombre ?>" required>
        </div>
        <div class="form-group">
            <label>Descripcion:</label>
            <input id="descripcion" name="descripcion" type="text" class="form-control" value="<?= $datos->descripcion ?>" required>
        </div>
        <div class="form-group">
            <label>Stock:</label>
            <input id="stock" name="stock" type="text" class="form-control" value="<?= $datos->stock ?>" required>
        </div>
        <div class="form-group">
            <label>Precio de venta:</label>
            <input id="precioVenta" name="precioVenta" type="text" class="form-control" value="<?= $datos->precioVenta ?>" required>
        </div>
        <?php }
        ?>
        
        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Modificar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>
