<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head> 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CargaCampos</title>
	<link rel="stylesheet" href="../../Archivos/CSS/Consu.css">
	<!--icono de la pestaña (logo)-->
	<link rel="shortcut icon" href="../../Archivos/Img/logoEnc.ico" />
	<!-- iconos -->
	<link rel="stylesheet" href="../../Archivos/CSS/font-awesome.min.css">
</head>
<body>
<?php
//Carga las variables
$ArCooki1 = $_COOKIE['CMenu'];
$AMenu = explode("|", $ArCooki1);
$ClavMenu = $AMenu[0];  
$DescMenu = $AMenu[1];  
$BaseDato = $AMenu[2]; 
$TablBaDa = $AMenu[3]; 

if ( isset($_GET["Param1"]) ){
	$ClavMenu = $_GET['Param1'];
	$DescMenu = $_GET['Param2'];
	$BaseDato = $_GET['Param3'];
	$TablBaDa = '';
	$ArCooki2 = $ClavMenu.'|'.$DescMenu.'|'.$BaseDato.'|'.$TablBaDa.'||||';
	setcookie("CMenu", "$ArCooki2");
}

if ( isset($_GET["Param4"]) ){
	$TablBaDa = $_GET['Param4'];
	$ArCooki3 = $ClavMenu.'|'.$DescMenu.'|'.$BaseDato.'|'.$TablBaDa.'||||';
	setcookie("CMenu", "$ArCooki3");
	header("location: CargaCampos.php");
}

include($_SERVER['DOCUMENT_ROOT'].'/Conexion/conteinf.php');
$InstSql = "SHOW TABLES FROM `".$BaseDato."`";
$ResuSql  = $cone->prepare($InstSql);
$ResuSql->execute();
?>

<header> 
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/Intranet/Archivos/Files/header.php'); ?> </header>
<div class="lista">
		<ul>
			<?php 
			while( $Fila = $ResuSql->fetch() ){
				$Tabla = $Fila[0];?>
				<li><a href="MenuTabla.php?Param4=<?=$Tabla?>"><?=$Tabla?></a><br></li>
				<?php 
				if( $TablBaDa == $Tabla ){
					$InstSql = "DESCRIBE ".$BaseDato.".".$TablBaDa." ";
					$sql2 = $cone->prepare($InstSql);
					$sql2->execute();
					While($Fila2 = $sql2->fetch()){
						$Campo   = $Fila2[0];
						$Valor   = $Fila2[1];
						$Nulo    = $Fila2[3];
						$Llave   = $Fila2[4];
						$Default = $Fila2[5];
						?>
						&nbsp;&nbsp;
						<?=$Campo?> <?=$Valor?> <?=$Nulo?> <?=$Llave?> <?=$Default?><br>
					<?php } ?>
				<?php } ?>
			<?php } ?>
		</ul>

	</div>
	</body>
</html>
