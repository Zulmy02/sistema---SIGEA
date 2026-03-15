<?php


?>
<link rel="stylesheet" href="css/navbarstyle.css">

<header class="main-header">
    <div class="logo-container">
        <img src="logos/logo3.jpeg" alt="SEP" class="logo-img">
        <img src="logos/logo2.jpeg" alt="TecNM" class="logo-img">
        <img src="logos/logo4.jpeg" alt="IT Chetumal" class="logo-img">
    </div>

    <div class="navbar-container">
        <nav class="navbar">
            <a href="dashboard2.php">Inicio</a>

            <?php if ($_SESSION['rol'] == 'admin'): ?>
                <a href="usuarios.php">Usuarios</a>
                <a href="configuracion.php">Opciones</a>
            <?php endif; ?>

            <?php if ($_SESSION['rol'] == 'organizador'): ?>
                <a href="eventos.php">Mis Eventos</a>
                <a href="reportes.php">Reportes</a>
            <?php endif; ?>

            <?php if ($_SESSION['rol'] == 'tomadorLista'): ?>
                <a href="scanner.php">Pasar Lista</a>
            <?php endif; ?>

           <a href="logout.php" class="btn-salir" onclick="return confirmarCerrarSesion()">Cerrar sesión</a>
        </nav>
    </div>
</header>
<script>
function confirmarCerrarSesion() {
    // Esto detiene el enlace si el usuario da en "Cancelar"
    var respuesta = confirm("¿Estás seguro de que quieres cerrar sesión?");
    return respuesta;
}
</script>
