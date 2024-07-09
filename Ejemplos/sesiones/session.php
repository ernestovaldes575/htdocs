<?php
    session_start();
    $nombre = $_SESSION['usuario'];
    $email = $_SESSION['email'];

    //Carga las variables
        echo"php";
		$ArCooki1 = $_COOKIE['CMenu'];
		$AMenu = explode("|", $ArCooki1);
		$Nivel  = $AMenu[0]; 
		$OpcMen = $AMenu[1]; 
		$OpcSub = $AMenu[2];
        echo"php";
		echo "Nivel=$Nivel<br>";
		echo "OpcMen=$OpcMen<br>";
		echo "OpcSub=$OpcSub<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Sesion</title>
</head>
<body>
    
</body>
</html>