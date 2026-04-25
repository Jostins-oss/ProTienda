<?php
include('../../config/conexion.php');
$id = $_GET['id'];
$conexion->query("DELETE FROM productos WHERE id_producto=$id");
header('Location: listar.php');
?>