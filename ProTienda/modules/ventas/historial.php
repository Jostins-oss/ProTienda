<?php
include('../../config/conexion.php');
$resultado = $conexion->query("SELECT * FROM ventas");
?>
<h2>Historial de Ventas</h2>
<table border="1">
<?php while($fila = $resultado->fetch_assoc()) { ?>
<tr>
<td><?= $fila['id_venta'] ?></td>
<td><?= $fila['fecha'] ?></td>
<td><?= $fila['total'] ?></td>
</tr>
<?php } ?>
</table>