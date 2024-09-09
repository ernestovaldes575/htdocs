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

$VC05 = $_POST['C05'];
$VC06 = $_POST['C06'];
$VC07 = $_POST['C07'];
$VC08 = $_POST['C08'];
$VC09 = $_POST['C09'];  
$VC10 = $_POST['C10'];
$VC11 = $_POST['C11'];
$VC12 = $_POST['C12'];
$VC13 = $_POST['C13'];
$VC14 = $_POST['C14'];
$VC15 = $_POST['C15'];
$VC16 = $_POST['C16'];  
$VC17 = $_POST['C17'];
$VC18 = $_POST['C18'];

//Agregar campos
switch ( $CRUD )
{ 	case "POST": //Alta
		$InstSql = "INSERT INTO tt9217regisolic ".					//Cambiar tabla
				   "VALUES (NULL,'$ClavAyun',$EjerTrab,".			//Cambiar campo
								 "$ConsFrac,'$TrimTrab',".			
								 "'$VC05','$VC06','$VC07',".		
								 "'$VC08','$VC09','$VC10',".		
								 "'$VC11','$VC12','$VC13',". 	    
								 "'$VC14','$VC15','$VC16',".
								 "'$VC17','$VC18')";
		break;
	case "PUT": //Cambio
		$InstSql = 	"UPDATE tt9217regisolic ". 						//Cambiar tabla
					"SET    RSNumeRegi = '$VC05',".
						   "RSFechInicio = '$VC06',". 				//Cambiar campo
						   "RSFechTerm = '$VC07',".				
						   "RSFechSoli = '$VC08', ".				
						   "RSFolioSoli = '$VC09', ".					
						   "RSInfoReq = '$VC10',".				
						   "RSRespuesta = '$VC11',".				
						   "RSRecurrida = '$VC12',".				 
				   		   "RSRecurrOtro = '$VC13',".					
						   "RSDocs = '$VC14',".  					
						   "RSTipoSoli = '$VC15',".				
						   "RSTipoSoliOtro = '$VC16',".				 
				   		   "RSAreaResp = '$VC17',".					
						   "RSNota = '$VC18' ".
					"WHERE RSAyuntam = '$ClavAyun' AND ".		
						  "RSEjercicio = $EjerTrab AND ".			//Cambiar campo
				  		  "RSConsecutivo = $CampBusq ";				//Cambiar campo
 						//   "RSNumeRegi = $CampBusq";
	break;
	case "DELETE": //Eliminar
		$InstSql = "DELETE FROM tt9217regisolic ". 					//Cambiar tabla
				   "WHERE RSAyuntam = '$ClavAyun' AND ".		//Cambiar campo
						  "RSEjercicio = $EjerTrab AND ".			//Cambiar campo
				  		  "RSConsecutivo = $CampBusq ";				//Cambiar campo
 						//   "RSNumeRegi = $CampBusq";
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