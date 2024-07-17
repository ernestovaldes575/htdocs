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
$VC10 = $_POST['C10'];
$VC11 = $_POST['C11'];
$VC12 = $_POST['C12'];					//Leer campos
$VC13 = $_POST['C13'];
$VC14 = $_POST['C14'];
$VC15 = $_POST['C15'];
$VC16 = $_POST['C16'];
$VC17 = $_POST['C17']; 
$VC18 = $_POST['C18'];
$VC19 = $_POST['C19'];
$VC20 = $_POST['C20'];					//Leer campos
$VC21 = $_POST['C21'];
$VC22 = $_POST['C22'];
$VC23 = $_POST['C23'];
$VC24 = $_POST['C24'];
$VC25 = $_POST['C25'];
$VC26 = $_POST['C26']; 
$VC27 = $_POST['C27'];
$VC28 = $_POST['C28'];
$VC29 = $_POST['C29'];
$VC30 = $_POST['C30']; 
$VC31 = $_POST['C31'];
$VC32 = $_POST['C32'];

//Agregar campos
switch ( $CRUD )
{ 	case "POST": //Alta
		$InstSql = "INSERT INTO a9218".	//Cambiar tabla
			 "VALUES (NULL,'$ClavAyun','$EjerTrab',".			
							"'$ConsFrac','$TrimTrab','$VC05',".			
							"'$VC06','$VC07','$VC08',".
							"'$VC09','$VC10','$VC11',".
							"'$VC12','$VC13','$VC14',".
							"'$VC15','$VC16','$VC17',".
							"'$VC18','$VC19','$VC20',".
							"'$VC21','$VC22','$VC23',".
							"'$VC24','$VC25','$VC26',".
						    "'$VC27','$VC28','$VC29',".
							"'$VC30','$VC31','$VC32')";
										//Cambiar campo
		break;
	case "PUT": //Cambio
		$InstSql = 	"UPDATE a9218 ". 						//Cambiar tabla
			  "SET   ANumeRegi = '$VC05',".						
					"AFechaInicio = '$VC06', ".					
				    "AFechaTermino = '$VC07',".			
					"ATipoEvento = '$VC08',".			
					"ATipoEventoOtro = '$VC09',".				
				   	"AAlcanceConcurso = '$VC10',".				
					"AAlcanceConcursoOtro = '$VC11',".  
					"ATipoCargo = '$VC12',".			
					"ATipoCargoOtro = '$VC13',".			
					"AClavePuesto = '$VC14',".					
					"ADenominacionPuesto = '$VC15',".			
					"ADenominacionCargo = '$VC16',".			
					"ADenominacionUnidad= '$VC17',".				
				   	"ASalarioBruto = '$VC18',".				
					"ASalarioNeto = '$VC19',".
					"AFechaPublicacion = '$VC20',".			
					"ANumeroConvocatoria = '$VC21',".			
					"AHipervinculoDoc= '$VC22',".					
					"AEstadoProcesoCon = '$VC23',".			
					"AEstadoProcesoConOtro= '$VC24',".			
					"ATotalCandidatos = '$VC25',".				
				   	"ANombrePersona = '$VC26',".				
					"APrimerApelldio = '$VC27',".
					"ASegundoApellido = '$VC28',".					
					"AHipervinculoGanador = '$VC29',".			
					"AHipervinculoGanadorOtro = '$VC30',".			
					"AAreaResp = '$VC31',".				
				   	"ANota = '$VC32'".				
						 
						   
						   //
					"WHERE AAyuntamiento = '$ClavAyun' AND ".		//Cambiar campo
						  "AEjercicio = '$EjerTrab' AND ".			//Cambiar campo
				  		  "AConsecutivo = '$CampBusq'  ";			//Cambiar campo
 						 // "ANumeRegi = $CampBusq";
	break;
	case "DELETE": //Eliminar
		$InstSql = "DELETE FROM a9218 ". 					//Cambiar tabla
				   "WHERE AAyuntamiento = '$ClavAyun' AND ".		//Cambiar campo
						  "AEjercicio = $EjerTrab AND ".			//Cambiar campo
				  		  "AConsecutivo = $CampBusq";			//Cambiar campo
 						  //"ANumeRegi = $CampBusq";
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