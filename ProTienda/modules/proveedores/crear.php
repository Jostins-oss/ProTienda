<?php
include('../../config/conexion.php');
if(isset($_POST['guardar'])){
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];

    $conexion->query("INSERT INTO proveedores(nombre, telefono, direccion)
                      VALUES('$nombre','$telefono','$direccion')");
    header('Location: listar.php');
}
?>
<form method="POST">
    <input type="text" name="nombre" placeholder="Nombre proveedor" required>
    <input type="text" name="telefono" placeholder="Teléfono">
    <input type="text" name="direccion" placeholder="Dirección">
    <button type="submit" name="guardar">Guardar</button>
</form>