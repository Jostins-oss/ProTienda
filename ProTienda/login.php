<?php
session_start();
include('config/conexion.php');

if(isset($_POST['ingresar'])){
    $usuario = $_POST['usuario'];
    $clave = md5($_POST['clave']);

    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND clave='$clave'";
    $resultado = $conexion->query($sql);

    if($resultado->num_rows > 0){
        $_SESSION['usuario'] = $usuario;
        header('Location: dashboard.php');
    } else {
        echo "Credenciales incorrectas";
    }
}
?>
<form method="POST">
    <input type="text" name="usuario" placeholder="Usuario" required>
    <input type="password" name="clave" placeholder="Contraseña" required>
    <button type="submit" name="ingresar">Ingresar</button>
</form>