<?php
$RutaEnca = $_SERVER['DOCUMENT_ROOT'].'/Intranet/';
include($RutaEnca.'Encabezado/EncaCook.php');
include($RutaEnca.'Conexion/ConBasEntrega.php');

//Carga la cokkie
if(isset($_COOKIE['CBusqMae'])){
	$ArCook01 = $_COOKIE['CBusqMae'];
	$ABusqMae = explode("|", $ArCook01);
    $ConsForm = $ABusqMae[0];
    $ClavForm = $ABusqMae[1];
    $DescForm = $ABusqMae[2];

    //echo "ConsForm: $ConsForm";
    //echo "ClavForm: $ClavForm";
    //echo "DescForm: $DescForm";
}

?>