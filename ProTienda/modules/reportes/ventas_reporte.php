<?php
include('../../config/conexion.php');
$resultado = $conexion->query("SELECT SUM(total) AS total_ventas FROM ventas");
$datos = $resultado->fetch_assoc();
echo "<h2>Total vendido: $" . $datos['total_ventas'] . "</h2>";
?>