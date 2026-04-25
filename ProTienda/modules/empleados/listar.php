<?php
include('../../config/conexion.php');
$resultado = $conexion->query("SELECT * FROM empleados");
?>
<h2>Lista de empleados</h2>
<a href="crear.php">Nuevo</a>
<table border="1">
<?php while($fila = $resultado->fetch_assoc()) { ?>
<tr>
<td><?= $fila['id_empleado'] ?></td>
<td><?= $fila['nombre'] ?></td>
<td><?= $fila['puesto'] ?></td>
<td><?= $fila['telefono'] ?></td>
<td><?= $fila['correo'] ?></td>
</tr>
<?php } ?>
</table>

