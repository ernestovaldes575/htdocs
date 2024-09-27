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

if ( isset($_GET['PaCRUD01']) != ''){
  $TipoMovi = $_GET["PaCRUD01"];	#Tipo de Movimiento 
  $ConsBusq = $_GET["PaCRUD02"];	#COINCIDENCIA CON LA BD 
}	

$InstSql =  "SELECT SNumeEmpl, SServPubli, SCategoria ". 
			"FROM   stsupervisor ".
			"WHERE  SAyuntamiento = '$ClavAyun' AND ".
				   "SConsecut =$ConsBusq ";
if ($BandMens)  echo '1)'.$InstSql.'<br>'; 
$ResuSql = $ConeBase->prepare($InstSql);
$ResuSql->execute();
$MensResp = ($ResuSql) ?  "Algo ha fallado!!!" : "Registro actualizado correctamente";
if (!$ResuSql) 
  echo '<script>alert("'.$MensResp.'");</script>'; 
$ListSupe = $ResuSql->fetch();

//Variables
$VC03 = "";  $VC04 = ""; 
$VC05 = "";  $VC06 = "";
if ($ListSupe)
  { $VC03 = $ListSupe['SNumeEmpl'];	
	$VC04 = $ListSupe['SServPubli'];
	$VC05 = $ListSupe['SCategoria'];
  }

$MesnTiMo = "";
switch( $TipoMovi ){
  case "A":	$MesnTiMo = "Registrar";  
			$CRUD = "POST";			  break;
  case "M":	$MesnTiMo = "Actualizar"; 
			$CRUD = "PUT";			  break;
  case "B":	$MesnTiMo = "Eliminar";   
			$CRUD = "DELETE";		  break;
}	

$PagiRegr = "SuperviList.php";
if ($BandMens)	 
 { $PagiRegr = "location: $PagiRegr";
   header($PagiRegr); } 

?>	
