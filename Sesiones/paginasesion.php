<?php
    session_start();
    $nombre =  $_SESSION['usuario'];
    $email = $_SESSION['email'];

    $ConeInEx = $_SESSION['ConeInEx'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesiones</title>
</head>
<body>
    <h1>
        Sesiones
    </h1>
    <h2>Tu nombre es: <?php echo $nombre;?></h2>
    <h2>Tu correo es: <?php echo $email;?></h2>
    <h2><?=$ConeInEx?></h2>
</body>
</html>