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
$VC03 = $_POST['C03'];
$VC04 = $_POST['C04'];
$VC05 = $_POST['C05'];
$VC06 = $_POST['C06'];
$VC07 = $_POST['C07'];
$VC08 = $_POST['C08'];
//$VC09 = $_POST['C09'];  No considera
$VC10 = $_POST['C10'];
$VC11 = $_POST['C11'];

<<<<<<< HEAD
//Agregar campos
switch ( $CRUD )
{ 	case "POST": //Alta
		$InstSql = "INSERT INTO tt9203facare ".						//Cambiar tabla
				   "VALUES (NULL,'$ClavAyun',$EjerTrab,".			//Cambiar campo
								 "$ConsFrac,'$TrimTrab',".			//Cambiar campo
								 "$VC03,'$VC04','$VC05',".			//Cambiar campo
								 "'$VC06','$VC07',".				//Cambiar campo
								"'$VC08','',$VC10,'$VC11')";		//Cambiar campo
		break;
	case "PUT": //Cambio
		$InstSql = 	"UPDATE tt9203facare ". 						//Cambiar tabla
					"SET    ANumeRegi = $VC03,". 					//Cambiar campo
						   "AFechaInicio = '$VC04',".				//Cambiar campo
						   "AFechaTermino = '$VC05', ".				//Cambiar campo
						   "AArea = $VC06, ".						//Cambiar campo
						   "ADenominacion = '$VC07',".				//Cambiar campo
						   "AFunadamento = '$VC08',".				//Cambiar campo
						  //AHipervinculo = '$VC09',".				//No considera 
				   		   "AAreaRespon = $VC10,".					//Cambiar campo
						   "ANota = '$VC11' ".  					//Cambiar campo
					"WHERE AAyuntamiento = '$ClavAyun' AND ".		//Cambiar campo
						  "AEjercicio = $EjerTrab AND ".			//Cambiar campo
				  		  "AConsecutivo = $CampBusq ";				//Cambiar campo
	break;
	case "DELETE": //Eliminar
		$InstSql = "DELETE FROM tt9203facare ". 						//Cambiar tabla
				   "WHERE AAyuntamiento = '$ClavAyun' AND ".		//Cambiar campo
						  "AEjercicio = $EjerTrab AND ".			//Cambiar campo
				  		  "AConsecutivo = $CampBusq ";				//Cambiar campo
	break;	
}		
=======
$VC05 = $_POST['C05'];
$VC06 = $_POST['C06'];
$VC07 = $_POST['C07'];
$VC08 = $_POST['C08'];
$VC09 = $_POST['C09'];  
$VC10 = $_POST['C10'];
$VC11 = $_POST['C11'];
$VC12 = $_POST['C12'];
$VC13 = $_POST['C13'];

  switch ( $CRUD )
{ 	case "POST": //Alta
		$InstSql = "INSERT INTO tta9203 ".						//Cambiar tabla
				   "VALUES (NULL, '$ClavAyun','$EjerTrab',".
				                  "'$ConsFrac','$TrimTrab','$VC05',".
								  "'$VC06','$VC07','$VC08','$VC09',".
								  "'$VC10','$VC11','$VC12','$VC13')";	//Cambiar campo
								  
	   break;
			case "PUT": //Cambio
			$InstSql = 	"UPDATE tta9203 ". 				//Cambiar tabla
					"SET    ANumeRegi = '$VC05',".
						"AFechaInicio = '$VC06',". 					//
					    "AFechaTermino = '$VC07',".				//
						"AArea = '$VC08',".						
					    "ADenominacion = '$VC09',".			
					    "AFundamento = '$VC10',".		
						"AHipervinculo = '$VC11',".					
						"AAreaResp = '$VC12',". 
						"ANota = '$VC13' ". 
										 										  "WHERE AAyuntamiento = '$ClavAyun' AND ".		
				"AEjercicio = $EjerTrab AND ".			//Cambiar campo
				"AConsecutivo = $CampBusq ";		//Cambiar campo
													 
break;
	case "DELETE": //Eliminar
		$InstSql = "DELETE FROM tta9203 ". 		//Cambiar tabla
			"WHERE AAyuntamiento = '$ClavAyun' AND ".		
				"AEjercicio = $EjerTrab AND ".			//Cambiar campo
				"AConsecutivo = $CampBusq ";
   break;	
 }			
>>>>>>> e5b162c508b56d18625f5506774a619ea33cb671

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

if (!$BandMens) 
 header($PagiRegr);	
?>