<?php

//Carga las variables
$ArCook01 = $_COOKIE['CEncaAcc'];
//echo '$ArCook01: '.$ArCook01.'<br>';
$AEncaAcc = explode("|", $ArCook01);
$ConsRepa = $AEncaAcc[0]; 

$ArCook02  = "$ConsRepa|";
setcookie("CBusqMae", "$ArCook02");

//Carga el registro para ABC	
$PagiRegr = "Repartidor.php?PaAMB01=M&PaAMB02=$ConsRepa";
$PagiRegr = "location: $PagiRegr";
header($PagiRegr); 
?>