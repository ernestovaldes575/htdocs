<?php

//Carga las variables
$ArCook01 = $_COOKIE['CEncaAcc'];
//echo '$ArCook01: '.$ArCook01.'<br>';
$AEncaAcc = explode("|", $ArCook01);
$ConsAnfi = $AEncaAcc[0];  

$ArCook02  = "$ConsAnfi|";
setcookie("CBusqMae", "$ArCook02");

//Carga el registro para ABC	
$PagiRegr = "Invitado.php?PaAMB01=M&PaAMB02=$ConsAnfi";
$PagiRegr = "location: $PagiRegr";
header($PagiRegr); 
?>