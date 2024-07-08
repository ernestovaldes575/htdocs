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

  $AConsecutivo = $_POST['C03'];	   //Leer los campolinea 21 Conac
  $AAyuntamiento = $_POST['C04'];
  $AEjercicio = $_POST['C05'];
  $FechInic = $_POST['C06'];
  $FechTermi = $_POST['C07'];	
  $AArea = $_POST['C08'];	
  $ADenomi = $_POST['C09'];	
  $AFun = $_POST['C10'];
  $AHiper = $_POST['C11'];
  $AAreRes = $_POST['C12'];
  $ANota = $_POST['C13'];

  switch ( $TipoMovi )
{ 	case "POST": //Alta
		$InstSql = "INSERT INTO a9203".						//Cambiar tabla
				   "VALUES (NULL,'$ClavAyun',$EjerTrab,".			//Cambiar campo
								 "$ConsFrac,'$TrimTrab',".	"'$AAyuntamiento','$AEjercicio','$FechInic','$FechTermi', 
							 '$AArea','$ADenomi','$AFun','$AHiper','$AAreRes','$ANota') "; 		//Cambiar campo
		break;
	case "PUT": //Cambio
		$InstSql = 	"UPDATE a9203 ". 						//Cambiar tabla
					"SET AConsecutivo =' $AConsecutivo',".
					"AAyuntamiento  = '$AAyuntamiento',".
					"AFechaInicio = '$FechInic',".
					  "AFechaTermino = '$FechTermi',".
					  "AArea = '$AArea',".
					  "ADenominacion= '$ADenomi',".
					  "AFundamento= '$AFun',".
					  "AHipervinculo= '$AHiper',".
					  "AAreaResp= '$AAreRes',".
					  "ANota= '$ANota',".  //Cambiar campo
					  	
					"WHERE AAyuntamiento = '$ClavAyun' AND ".		//Cambiar campo
						  "AEjercicio = $EjerTrab AND ".			//Cambiar campo
				  		  "AConsecutivo = $CampBusq ";			//
	break;
	case "DELETE": //Eliminar
		$InstSql = "DELETE FROM a9203 ". 					//Cambiar tabla
				   "WHERE AAyuntamiento = '$ClavAyun'";
				           "AEjercicio  = $EjerTrab AND ".		
				  		  "AConsecutivo = $CampBusq ";	
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