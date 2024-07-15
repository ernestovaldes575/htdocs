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
$VC24 = $_POST['C24'];
$VC25 = $_POST['C25'];
$VC26 = $_POST['C26'];  
$VC27 = $_POST['C27'];
$VC28 = $_POST['C28'];
$VC29 = $_POST['C29'];
$VC30 = $_POST['C30'];
$VC31 = $_POST['C31'];
$VC32 = $_POST['C32'];
$VC33 = $_POST['C33'];  
$VC34 = $_POST['C34'];
$VC35 = $_POST['C35'];
$VC36 = $_POST['C36'];
$VC37 = $_POST['C37'];  

//Agregar campos
switch ( $CRUD )
{ 	case "POST": //Alta
		$InstSql = "INSERT INTO tt9208bremun  ".						//Cambiar tabla
				   "VALUES (NULL,'$ClavAyun',$EjerTrab,".			//Cambiar campo
								 "$ConsFrac,'$TrimTrab',".			//Cambiar campo
								 "'$VC05','$VC06','$VC07','$VC08','$VC09',".			
								 "'$VC10','$VC11','$VC12','$VC13','$VC14',". 	    
								 "'$VC15','$VC16','$VC17','$VC18','$VC19',".
								 "'$VC20','$VC21','$VC22','$VC23','$VC24',".
								 "'$VC25','$VC26','$VC27','$VC28','$VC29',".
							 	 "'$VC30','$VC31','$VC32','$VC33','$VC34',".
								 "'$VC35','$VC36','$VC37')";
		break;
	case "PUT": //Cambio
		$InstSql = 	"UPDATE tt9208bremun  ". 						//Cambiar tabla
					"SET    RNumeRegi = '$VC05',".
						   "RFechInicio = '$VC06',". 				
						   "RFechTerm = '$VC07',".				
						   "RTipoInte = '$VC08', ".				
						   "RTipoInteOtro = '$VC09', ".			
						   "RClave = '$VC10',".				
						   "RDenomPuest = '$VC11',".				
						   "RDenomCarg = '$VC12',".				 
				   		   "RAreaAds = '$VC13',".					
						   "RNombre = '$VC14', ".  					
						   "RPrimerApell = '$VC15',".				
						   "RSegunApell = '$VC16',".				 
				   		   "RSexo = '$VC17',".					
						   "RSexoOtro = '$VC18', ".
						   "RRemunBruta = '$VC19', ".			
						   "RTipoMoneBrut = '$VC20',".				
						   "RRemunNeta = '$VC21',".				
						   "RTipoMoneNet = '$VC22',".				 
				   		   "RPercepDinero = '$VC23',".					
						   "RPercepEspec = '$VC24', ".  					
						   "RIngresos = '$VC25',".				
						   "RCompensa = '$VC26',".				 
				   		   "RGratifica = '$VC27',".					
						   "RPrimas = '$VC28', ".
						   "RComision = '$VC29', ".
						   "RDietas = '$VC30', ".			
						   "RBonos = '$VC31',".				
						   "REstimulo = '$VC32',".				
						   "RApoyoEcon = '$VC33',".				 
				   		   "RPrestacEcon = '$VC34',".					
						   "RPrestaEspecie = '$VC35', ".  					
						   "RAreaResp = '$VC36',".				
						   "RNota = '$VC37' ".				 			
					"WHERE RAyuntam = '$ClavAyun' AND ".		
						  "REjercicio = $EjerTrab AND ".			
				  		  "RConsecutivo = $CampBusq ";			
 						  //"RNumeRegi = $CampBusq";
	break;
	case "DELETE": //Eliminar
		$InstSql = "DELETE FROM tt9208bremun ". 					//Cambiar tabla
				   "WHERE RAyuntam = '$ClavAyun' AND ".			    //Cambiar campo
						  "REjercicio = $EjerTrab AND ".			//Cambiar campo
				  		  "RConsecutivo = $CampBusq ";				//Cambiar campo
 						  //"RNumeRegi = $CampBusq";
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