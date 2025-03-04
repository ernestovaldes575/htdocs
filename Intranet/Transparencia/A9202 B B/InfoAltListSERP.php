<?php
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasTranEjer.php');

$TrimTrab = $ABusqMae[1];	//Trimestre de trabajo 
$ConsFrac = $ABusqMae[2];	//Consecutivo de la Fraccion del Unidad
$FracTrab = $ABusqMae[3];	//Fraccion de trabajo 92,93
$NumeInci = $ABusqMae[4];	//Numero Inciso
$NumeSubi = $ABusqMae[5];	//Numero de Subinciso
$Nomativi = $ABusqMae[6];	//Normatividad

//********************************************************************
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

if( isset($_GET['PaAMB01']) != ''){	
      $TipoMovi = $_GET["PaAMB01"];	#Tipo de Movimiento 
      $CampBusq = $_GET["PaAMB02"];	#Campo de busqueda
}

//catalogo de areas
include "../tcarea.php";

//Carga el registro para Consulta
$InstSql = "SELECT CASE WHEN MAX(ONumeRegi) IS  NULL ". 
            "THEN 0 ". 
            "ELSE MAX(ONumeRegi)  END  AS NumeRegi ".
	      "FROM  tt9202borgan ".
            "WHERE OAyuntam = '$ClavAyun' AND ".
                  "OEjercicio = $EjerTrab AND ".
                  "OConsFrac = $ConsFrac AND ".
                  "ONumeTrim = '$TrimTrab' ";
if ($BandMens) echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ToReSql = $EjInSql->rowCount();
$ResuSql = $EjInSql->fetch();
$NumeRegi = ($ResuSql) ? $ResuSql['NumeRegi'] : 0;  
	
?>