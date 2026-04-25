<?php
include('../../config/conexion.php');
$id = $_GET['id'];
$venta = $conexion->query("SELECT * FROM ventas WHERE id_venta=$id")->fetch_assoc();
?>
<h2>Ticket de Venta</h2>
<p>ID Venta: <?= $venta['id_venta'] ?></p>
<p>Fecha: <?= $venta['fecha'] ?></p>
<p>Total: $<?= $venta['total'] ?></p>
<button onclick="window.print()">Imprimir Ticket</button>