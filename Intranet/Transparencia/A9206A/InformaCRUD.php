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

$VC03 = $_POST['C03'];					//Leer campos
$VC04 = $_POST['C04'];
$VC05 = $_POST['C05'];
$VC06 = $_POST['C06'];
$VC07 = $_POST['C07'];
$VC08 = $_POST['C08'];
//$VC09 = $_POST['C09'];  No considera
$VC10 = $_POST['C10'];
$VC11 = $_POST['C11'];

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
		$InstSql = 	"UPDATE a9206a ". 						//Cambiar tabla
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
				  		  "AConsecutivo = $CampBusq AND ".			//Cambiar campo
 						  "ANumeRegi = $CampBusq";
	break;
	case "DELETE": //Eliminar
		$InstSql = "DELETE FROM tt9203facare ". 					//Cambiar tabla
				   "WHERE AAyuntamiento = '$ClavAyun' AND ".		//Cambiar campo
						  "AEjercicio = $EjerTrab AND ".			//Cambiar campo
				  		  "AConsecutivo = $CampBusq AND ".			//Cambiar campo
 						  "ANumeRegi = $CampBusq";
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