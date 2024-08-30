<?php
// Verificar si se ha enviado el formulario de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si las credenciales son válidas (aquí deberías tener tu propia lógica de autenticación)
    $usuario_valido = "usuario";
    $contrasena_valida = "contraseña";

    if ($_POST['usuario'] == $usuario_valido && $_POST['contrasena'] == $contrasena_valida) {
        // Si las credenciales son válidas, establecer una cookie de sesión
        $cookie_name = "usuario";
        $cookie_value = $_POST['usuario'];
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // Cookie válida por 30 días
        header("Location: MenuLogion01.php");
    } else {
        $mensaje_error = "Usuario o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <?php if(isset($mensaje_error)) { echo "<p>$mensaje_error</p>"; } ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Usuario: <input type="text" name="usuario"><br>
        Contraseña: <input type="password" name="contrasena"><br>
        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>
