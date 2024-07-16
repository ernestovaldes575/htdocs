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
// $VC10 = $_POST['C10'];
// $VC11 = $_POST['C11'];
$VC12 = $_POST['C12'];
$VC13 = $_POST['C13'];

//Agregar campos
switch ( $CRUD )    
{ 	case "POST": //Alta
		$InstSql = "INSERT INTO a9225a ".
		/*  */
				   "VALUES (NULL, '$ClavAyun','$EjerTrab',".
				                  "'$ConsFrac','$TrimTrab','$VC05',".
								  "'$VC06','$VC07','$VC08','$VC09',".
								  "' ','','$VC12','$VC13')";
								 	
								//Cambiar campo
		break;
	case "PUT": //Cambio
		$InstSql = 	"UPDATE a9225a ". 						//Cambiar tabla 
				"SET   ANumeRegi = '$VC05',".
				        "AFechaInicio = '$VC06',". 					//
						"AFechaTermino = '$VC07',".				//
						"APrepuestoAnual = '$VC08',".						
						"APresupuestoCapitulo = '$VC09',".			
						// "AHipervinculoPresEgresos = '$VC10',".		
				   		// "AHipervinculoPagina = '$VC11',".					
						"AAreaResp = '$VC12',". 
						"ANota = '$VC13' ".
							
						   
						   		//Cambiar campo
					"WHERE AAyuntamiento = '$ClavAyun' AND ".		//Cambiar campo
						  "AEjercicio = $EjerTrab AND ".			//Cambiar campo
				  		 "AConsecutivo = $CampBusq ";		//Cambiar campo
 						  
	break;
	case "DELETE": //Eliminar
		$InstSql = "DELETE FROM  a9225a ". 					//Cambiar tabla
				   "WHERE AAyuntamiento = '$ClavAyun' AND ".		//Cambiar campo
						  "AEjercicio = $EjerTrab AND ".			//Cambiar campo
				  		 "AConsecutivo = $CampBusq  ";			//Cambiar campo
 						 
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