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
$InstSql = 	"SELECT ISNumeRegi, ISPeriodoInf, ISPeriodoInfOtro, ISNumSes, ". 
				           "ISFechSes, ISFolioSoli,  	ISNumComit, ".
				           "ISAreaProp, ISPropuesta, ISPropuesCat, ISPropuesCatOtr, ".
				           "ISSentidoRes, ISVotacion, ISHipervRes, ISAreaResp, ".
				           "ISNota ".
			      "FROM  tt9243ainfsescomite ".
			      "WHERE ISAyuntam = '$ClavAyun' AND ".
				           "ISEjercicio = $EjerTrab AND ".
				           "ISConsecutivo = $CampBusq ";
			
if ($BandMens)  
   echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetch();

$VC05 = 1;	  $VC06 = "";    $VC07 = ""; 	  $VC08 = "";
$VC09 = "";   $VC10 = "";  	 $VC11 = "";		$VC12 = "";   
$VC13 = "";  	$VC14 = "";    $VC15 = "";    $VC16 = "";  	 
$VC17 = "";		$VC18 = "";    $VC19 = "";  	$VC20 = "";
 
if ($ResuSql)
 { //Carga los campos
   $VC05 = $ResuSql['ISNumeRegi'];
   $VC06 = $ResuSql['ISPeriodoInf'];
   $VC07 = $ResuSql['ISPeriodoInfOtro'];
   $VC08 = $ResuSql['ISNumSes'];
   $VC09 = $ResuSql['ISFechSes'];
   $VC10 = $ResuSql['ISFolioSoli'];	
   $VC11 = $ResuSql['ISNumComit'];	
   $VC12 = $ResuSql['ISAreaProp'];	
   $VC13 = $ResuSql['ISPropuesta'];	
   $VC14 = $ResuSql['ISPropuesCat'];
   $VC15 = $ResuSql['ISPropuesCatOtr'];
   $VC16 = $ResuSql['ISSentidoRes'];
   $VC17 = $ResuSql['ISVotacion'];
   $VC18 = $ResuSql['ISHipervRes'];
   $VC19 = $ResuSql['ISAreaResp'];	
   $VC20 = $ResuSql['ISNota'];
 } 
else
 { //Busca el sisguiente registro
	$InstSql = "SELECT CASE WHEN MAX(ISNumeRegi) IS  NULL THEN 1 ELSE  MAX(ISNumeRegi) + 1 END  AS Clave ".
	 		   "FROM  tt9243ainfsescomite ".
			   "WHERE ISAyuntam = '$ClavAyun' AND ".
				  "ISEjercicio = $EjerTrab AND ".
				  "ISConsFrac = $ConsFrac AND ".
				  "ISNumeTrim = '$TrimTrab' ";
  if ($BandMens) echo '1)'.$InstSql.'<br>'; 
  $EjInSql = $ConeBase->prepare($InstSql);
  $EjInSql->execute();
  $ResuSql = $EjInSql->fetch();
  if ($ResuSql)
    $VC03 = $ResuSql['Clave'];
  }

$RutaArch = "/ExpeElectroni/$ClavAyun/$EjerTrab/Transparen/$FracTrab/$TrimTrab/";
	
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