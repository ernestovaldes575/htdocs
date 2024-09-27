<?php
include("../EncaCone.php");

//********************************************************************
//Informacion de la Lista
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;


if( isset($_GET["PaAMB01"]) != ""){	
	$TipoMovi = $_GET["PaAMB01"];	#Tipo de Movimiento 
	$CampBusq = $_GET["PaAMB02"];	#Campo de busqueda 
 }

$CRUD = "GET";
//Carga el registro para Consulta
$InstSql = "SELECT  EPNumeProg , EPNumeActa , EPFechApro , EPNumeGace , EPFechPUbli , EPUltiRevi , EPMediDifu , EPUnidResg , EPObservacion  ". 
 			"FROM   et03estrprog ". 
			"WHERE   EPConsecut = $CampBusq  AND  EPAyuntamiento = '$ClavAyun'  AND  EPConsForm = $ConsForm  "; 
			
if ($BandMens)  
   echo "1) $InstSql <br>"; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ToReSql = $EjInSql->rowCount();
$ResuSql = $EjInSql->fetch();
 
  $VC03 = 0;  $VC04 = 0;  $VC05 = "";  $VC06 = 0;  $VC07 = 0;  $VC08 = 0;  $VC09 = "";  $VC10 = "";  $VC11 = 0;  
 
if ($ResuSql) 
 { //Carga los campos
   $VC03 = $ResuSql["EPNumeProg"];	
   $VC04 = $ResuSql["EPNumeActa"];	
   $VC05 = $ResuSql["EPFechApro"];	
   $VC06 = $ResuSql["EPNumeGace"];	
   $VC07 = $ResuSql["EPFechPUbli"];	
   $VC08 = $ResuSql["EPUltiRevi"];	
   $VC09 = $ResuSql["EPMediDifu"];	
   $VC10 = $ResuSql["EPUnidResg"];	
   $VC11 = $ResuSql["EPObservacion"];	
 } 
else
 { //Busca el sisguiente registro
	$InstSql = "SELECT CASE WHEN MAX( EPNumeProg ) IS  NULL ". 
                    "THEN 1 ". 
                    "ELSE MAX( EPNumeProg ) + 1 END  AS Clave ".
	 		   "FROM   et03estrprog ".
              "WHERE   EPAyuntamiento = '$ClavAyun'  AND  EPConsForm = $ConsForm  ";
  if ($BandMens) echo "1) $InstSql <br>"; 
  $EjInSql = $ConeBase->prepare($InstSql);
  $EjInSql->execute();
  $ResuSql = $EjInSql->fetch();
  if ($ResuSql)
    $VC03 = $ResuSql["Clave"];
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
