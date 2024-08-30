<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Menú <?=$_SESSION["usua"]?></title>
	<link rel="stylesheet" href="css/esttabla.css">
	<!--icono de la pestaña (logo)-->
	<link rel="shortcut icon" href="img/logoEnc.ico" />
</head>
<body>
<?php
$ClavAyun = '105';
$BandMens = false;
	//Carga las variables
	$ArCooki2 = $_COOKIE['CEncaAcc'];
	$AEncaMae = explode("|", $ArCooki2);

	$ConsInvi = $AEncaMae[0]; 
	$NombInvi = $AEncaMae[1]; 
	$EjerTrab = $AEncaMae[2]; 

	if ( isset($_GET["Param1"]) ){
		$BaseDato = $_GET["Param1"];
		$TipoServ = $_GET["Param2"];
	    $DescServ = $_GET["Param3"];
		$OpciServ = $_GET["Param4"];
		$DescOpci = $_GET["Param5"];
		$Ruta     = $_GET["Param6"];
 	}

	include($_SERVER['DOCUMENT_ROOT'].'/IntraBroker/Conexion/ConBasBroker.php');

	$InstSql = "SELECT PConsulta, PAlta, PModifica, PBaja ".
			   "FROM   $BaseDato.adpermi ".
			   "WHERE  PAyuntamiento=  '$ClavAyun' AND ".
					  "PTipoServ = '$TipoServ' AND ".
					  "POpciServ = '$OpciServ' AND ".
					  "PConsServ = '$ConsInvi' ";
	if ($BandMens)  echo "1)<br>$InstSql<br><br>";
	$ResuSql = $ConeBase->prepare($InstSql);
	$ResuSql->execute();
	$MenuBase = $ResuSql->fetchAll();					  
	foreach($MenuBase as $valor):
		$Cons = $valor['PConsulta'];
		$Alta = $valor['PAlta'];
		$Modi = $valor['PModifica'];
		$Baja = $valor['PBaja'];
	endforeach;

	$ArCooki = $TipoServ.'|'.$DescServ.'|'.$OpciServ.'|'.$DescOpci.'|'.$Cons.'|'.$Alta.'|'.$Modi.'|'.$Baja;
	setcookie("CModulo", "$ArCooki");

	header("location:".$Ruta);
?>




