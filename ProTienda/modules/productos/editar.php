<?php
include('../../config/conexion.php');
$id = $_GET['id'];

if(isset($_POST['actualizar'])){
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    $conexion->query("UPDATE productos SET nombre='$nombre', precio='$precio', stock='$stock' WHERE id_producto=$id");
    header('Location: listar.php');
}

$producto = $conexion->query("SELECT * FROM productos WHERE id_producto=$id")->fetch_assoc();
?>
<form method="POST">
    <input type="text" name="nombre" value="<?= $producto['nombre'] ?>">
    <input type="number" step="0.01" name="precio" value="<?= $producto['precio'] ?>">
    <input type="number" name="stock" value="<?= $producto['stock'] ?>">
    <button type="submit" name="actualizar">Actualizar</button>
</form>