<?php
include('../../config/conexion.php');
$resultado = $conexion->query("SELECT * FROM proveedores");
?>
<h2>Lista de Proveedores</h2>
<a href="crear.php">Nuevo</a>
<table border="1">
<?php while($fila = $resultado->fetch_assoc()) { ?>
<tr>
<td><?= $fila['nombre'] ?></td>
<td><?= $fila['telefono'] ?></td>
<td><?= $fila['direccion'] ?></td>
</tr>
<?php } ?>
</table>