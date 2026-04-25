<?php
include('../../config/conexion.php');
if(isset($_POST['vender'])){
    $total = $_POST['total'];
    $empleado = $_POST['empleado'];

    $conexion->query("INSERT INTO ventas(total, id_empleado) VALUES('$total','$empleado')");
    header('Location: historial.php');
}
?>
<form method="POST">
    <input type="number" step="0.01" name="total" placeholder="Total" required>
    <input type="number" name="empleado" placeholder="ID Empleado" required>
    <button type="submit" name="vender">Registrar Venta</button>
</form>