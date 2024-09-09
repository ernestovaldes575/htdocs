<?php
    session_start(); // Inicia la sesión, debe ir al principio del archivo

    // Recupera los valores de la sesión en lugar de la cookie
    $ArCooki1 = $_SESSION['CMenu'];
    $AMenu = explode("|", $ArCooki1);
    $Nivel  = $AMenu[0]; 
    $OpcMen = $AMenu[1]; 
    $OpcSub = $AMenu[2];

    echo "Nivel=$Nivel<br>";
    echo "OpcMen=$OpcMen<br>";
    echo "OpcSub=$OpcSub<br>";

    $BandMens = true;
    if (isset($_GET["Param1"])) {
        $Nivel = $_GET["Param1"];
        $OpcMen = $_GET["Param2"];

        // Almacena los valores en la sesión en lugar de la cookie
        $_SESSION['CMenu'] = "$Nivel|$OpcMen|0";
        header("Location:MenuIntranet copy.php");
        exit; // Agrega exit después del header para detener el script
    }

    if (isset($_GET["Param3"])) {
        $Nivel = $_GET["Param3"];
        $OpcSub = $_GET["Param4"];

        // Actualiza la sesión con los nuevos valores
        $_SESSION['CMenu'] = "$Nivel|$OpcMen|$OpcSub";
    }

    header("Location:MenuIntranet copy.php");
    exit; // Agrega exit después del header para detener el script
?>