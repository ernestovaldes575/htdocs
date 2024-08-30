<?php
	include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
	include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasTranspa.php');

//********************************************************************
//Informacion de la Lista
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;


$ArCooki1 = "2024|";
setcookie("CEncaMae", "$ArCooki1");

//Carga el registro para Consulta
$InstSql = "SELECT FFraccion,count(*) AS TotaFrac ".
		   "FROM   ttfraccion ".
		   "GROUP BY FFraccion ".
		   "ORDER BY FFraccion ";
			
if ($BandMens) echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchAll();
?>