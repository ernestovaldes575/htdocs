<?php
    session_start();
    $nombre = $_SESSION['usuario'];
    $email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Sesion</title>
</head>
<body>
    <h2>
        Bienvenido <?php echo $nombre;?>
    </h2>
    <h2>
        Correo <?php echo $email;?>
    </h2>
</body>
</html>