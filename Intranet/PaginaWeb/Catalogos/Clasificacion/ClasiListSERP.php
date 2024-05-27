<?php
	include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
	include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasPagWeb.php');

//********************************************************************
//Informacion de la Lista
$BandMens = false;
if ( isset($_GET["Param0"]) )
	$BandMens = true;

//Ingresar cookie de Tipo de Clasificacion
if ( isset($_GET["Param1"]) )
 { $TipoClas= $_GET["Param1"];
   $ArCookie = "$TipoClas|"
	setcookie("CBuscEnc", "$ArCookie");
 }
//Carga el registro para Consulta
$InstSql = 	"SELECT CCLClave, CCLDescripcion ". //Cambiar campos
			"FROM   ccclasifica ".
			"WHERE CCLTipoDocu = '$TipoClas' 			//Cambiar tabla
			ORDER BY CCLClave";			//Cambiar campo
			
if ($BandMens)  
   echo '1)'.$InstSql.'<br>'; 
$EjInSql = $ConeBase->prepare($InstSql);
$EjInSql->execute();
$ResuSql = $EjInSql->fetchAll();
?>