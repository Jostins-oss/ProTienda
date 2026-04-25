<?php
include('../../config/conexion.php');
$resultado = $conexion->query("SELECT * FROM productos");
?>

<h2>Lista de Productos</h2>
<a href="crear.php">Nuevo Producto</a>
<table border="1">
<tr>
<th>ID</th><th>Nombre</th><th>Precio</th><th>Stock</th><th>Acciones</th>
</tr>
<?php while($fila = $resultado->fetch_assoc()) { ?>
<tr>
<td><?= $fila['id_producto'] ?></td>
<td><?= $fila['nombre'] ?></td>
<td><?= $fila['precio'] ?></td>
<td><?= $fila['stock'] ?></td>
<td>
<a href="editar.php?id=<?= $fila['id_producto'] ?>">Editar</a>
<a href="eliminar.php?id=<?= $fila['id_producto'] ?>">Eliminar</a>
</td>
</tr>
<?php } ?>
</table>