<?php
session_start();
include("conexion.php");

$usuario=$_POST["nombre_usuario"];
$contrasena=$_POST["contrasena"];

$consulta_sql="SELECT * FROM usuarios WHERE nombre_usuario='$usuario' AND contrasena='$contrasena'";
$resultado=$conexion->query($consulta_sql);
if ($resultado->num_rows > 0) {
    $usuarioo = $resultado->fetch_assoc();
    
    $_SESSION['usuario'] = $usuarioo['NOMBRE_USUARIO'];
    $_SESSION['rol'] = $usuarioo['ROL'];


 if($usuarioo['ROL'] == 'admin'){
        header("Location: dashboard_admin.php");
    } elseif($usuarioo['ROL'] == 'organizador'){
        header("Location: dashboard_organizador.php");
    } elseif($usuarioo['ROL'] == 'tomadorLista'){
        header("Location: dashboard_tomador.php");
    } else {
        // rol desconocido, redirigir al login con error
        header("Location: index.php?error=1");
    }

    exit;

} else {
    header("Location: index.php?error=1"); 
    exit;
}
?>