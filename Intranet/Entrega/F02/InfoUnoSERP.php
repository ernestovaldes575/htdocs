<?php
include('../EncaCone.php');

//********************************************************************
//Informacion de la Lista
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;


if( isset($_GET['PaAMB01']) != ''){	
	$TipoMovi = $_GET["PaAMB01"];	#Tipo de Movimiento 
	$CampBusq = $_GET["PaAMB02"];	#Campo de busqueda
 }	

$CRUD = "GET";
//Carga el registro para Consulta
$InstSql = 	"SELECT RINumeProg, RINombRegl, RIFechEmis, ". 
                   "RIVigencia, RIDepeSuje, RINumeEjem,". 
        				   "RIDepeRespElab, RIDepeRespAuto, RIObserva ". 
            "FROM   eter02reglinte ".
            "WHERE  RIAyuntamiento = '$ClavAyun' AND ".
                   "RIConsForm = $ConsForm AND ".
                   "RIConsecu = $CampBusq ";
			
if ($BandMens)  
   echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ToReSql = $EjInSql->rowCount();
$ResuSql = $EjInSql->fetch();

$VC03 = 1;   $VC04 = ""; $VC05 = "";
$VC06 = "";  $VC07 = ""; $VC08 = 0;
$VC09 = "";  $VC10 = ""; $VC11 = "";
if ($ResuSql)
 { //Carga los campos
   $VC03 = $ResuSql['RINumeProg'];	
   $VC04 = $ResuSql['RINombRegl'];	
   $VC05 = $ResuSql['RIFechEmis'];	
   $VC06 = $ResuSql['RIVigencia'];
   $VC07 = $ResuSql['RIDepeSuje'];
   $VC08 = $ResuSql['RINumeEjem'];
   $VC09 = $ResuSql['RIDepeRespElab'];
   $VC10 = $ResuSql['RIDepeRespAuto'];
   $VC11 = $ResuSql['RIObserva'];		
 } 
else
 { //Busca el sisguiente registro
	$InstSql = "SELECT CASE WHEN MAX(RINumeProg) IS  NULL ". 
                    "THEN 1 ". 
                    "ELSE MAX(RINumeProg) + 1 END  AS Clave ".
	 		       "FROM   eter02reglinte ".
             "WHERE  RIAyuntamiento = '$ClavAyun' AND ".
                    "RIConsForm = $ConsForm  ";
  if ($BandMens) echo '1)'.$InstSql.'<br>'; 
  $EjInSql = $ConeBase->prepare($InstSql);
  $EjInSql->execute();
  $ResuSql = $EjInSql->fetch();
  if ($ResuSql)
    $VC03 = $ResuSql['Clave'];
  }

$RutaArch = "/ExpeElectroni/$ClavAyun/Transparen/";
	
$MesnTiMo = "";
switch( $TipoMovi ){
  case "A":	$MesnTiMo = "Registrar";  
			$CRUD = "POST";       break;
  case "M":	$MesnTiMo = "Actualizar"; 
			$CRUD = "PUT";		  break;
  case "B":	$MesnTiMo = "Eliminar";
			$CRUD = "DELETE";	  break;
 }		
?>