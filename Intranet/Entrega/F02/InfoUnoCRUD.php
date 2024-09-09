<?php
include('../EncaCone.php');

//********************************************************************
//Informacion de la Lista
//Bandera de visualizar msg
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

$BandMens = false;
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

$VC03 = $_POST['C03'];					//Leer campos
$VC04 = $_POST['C04'];
$VC05 = $_POST['C05'];
$VC06 = $_POST['C06'];
$VC07 = $_POST['C07'];
$VC08 = $_POST['C08'];
$VC09 = $_POST['C09'];  
$VC10 = $_POST['C10'];
$VC11 = $_POST['C11'];

//Agregar campos
switch ( $CRUD )
{ 	case "POST": //Alta
		$InstSql = "INSERT INTO eter02reglinte ".			//Cambiar tabla
				   "VALUES (NULL,$ConsForm,'$ClavAyun',".	//Cambiar campo
								 "$VC03,'$VC04','$VC05',".	//Cambiar campo
								 "'$VC06','$VC07',$VC08,".	//Cambiar campo
								 "'$VC09','$VC10','$VC11',".
								 "$ConsUsua,DATE(NOW()),'A')";	//Cambiar campo
		break;
	case "PUT": //Cambio
		$InstSql = 	"UPDATE eter02reglinte ". 				//Cambiar tabla
					"SET    RINumeProg = $VC03,". 			//Cambiar campo
						   "RINombRegl = '$VC04',".			//Cambiar campo
						   "RIFechEmis = '$VC05', ".		//Cambiar campo
						   "RIVigencia = '$VC06', ".		//Cambiar po
						   "RIDepeSuje = '$VC07',".			//Cambiar campo
						   "RINumeEjem = $VC08,".			//Cambiar campo
						   "RIDepeRespElab = '$VC09',".		//No considera 
				   		   "RIDepeRespAuto = '$VC10',".		//Cambiar campo
						   "RIObserva = '$VC11',".  		//Cambiar campo
						   "RIModiSePu = $ConsUsua, ".
						   "RIFechModi = DATE(NOW()) ".				
					"WHERE  RIAyuntamiento = '$ClavAyun' AND ".
                   		   "RIConsForm = $ConsForm AND ".
                   		   "RIConsecu = $CampBusq ";
	break;
	case "DELETE": //Eliminar
		$InstSql = "UPDATE eter02reglinte ". 				//Cambiar tabla
					"SET   RIModiSePu = $ConsUsua, ". 
						  "RIFechModi = DATE(NOW()), ". 
						  "RIEstasdo  = 'B' ". 				//Cambiar tabla
				   "WHERE  RIAyuntamiento = '$ClavAyun' AND ".
						  "RIConsForm = $ConsForm AND ".
						  "RIConsecu = $CampBusq ";
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
$PagiRegr = ($CRUD == "DELETE") ? "location: InfoList.php" :
								  "location: InfoUno.php?PaAMB01=M&PaAMB02=".$CampBusq ; 

if (!$BandMens) header($PagiRegr);	
?>