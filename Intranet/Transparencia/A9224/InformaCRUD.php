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
$VC24 = $_POST['C24'];
$VC25 = $_POST['C25'];
$VC26 = $_POST['C26'];  
$VC27 = $_POST['C27'];
$VC28 = $_POST['C28'];

//Agregar campos
switch ( $CRUD )
{ 	case "POST": //Alta
		$InstSql = "INSERT INTO tt9224tramreq ".						//Cambiar tabla
				   "VALUES (NULL,'$ClavAyun',$EjerTrab,".			//Cambiar campo
								 "$ConsFrac,'$TrimTrab',".			//Cambiar campo
								 "'$VC03','$VC04','$VC05',".			//Cambiar campo
								 "'$VC06','$VC07','$VC08',".		//Cambiar campo
								"'$VC09','$VC10','$VC11',". 	    //Cambiar campo
								"'$VC12','$VC13','$VC14',".
								"'$VC15','$VC16','$VC17',".
								"'$VC18','$VC19','$VC20',".
								"'$VC21','$VC22','$VC23',".
								"'$VC24','$VC25','$VC26',".
								"'$VC27','$VC28','$VC29')";
		break;
	case "PUT": //Cambio
		$InstSql = 	"UPDATE tt9224tramreq ". 						//Cambiar tabla
					"SET    TRFechInicio = '$VC06',". 				//Cambiar campo
						   "TRFechTerm = '$VC07',".				//Cambiar campo
						   "TRDenom = '$VC08', ".				//Cambiar campo
						   "TRTipoUsu = '$VC09', ".						//Cambiar campo
						   "TRDesc = '$VC10',".				//Cambiar campo
						   "TRModalidad = '$VC11',".				//Cambiar campo
						  "TRHipervRequ = '$VC12',".				//No considera 
				   		   "TRDocReque = '$VC13',".					//Cambiar campo
						   "TRHipervForm = '$VC14', ". 					//Cambiar campo
						   "TRTiempoRes = '$VC15',".				//Cambiar campo
						  "TRVigencia = '$VC16',".				//No considera 
				   		   "TRAreaContact = '$VC17',".					//Cambiar campo
						   "TRCosto = '$VC18', ".
						   "TRSustento = '$VC19', ".					//Cambiar campo
						   "TRLugarPago = '$VC20',".				//Cambiar campo
						   "TRFundJuri = '$VC21',".				//Cambiar campo
						  "TRDerech = '$VC22',".				//No considera 
				   		   "TRLugarRepor = '$VC23',".					//Cambiar campo
						   "TROtros = '$VC24', ".  					//Cambiar campo
						   "TRHipervInf = '$VC25',".				//Cambiar campo
						  "TRHipervSist = '$VC26',".				//No considera 
				   		   "TRAreaResp = '$VC27',".					//Cambiar campo
						   "TRNota = '$VC28' ".
					"WHERE RSAyuntam = '$ClavAyun' AND ".		//Cambiar campo
						  "RSEjercicio = $EjerTrab AND ".			//Cambiar campo
				  		  "RSConsecutivo = $CampBusq AND ".			//Cambiar campo
 						  "RSNumeRegi = $CampBusq";
	break;
	case "DELETE": //Eliminar
		$InstSql = "DELETE FROM tt9224tramreq ". 					//Cambiar tabla
				   "WHERE TRAyuntam = '$ClavAyun' AND ".		//Cambiar campo
						  "TREjercicio = $EjerTrab AND ".			//Cambiar campo
				  		  "TRConsecutivo = $CampBusq AND ".			//Cambiar campo
 						  "TRNumeRegi = $CampBusq";
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