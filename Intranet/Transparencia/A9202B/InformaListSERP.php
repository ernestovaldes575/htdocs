<?php
	include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
	include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasTranEjer.php');

//********************************************************************

$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

//Carga el registro para Consulta
$InstSql = "SELECT OConsecutivo, OAyuntam, OEjercicio, ".			//Modificar campos
				  "OFechInicio, OFechTerm ".
			"FROM  tt9202borgan  ";								//Modifica tabla
			//"WHERE OAyuntam = '$ClavAyun' AND ".				//Modifica condicion
				  //"OEjercicio = $EjerTrab AND  ";				
			
if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchAll();
?>