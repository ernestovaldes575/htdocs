
<?php
 include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
 include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasComSoc.php');

 $BandMens = true;
   
//Carga las variables
$ArCooki3 = $_COOKIE['CBusqMae'];
$ABusqMae = explode("|", $ArCooki3);
//echo '$ABusqMae'.$ABusqMae.'<br>';
$TipoDocu = $ABusqMae[0]; 
$EjerTrab = $ABusqMae[1];

$ArCooki4 = $_COOKIE['CImpoArc'];
$ABusqMae = explode("|", $ArCooki4);
$ConsNoti = $ABusqMae[0]; 
$ArchTrab = $ABusqMae[1]; 

$CampModi = "";
switch( $ArchTrab ){
    case "I":	$CampModi = "LImagen";    break;
    case "D":	$CampModi = "LAImagDocu";    break;
}

$ArCooki5 = $_COOKIE['CSubiArc'];
$ASubiArc = explode("|", $ArCooki5);
$NomArcP = $ASubiArc[4]; 

$InstSql = "UPDATE stlayers ". 
           "SET ".$CampModi." = '".$NomArcP."' ".
           "WHERE LAyuntamiento = '".$ClavAyun."' AND ".
                "LEjercicio = '".$EjerTrab."' AND ".
                "LConsecut = ".$ConsNoti." ";

if ($BandMens)  echo '1)'.$InstSql.'<br>';	
$ResuSql = $ConeBase->prepare($InstSql);
$ResuSql->execute();

$MensResp = "Algo ha fallado!!!";
if ($ResuSql) 
    $MensResp = "Registro actualizado correctamente";



?>