<?php

//Carga las variables
$ArCook01 = $_COOKIE['CEncaAcc'];
//echo '$ArCook01: '.$ArCook01.'<br>';
$AEncaAcc = explode("|", $ArCook01);
$ConsInvi = $AEncaAcc[0]; 

$ArCook02  = "$ConsInvi|";
setcookie("CBusqMae", "$ArCook02");

//Carga el registro para ABC	
$PagiRegr = "Invitado.php?PaAMB01=M&PaAMB02=$ConsInvi";
$PagiRegr = "location: $PagiRegr";
header($PagiRegr); 
?>