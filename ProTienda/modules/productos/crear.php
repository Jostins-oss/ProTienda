<?php
include('../../config/conexion.php');
if(isset($_POST['guardar'])){
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $categoria = $_POST['categoria'];

    $sql = "INSERT INTO productos(nombre, descripcion, precio, stock, categoria)
            VALUES('$nombre','$descripcion','$precio','$stock','$categoria')";
    $conexion->query($sql);
    header('Location: listar.php');
}
?>
<form method="POST">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="text" name="descripcion" placeholder="Descripción">
    <input type="number" step="0.01" name="precio" placeholder="Precio" required>
    <input type="number" name="stock" placeholder="Stock" required>
    <input type="text" name="categoria" placeholder="Categoría">
    <button type="submit" name="guardar">Guardar</button>
</form>
<head>
    <meta charset="UTF-8">
    <title>Mi Página</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>