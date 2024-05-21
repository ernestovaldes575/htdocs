<?php
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasPagWeb.php');
date_default_timezone_set('America/Mexico_City');

$ArCook01 = $_COOKIE['CBusqMae'];
$ABusqMae = explode("|", $ArCook01);
//echo '$ABusqMae'.$ABusqMae.'<br>';
$EjerTrab = $ABusqMae[0]; 

//Bandera de visualizar msg
$BandMens = false;
if ( isset($_GET["Param0"]) )
  $BandMens = true;
  

 if ( isset($_GET["PaAMB01"]) )
  { $ConsFrac = $_GET["PaAMB01"];
	  $ArCooki2 = "$EjerTrab|$ConsFrac|";
    setcookie("CBusqMae", "$ArCooki2");}


//Datos del Catalogo
$InstSql = "SELECT  FAFraccion, FAInciso, FASubinciso, FNormatividad ".
		   "FROM   ttfracarea ".
		   "INNER JOIN ttfraccion ON  FFraccion = FAFraccion AND ".
									 "FInciso = FAInciso AND ".
						  			"FSubinciso = FASubinciso ".
			"WHERE  FAAyuntamiento = '$ClavAyun' AND ".
	   			   "FAEjercicio = $EjerTrab AND ".
	   			   "FAConsecutivo = $ConsFrac ";
if ($BandMens)  echo "1)<br>$InstSql<br>"; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();
    
//Valores de la tabla
$NumeFrac = "92"; $NumeInci = "0"; 
$NumeSubi = "";  $Nomativi = "";
if ( $ResuSql )
 { $NumeFrac = $ResuSql['FAFraccion'];
   $NumeInci = $ResuSql['FAInciso'];	   
   $NumeSubi = $ResuSql['FASubinciso'];	
   $Nomativi = $ResuSql['FNormatividad'];	
   
   $Carpeta = "A$NumeFrac$NumeInci";
   $Carpeta = ( $NumeSubi == "" )? $Carpeta : $Carpeta.$NumeSubi;
   $ArCook02 = "$EjerTrab|$ConsFrac|$NumeFrac|$NumeInci|$NumeSubi|$Nomativi|";
   setcookie("CBusqMae", "$ArCook02"); 
   
   header( "Location: $Carpeta/InformaList.php" );
} else {
  header( "Location: Fracciones.php" );
}
?>	