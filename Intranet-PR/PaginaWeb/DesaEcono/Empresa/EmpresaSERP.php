<?php
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasPagWeb.php');

//********************************************************************
//Informacion de la Lista

//Bandera de visualizar msg
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

//Carga el registro para ABC	
if ( isset($_GET['PaAMB01']) != ''){	
  $TipoMovi = $_GET["PaAMB01"];	#Tipo de Movimiento 
  $ConsBusq = $_GET["PaAMB02"];	#Consecutivo de busqueda
  }
			
$InstSql =  "SELECT EEmpresa, ERespresentante,". 
				   "EContacto, ETeleCont, EHoraAten, ".
				   "ECorreo, EContra ".
			"FROM  etempresa ".				
			"WHERE EAyuntamiento = '$ClavAyun' AND ".
				  "EConsecut = $ConsBusq ";;
if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$MensResp = ($EjInSql) ?  "Algo ha fallado!!!" : "Registro actualizado correctamente";
if (!$ResuSql) 
  echo '<script>alert("'.$MensResp.'");</script>'; 
$ResuSql = $EjInSql->fetch();

$VC03 = "";  $VC04 = ""; 
$VC05 = "";  $VC06 = "";
$VC07 = "";  $VC08 = ""; $VC09 = "";
if ($ResuSql)
  { $VC03 = $ResuSql[0];	//EEmpresa
	$VC04 = $ResuSql[1];	//ERespresentante
	$VC05 = $ResuSql[2];	//EContacto
	$VC06 = $ResuSql[3];	//ETeleCont
	$VC07 = $ResuSql[4];	//EHoraAten
	$VC08 = $ResuSql[5];	//ECorreo
	$VC09 = $ResuSql[6];	//EContra		
  }
	
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
