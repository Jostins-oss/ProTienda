<?php
include('../../config/conexion.php');
$resultado = $conexion->query("SELECT DATE(fecha) as dia, SUM(total) as ventas FROM ventas GROUP BY DATE(fecha)");

$dias = [];
$ventas = [];
while($fila = $resultado->fetch_assoc()){
    $dias[] = $fila['dia'];
    $ventas[] = $fila['ventas'];
}
?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<canvas id="miGrafica"></canvas>
<script>
const ctx = document.getElementById('miGrafica');
new Chart(ctx, {
    type: 'bar',
    data: {
        labels: <?= json_encode($dias) ?>,
        datasets: [{
            label: 'Ventas',
            data: <?= json_encode($ventas) ?>
        }]
    }
});
</script>