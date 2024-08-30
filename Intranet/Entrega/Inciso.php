<?php
$RutaEnca = $_SERVER['DOCUMENT_ROOT'].'/Intranet/';
include($RutaEnca.'Encabezado/EncaCook.php');
include($RutaEnca.'Conexion/ConBasEntrega.php');
date_default_timezone_set('America/Mexico_City');

//Bandera de visualizar msg
$BandMens = true;

if ( isset($_GET["ParBus01"]) )
  $ConsForm = $_GET["ParBus01"];
   
//Datos del Catalogo
$InstSql = "SELECT FAFormato,FFormato ".
           "FROM   etformarea ".
           "INNER JOIN ETFormato ON FNumero = FAFormato ". 
           "WHERE  FAAyuntamiento = '$ClavAyun' AND ". 
                  "FAUnidad = $ConsUnid AND ". 
                  "FAConsecutivo = $ConsForm ";
if ($BandMens)  echo "1)<br>$InstSql<br>"; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();
    
//Valores de la tabla
if ( $ResuSql )
 { $ClavForm = $ResuSql['FAFormato'];
   $DescForm = $ResuSql['FFormato'];	   
   
   $Carpeta = "F$ClavForm";
   $ArCook02 = "$ConsForm|$ClavForm|$DescForm|";
   setcookie("CBusqMae", "$ArCook02"); 
   
   header( "Location: $Carpeta/InfoList.php" );
} else {
  header( "Location: Formato.php" );
}
?>	