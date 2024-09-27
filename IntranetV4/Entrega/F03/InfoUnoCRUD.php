<?php
include("../EncaCone.php");

//********************************************************************
//Informacion de la Lista
//Bandera de visualizar msg
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

//*****************************************************************
//Para operacion A B C
$CRUD 	   = $_POST["C00"];
$TipoMovi = $_POST["C01"];
$CampBusq = $_POST["C02"];   

if ($BandMens)  
  {  echo "CRUD)$CRUD<br>";
     echo "TipoMovi)$TipoMovi<br>";
     echo "CampBusq)$CampBusq<br>";
  }

   $VC03 = $_POST["C03"];	
   $VC04 = $_POST["C04"];	
   $VC05 = $_POST["C05"];	
   $VC06 = $_POST["C06"];	
   $VC07 = $_POST["C07"];	
   $VC08 = $_POST["C08"];	
   $VC09 = $_POST["C09"];	
   $VC10 = $_POST["C10"];	
   $VC11 = $_POST["C11"];	
//Agregar campos
switch ( $CRUD )
   { case "POST": //Alta
		$InstSql = "INSERT INTO et03estrprog ".
				   "VALUES (NULL, '$ClavAyun'  ,  $ConsForm ,".	
								 " $VC03  ,  $VC04  ,  '$VC05'  ,  $VC06  ,  $VC07  ,  $VC08  ,".  "'$VC09'  ,  '$VC10'  ,  $VC11 ,". 
								 "$ConsUsua,DATE(NOW()),'A')"; 
		break;
	case "PUT": //Cambio
		$InstSql = 	"UPDATE et03estrprog ". 
						"SET EPNumeProg = $VC03,".  
							"EPNumeActa = $VC04,".  
							"EPFechApro = '$VC05',".  
							"EPNumeGace = $VC06,".  
							"EPFechPUbli = $VC07,".  
							"EPUltiRevi = $VC08,".  
							"EPMediDifu = '$VC09',".  
							"EPUnidResg = '$VC10',".  
							"EPObservacion = $VC11,".  
							"EPModiSePu = $ConsUsua, ".
							"EPFechModi = DATE(NOW()) ".
					"WHERE  EPConsecut = $CampBusq  AND ".
							" EPAyuntamiento = '$ClavAyun'  AND ".
							" EPConsForm = $ConsForm ";
		break;
	case "DELETE": //Eliminar
		$InstSql = "UPDATE et03estrprog ". 
				   "SET   EPModiSePu = $ConsUsua, ". 
						 "EPFechModi = DATE(NOW()), ". 
						 "EPEstado  = 'B' ".
					"WHERE  EPConsecut = $CampBusq  AND ".
							" EPAyuntamiento = '$ClavAyun'  AND ".
							" EPConsForm = $ConsForm ";
	break;
} 
  
//Ejecuta la instruccion
if ($BandMens)  echo "1)$InstSql<br>";
$ResuSql = $ConeBase->prepare($InstSql);
$ResuSql->execute();
$MensResp = ($ResuSql) ?  "Algo ha fallado!!!" : "Registro actualizado correctamente";
if (!$ResuSql) 
	echo "<script>alert('$MensResp');</script>"; 

//Para la ALTA
if ($CRUD == "POST") 
 { //Recupera la secuencia 
   $InstSql = "SELECT @@identity AS id "; 	
   if ($BandMens)  echo "1)$InstSql<br>";
   $RespSql = $ConeBase->prepare($InstSql);
   $RespSql->execute();
   $ResuSql = $RespSql->fetch();

   $CampBusq = 0;
   if ($ResuSql)
	    $CampBusq = $ResuSql[0];
  }

//Defina pagina de regreso
$PagiRegr = ($CRUD == "DELETE") ? "location: InfoList.php" :
								  "location: InfoUno.php?PaAMB01=M&PaAMB02=".$CampBusq ; 
 
if (!$BandMens) header($PagiRegr);	
?>
