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
// $VC14 = $_POST['C14'];					Hipervínculos
// $VC15 = $_POST['C15'];
// $VC16 = $_POST['C16'];  
// $VC17 = $_POST['C17'];
$VC18 = $_POST['C18'];
$VC19 = $_POST['C19'];  

//Agregar campos
switch ( $CRUD )
{ 	case "POST": //Alta
		$InstSql = "INSERT INTO  tt9220brecurspublic ".			    //Cambiar tabla
				   "VALUES (NULL,'$ClavAyun',$EjerTrab,".			//Cambiar campo
								 "$ConsFrac,'$TrimTrab',".			//Cambiar campo
								 "'$VC05','$VC06','$VC07','$VC08',".			
								 "'$VC09','$VC10','$VC11','$VC12',". 	    
								 "'$VC13',''	 ,''	 ,''	 ,".
								 "''	 ,'$VC18','$VC19' )";
		break;
	case "PUT": //Cambio
		$InstSql = 	"UPDATE  tt9220brecurspublic ". 				//Cambiar tabla
					"SET    RPNumeRegi = '$VC05', ".
						   "RPFechInicio = '$VC06', ". 				
						   "RPFechTerm = '$VC07', ".				
						   "RPTipoRec = '$VC08', ".				
						   "RPTipoReOtro = '$VC09', ".			
						   "RPDescr = '$VC10', ".				
						   "RPMotivo = '$VC11', ".				
						   "RPFechEntr = '$VC12', ".				 
				   		   "RPDenom = '$VC13', ".					
						// "RPHipervOfic = '$VC14', ".  			No consideran
						// "RPHipervInf = '$VC15', ".				
						// "RPHipervProg = '$VC16', ".				 
				   		// "RPHipervDonat = '$VC17', ".		
						   "RPAreaResp = '$VC18', ".
						   "RPNota = '$VC19' ".	
						   										 	
					"WHERE TAyuntam = '$ClavAyun' AND ".		
						  "TEjercicio = '$EjerTrab' AND ".			
				  		  "TConsecutivo = '$CampBusq' ";			
 						//"TNumeRegi = '$CampBusq'";
	break;
	case "DELETE": //Eliminar
		$InstSql = "DELETE FROM  tt9220brecurspublic  ". 			//Cambiar tabla
				   "WHERE TAyuntam = '$ClavAyun' AND ".				//Cambiar campo
						  "TEjercicio = $EjerTrab AND ".			//Cambiar campo
				  		  "TConsecutivo = $CampBusq ";				//Cambiar campo
 						//"TNumeRegi = $CampBusq";
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