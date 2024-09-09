<?php
// Verificar si el usuario está autenticado (si la cookie está establecida)
if(isset($_COOKIE['usuario'])) {
    $usuario_autenticado = $_COOKIE['usuario'];
    $mostrar_submenu = true;
} else {
    // Si no hay cookie, redirigir al usuario a la página de inicio de sesión
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Menú</title>
</head>
<body>
    <h2>Bienvenido <?php echo $usuario_autenticado; ?></h2>
    
    <!-- Menú principal -->
    <ul>
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Acerca de</a></li>
        <li><a href="#">Contacto</a></li>
        <?php if($mostrar_submenu): ?>
        <!-- Submenú -->
        <li>
            <a href="#">Opciones</a>
            <ul>
                <li><a href="#">Opción 1</a></li>
                <li><a href="#">Opción 2</a></li>
                <li><a href="#">Opción 3</a></li>
            </ul>
        </li>
        <?php endif; ?>
        <li><a href="logout.php">Cerrar Sesión</a></li>
    </ul>
</body>
</html>
