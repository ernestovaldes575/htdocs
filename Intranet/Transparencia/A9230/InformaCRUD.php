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
$VC19 = $_POST['C19'];  
$VC20 = $_POST['C20'];
$VC21 = $_POST['C21'];
$VC22 = $_POST['C22'];
$VC23 = $_POST['C23'];

//Agregar campos
switch ( $CRUD )
{ 	case "POST": //Alta
		$InstSql = "INSERT INTO tt9230resultdicta ".						//Cambiar tabla
				   "VALUES (NULL,'$ClavAyun',$EjerTrab,".			
								 "$ConsFrac,'$TrimTrab',".			
								 "'$VC05','$VC06','$VC07','$VC08',".			
								 "''	 ,'$VC10',''	 ,'$VC12',". 	    
								"'$VC13','$VC14','$VC15','$VC16',".
								"'$VC17','$VC18','$VC19','$VC20')";
		break;
	case "PUT": //Cambio
		$InstSql = 	"UPDATE tt9230resultdicta ". 						//Cambiar tabla
					"SET    RDNumeRegi = '$VC05',".
						   "RDFechInicio = '$VC06',". 				
						   "RDFechTerm = '$VC07',".				
						   "RDEjerAudit = '$VC08', ".				
						   "RDHipervEdosF = '$VC09', ".			
						   "RDFechEmis = '$VC10',".				
						   "RDHipervDictam = '$VC11',".				
						   "RDTotalObserv = '$VC12',".				 
				   		   "RDTotalAclar = '$VC13',".					
						   "RDTotalSolven = '$VC14', ".  			
						   "RDNomConta = '$VC15',".				
						   "RDApePatConta = '$VC16',".				 
				   		   "RDApeMatConta = '$VC17',".					
						   "RDDenom = '$VC18', ".
						   "RDAreaResp = '$VC19', ".			
						   "RDNota = '$VC20' ".				 	
					"WHERE RDAyuntam = '$ClavAyun' AND ".			//Cambiar campo
						  "RDEjercicio = $EjerTrab AND ".			//Cambiar campo
				  		  "RDConsecutivo = $CampBusq ";				//Cambiar campo
 						//"RDNumeRegi = $CampBusq";
	break;
	case "DELETE": //Eliminar
		$InstSql = "DELETE FROM tt9230resultdicta ". 				//Cambiar tabla
				   "WHERE RDAyuntam = '$ClavAyun' AND ".			//Cambiar campo
						  "RDEjercicio = $EjerTrab AND ".			//Cambiar campo
				  		  "RDConsecutivo = $CampBusq ";				//Cambiar campo
 						//"RDNumeRegi = $CampBusq";
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