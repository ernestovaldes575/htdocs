<?php
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasPagWeb.php');	

//Carga las variables
$ArCooki3 = $_COOKIE['CBusqMae'];
$ABusqMae = explode("|", $ArCooki3);
//echo '$ABusqMae'.$ABusqMae.'<br>';
$ConUniTr = $ABusqMae[0]; 
$ClaUniTr = $ABusqMae[1];
$DesUniTr = $ABusqMae[2];

//Bandera de visualizar msg
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

//*****************************************************************
//Para operacion A B C
if ( isset($_POST['C00']) ) 
 {  $CRUD =  $_POST['C00'];
	$TipoMovi = $_POST['C01'];
	$ConsBusq = $_POST['C02']; 
	
	$NumeEmpl = $_POST['C03']; 
	$ServPubl = $_POST['C04'];
	$Categori = $_POST['C05']; 
 }	

switch ( $CRUD )
 { 	case "POST": #Alta
			$InstSql = "INSERT INTO stsupervisor ". 
					   "VALUES (Null,'$ClavAyun',$ConUniTr,". 
							   "'$NumeEmpl', '$ServPubl','$Categori',".
							   "'',$ConsUsua,date(now()),'A')";
	
			break;
	case "PUT": #Modificacion
			$InstSql = "UPDATE stsupervisor ". 
						"SET   SNumeEmpl = '$NumeEmpl', ".
							  "SServPubli = '$ServPubl', ".
							  "SCategoria = '$Categori', ".
							  "SSerPubMo = $ConsUsua,".
							  "SFechModi = date(now()) ".
						"WHERE SAyuntamiento = '$ClavAyun' AND ".
							  "SConsecut = $ConsBusq ";
				break;
	case "DELETE": #Baja
			$InstSql = "UPDATE stsupervisor ". 
							"SET   SEstado = 'B', ".
								  "SSerPubMo = $ConsUsua,".
								  "SFechModi = date(now()) ".
							"WHERE SAyuntamiento = '$ClavAyun' AND ".
								  "SConsecut = $ConsBusq ";
			break;	  
	
  }	

if ($BandMens)  echo '1)'.$InstSql.'<br>';	
$ResuSql = $ConeBase->prepare($InstSql);
$ResuSql->execute();

$MensResp = ($ResuSql) ?  "Algo ha fallado!!!" : "Registro actualizado correctamente";
if (!$ResuSql) 
    echo '<script>alert("'.$MensResp.'");</script>'; 


if (!$BandMens)	 
   { $PagiRegr = "location: SuperviList.php";
     header($PagiRegr); } 
?>	
