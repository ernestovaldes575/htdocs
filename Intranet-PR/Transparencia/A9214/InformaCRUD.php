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
// $VC16 = $_POST['C16'];  Hipervinculo
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
// $VC30 = $_POST['C30'];		Hipervinculo
// $VC31 = $_POST['C31'];		Hipervinculo
$VC32 = $_POST['C32'];
$VC33 = $_POST['C33'];  
$VC34 = $_POST['C34'];
$VC35 = $_POST['C35'];
$VC36 = $_POST['C36'];
$VC37 = $_POST['C37'];
$VC38 = $_POST['C38'];
$VC39 = $_POST['C39'];
$VC40 = $_POST['C40'];  
$VC41 = $_POST['C41'];
// $VC42 = $_POST['C42'];		Hipervinculo
$VC43 = $_POST['C43'];  
$VC44 = $_POST['C44'];
$VC45 = $_POST['C45'];
$VC46 = $_POST['C46'];
$VC47 = $_POST['C47'];
$VC48 = $_POST['C48'];
$VC49 = $_POST['C49'];
$VC50 = $_POST['C50'];  		
// $VC51 = $_POST['C51'];		Hipervinculo
$VC52 = $_POST['C52'];
// $VC53 = $_POST['C53'];		Hipervinculo
$VC54 = $_POST['C54'];  
$VC55 = $_POST['C55'];
$VC56 = $_POST['C56'];
$VC57 = $_POST['C57'];

//Agregar campos
switch ( $CRUD )
{ 	case "POST": //Alta
		$InstSql = "INSERT INTO tt9214aprogsubci ".						//Cambiar tabla
				   "VALUES (NULL,'$ClavAyun',$EjerTrab,".			
								 "$ConsFrac,'$TrimTrab',".			
								 "'$VC05','$VC06','$VC07',".			
								 "'$VC08','$VC09','$VC10','$VC11','$VC12',". 	    
								 "'$VC13','$VC14','$VC15',''	 ,'$VC17',".
								 "'$VC18','$VC19','$VC20','$VC21','$VC22',".
								 "'$VC23','$VC24','$VC25','$VC26','$VC27',".
								 "'$VC28','$VC29',''	 ,''	 ,'$VC32',".
								 "'$VC33','$VC34','$VC35','$VC36','$VC37',".
								 "'$VC38','$VC39','$VC40','$VC41','',	  ".
								 "'$VC43','$VC44','$VC45','$VC46','$VC47',".
								 "'$VC48','$VC49','$VC50',''	 ,'$VC52',".
								 "''	 ,'$VC54','$VC55','$VC56','$VC57')";
		break;
	case "PUT": //Cambio
		$InstSql = 	"UPDATE tt9214aprogsubci ". 					//Cambiar tabla
					"SET    PNumeRegi = '$VC05',".
						   "PFechInicio = '$VC06',". 				//Cambiar campo
						   "PFechTerm = '$VC07',".				
						   "PTipoProg = '$VC08', ".				
						   "PAtenTipoProg = '$VC09', ".			
						   "PDenom = '$VC10',".				
						   "PProgMas1 = '$VC11',".				
						   "PAtenProgMas1 = '$VC12',".				 
				   		   "PSujetoOblig = '$VC13',".					
						   "PAreaRespDes = '$VC14', ".  					
						   "PDenomDocNorm = '$VC15',".				
						// "PHipervDocNorm = '$VC16',".				
				   		   "PPeriodVigenc = '$VC17',".					
						   "PAtenPeriodVigen = '$VC18', ".
						   "PFechInicioVigen = '$VC19', ".			
						   "PFechTermVigen = '$VC20',".				
						   "PDiseño = '$VC21',".				
						   "PObjetivos = '$VC22',".				 
				   		   "PPoblacion = '$VC23',".					
						   "PNotaMetodol = '$VC24', ".  					
						   "PMontoPresupApr = '$VC25',".				
						   "PMontoPresupModi = '$VC26',".				 
				   		   "PMontoPresupEjer = '$VC27',".					
						   "PMontoDeficit = '$VC28', ".
						   "PMontoGtoAdm = '$VC29', ".
						// "PHipervDocModif = '$VC30', ".			
						// "PHipervCalend = '$VC31',".				
						   "PCriterElegibi = '$VC32',".				
						   "PRequisProc = '$VC33',".				 
				   		   "PMontoMin = '$VC34',".					
						   "PMontoMax = '$VC35', ".  					
						   "PProcedQuej = '$VC36',".				
						   "PMecanExigi = '$VC37',".				 
				   		   "PMecanCancel = '$VC38',".					
						   "PPeriodoEvalu = '$VC39', ".
						   "PMecanEvalu = '$VC40', ".			
						   "PInstancia = '$VC41',".				
						// "PHipervResult = '$VC42',".				
						   "PSeguimRecom = '$VC43',".				 
				   		   "PIndicador = '$VC44',".					
						   "PFormPartSocial = '$VC45', ".  					
						   "PArticOtroProgr = '$VC46',".				
						   "PAtenArticOtrProgr = '$VC47',".				 
				   		   "PDenomProgr = '$VC48',".					
						   "PSujetReglOp = '$VC49', ".
						   "PAtenSujetReglOp = '$VC50', ".			
						// "PHipervRegl = '$VC51',".				
						   "PInformPeriod = '$VC52',".				
						// "PHipervPadron = '$VC53',".				 
				   		   "PAreaRespInfo = '$VC54',".					
						   "PFechValid = '$VC55', ".
						   "PFechAct = '$VC56',".					
						   "PNota = '$VC57' ".
					"WHERE PAyuntam = '$ClavAyun' AND ".		//Cambiar campo
						  "PEjercicio = $EjerTrab AND ".		//Cambiar campo
				  		  "PConsecutivo = $CampBusq ";			//Cambiar campo
	break;
	case "DELETE": //Eliminar
		$InstSql = "DELETE FROM tt9214aprogsubci ". 			//Cambiar tabla
				   "WHERE PAyuntam = '$ClavAyun' AND ".			//Cambiar campo
						  "PEjercicio = $EjerTrab AND ".		//Cambiar campo
				  		  "PConsecutivo = $CampBusq ";			//Cambiar campo
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