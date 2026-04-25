<?php
include('../../config/conexion.php');
if(isset($_POST['guardar'])){
    $nombre = $_POST['nombre'];
    $puesto = $_POST['puesto'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];

    $conexion->query("INSERT INTO empleados(nombre, puesto, telefono, correo)
      VALUES('$nombre','$puesto','$telefono','$correo')");
    header('Location: listar.php');
}
?>
<form method="POST">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="text" name="puesto" placeholder="Puesto">
    <input type="text" name="telefono" placeholder="Teléfono">
    <input type="email" name="correo" placeholder="Correo">
    <button type="submit" name="guardar">Guardar</button>
</form>