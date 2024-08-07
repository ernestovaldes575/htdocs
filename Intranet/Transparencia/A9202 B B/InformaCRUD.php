<?php
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasTranEjer.php');

$TrimTrab = $ABusqMae[1];	//Trimestre de trabajo 
$ConsFrac = $ABusqMae[2];	//Consecutivo de la Fraccion del Unidad
$FracTrab = $ABusqMae[3];	//Fraccion de trabajo 92,93

//********************************************************************
//Informacion de la Lista
//Bandera de visualizar msg
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

//*****************************************************************
//Para operacion A B C
$CRUD 	  = $_POST['C00'];
$TipoMovi = $_POST['C01'];
$CampBusq = $_POST['C02'];   

if ($BandMens)  
  {	 echo 'CRUD)'.$CRUD.'<br>';
     echo 'TipoMovi)'.$TipoMovi.'<br>';
     echo 'CampBusq)'.$CampBusq.'<br>';
  }

$VC05 = $_POST['C05']; 
$VC06 = $_POST['C06'];
$VC07 = $_POST['C07'];
// Campo 08 Hipervinulo 
$VC09 = $_POST['C09'];  
$VC10 = $_POST['C10'];
$VC11 = $_POST['C11'];
$VC12 = $_POST['C12'];

//Agregar campos
switch ( $CRUD )
{ 	case "POST": //Alta
	/*
	SELECT `OConsecutivo`, `OAyuntam`, `OEjercicio`, 
		   `OConsFrac`, `ONumeTrim`, `ONumeRegi`,
		    `OFechInicio`, `OFechTerm`, `OHipervin`, 
			`OAreaResp`, `OFechAct`, `OFechValid`, 
			`ONota` FROM `tt9202borgan`
	*/ 
		$InstSql = "INSERT INTO tt9202borgan ".				//Cambiar tabla
				   "VALUES (NULL,'$ClavAyun',$EjerTrab,".	
							"$ConsFrac,'$TrimTrab','$VC05',".	
							"'$VC06','$VC07','',".			
							"'$VC09','$VC10','$VC11',".
							"'$VC12')";		
		break;
	case "PUT": //Cambio
		$InstSql = 	"UPDATE tt9202borgan ". 						//Cambiar tabla
					"SET    ONumeRegi = '$VC05', ".				
						   "OFechInicio = '$VC06', ".					
						   "OFechTerm = '$VC07',".	
						   "OAreaResp = '$VC09',".						 
				   		   "OFechAct = '$VC10',".					
						   "OFechValid = '$VC11', ".  					
						   "ONota = '$VC12' ".
					"WHERE OAyuntam = '$ClavAyun' AND ".		
						  "OEjercicio = '$EjerTrab' AND ".			
				  		  "OConsecutivo = $CampBusq ";			
 						 // "ONumeRegi = $CampBusq";
	break;
	case "DELETE": //Eliminar
		$InstSql = "DELETE FROM tt9202borgan ". 					//Cambiar tabla
				   "WHERE OAyuntam = '$ClavAyun' AND ".		//Cambiar campo
						  "OEjercicio = '$EjerTrab' AND ".			//Cambiar campo
				  		  "OConsecutivo = '$CampBusq' ";			//Cambiar campo
 						  //"ONumeRegi = $CampBusq";
	break;	
}		

//Ejecuta la instruccion
if ($BandMens)  echo '1)'.$InstSql.'<br>';
$ResuSql = $ConeBase->prepare($InstSql);
$ResuSql->execute();
$MensResp = ($ResuSql) ?  "Algo ha fallado!!!" : "Registro actualizado correctamente";
if (!$ResuSql) 
	echo '<script>alert("'.$MensResp.'");</script>'; 

//Para la ALTA
if ($CRUD == "POST") 
 { //Recupera la secuencia 
   $InstSql = "SELECT @@identity AS id "; 	
   if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
   $RespSql = $ConeBase->prepare($InstSql);
   $RespSql->execute();
   $ResuSql = $RespSql->fetch();

   $CampBusq = 0;		
   if ($ResuSql)
	    $CampBusq = $ResuSql[0];
  }

//Defina pagina de regreso
$PagiRegr = ($CRUD == "DELETE") ? "location: InformaList.php" :
								  "location: Informa.php?PaAMB01=M&PaAMB02=".$CampBusq ; 

if (!$BandMens) header($PagiRegr);	
?>