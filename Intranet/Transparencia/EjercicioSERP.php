<?php
	include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
	include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasIntra.php');

//********************************************************************
//Informacion de la Lista
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

//Carga el registro para Consulta
$InstSql = "SELECT CEJClave,CEJDescri,".
				  "(SELECT COUNT(*) ".
 				   "FROM   Transparencia.TTFracArea ".
				   "WHERE  FAEjercicio = CEJClave AND ".
						  "FAAyuntamiento = '$ClavAyun' AND ".
        				  "FAUnidad       = $ConsUnid ) AS TotaRegi ".
		   "FROM acejercicio ".
		   "ORDER BY CEJClave";
			
if ($BandMens)  
   echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchAll();
?>