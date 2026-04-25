<?php
session_start();
if(!isset($_SESSION['usuario'])){
    header('Location: login.php');
}

$rol = $_SESSION['rol'] ?? 'Empleado';
?>

<?php if($rol == 'Administrador'){ ?>
    <a href="modules/empleados/listar.php">Gestionar Empleados</a>
<?php } ?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard PROtienda</title>
</head>
<body>
    <h1>Panel Principal - PROtienda</h1>
    <ul>
        <li><a href="modules/productos/listar.php">Gestión de Productos</a></li>
        <li><a href="modules/proveedores/listar.php">Proveedores</a></li>
        <li><a href="modules/empleados/listar.php">Empleados</a></li>
        <li><a href="modules/ventas/historial.php">Ventas</a></li>
        <li><a href="modules/reportes/ventas_reporte.php">Reportes</a></li>
    </ul>
</body>
</html>