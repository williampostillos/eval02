<?php
session_start();

if(!isset($_SESSION['nombre'])){
    header("Location: index.php");
}
?>
<h1>Hola</h1>