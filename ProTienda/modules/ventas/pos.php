<?php
include('../../config/conexion.php');
$productos = $conexion->query("SELECT * FROM productos WHERE stock > 0");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Punto de Venta</title>
        <link rel="stylesheet" href="css/estilo.css">

</head>
<body>
    <div class="contenedor-pos">
        <h1>Punto de Venta - PROtienda</h1>
        <form method="POST" action="nueva_venta.php">
            <label>Producto:</label>
            <select name="producto">
                <?php while($p = $productos->fetch_assoc()) { ?>
                    <option value="<?= $p['id_producto'] ?>">
                        <?= $p['nombre'] ?> - $<?= $p['precio'] ?>
                    </option>
                <?php } ?>
            </select>

            <label>Cantidad:</label>
            <input type="number" name="cantidad" min="1" required>

            <label>ID Empleado:</label>
            <input type="number" name="empleado" required>

            <label>total:</label>
            <input type="number" name="empleado" required>

            <button type="submit" name="vender">Procesar Venta</button>
        </form>
    </div>
</body>
</html>