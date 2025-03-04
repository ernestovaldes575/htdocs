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
include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Archivos/Conexiones/conteinf.php');

//Carga las variables
$ArCooki1 = $_COOKIE['CMenu'];
$AMenu = explode("|", $ArCooki1);
$ClavMenu = $AMenu[0];  
$DescMenu = $AMenu[1];  
$BaseDato = $AMenu[2]; 
$TablBaDa = $AMenu[3]; 
$TipoMovi = "A";

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
	//header("location: CargaCampos.php");
	$InstSql = "SELECT CASE WHEN count(*) IS  NULL ". 
						   "THEN 0 ". 
						   "ELSE Count(*) END  AS TotaRegi  ". 
				"FROM tecninfo.pttabla ". 
				"WHERE TNombre = '$TablBaDa'";
    echo "1) $InstSql <br>";
	$ResuSql  = $cone->prepare($InstSql);
	$ResuSql->execute();
	echo "1) <br>";
	$TipoMovi = ( $ResuSql->fetch() ) ? "M": "A";
	echo "1) $TipoMovi <br>";
}


$InstSql = "SHOW TABLES FROM `".$BaseDato."`";
$ResuSql  = $cone->prepare($InstSql);
$ResuSql->execute();
?>

<header> 
	<?php require_once($_SERVER['DOCUMENT_ROOT'].'/Intranet/Archivos/Files/header.php'); ?> </header>

<table>
  <tr>
	<td>No</td>
	<td>Tabla</td>
	<td>Campos</td>
  </tr>
  <?php 
    $NumeRegi = 1;
	while( $Fila = $ResuSql->fetch() )
	{ $Tabla = $Fila[0]; ?>
  <tr valign="top" onMouseOver="this.style.background='#D6D6D6';" onMouseOut="this.style.background = '';">
	<td><?=$NumeRegi?></td>
	<td><a href="MenuTabla.php?Param4=<?=$Tabla?>"><?=$Tabla?></a></td>
	<td>
	  <?php 
	    if ( $TablBaDa == $Tabla ){ ?>
		  <table>
		    <tr>
				<td colspan="5">Estructura de la Tabla</td>
				<td>
				  <a href="CargEstrList.php?Param1=<?=$TipoMovi?> ">Conf. Nom Lista</a>
				</td>
				<td>
				  <a href="CargEstrTabl.php?Param1=<?=$TipoMovi?>">Conf. Nom Tab</a>
				</td>
			</tr>
			<tr>
				<td width="30">No</td>
				<td width="100">Campo</td>
				<td width="50">Valor</td>
				<td width="50">Nulo</td>
				<td width="50">Llave</td>
				<td width="50">Default</td>
				<td width="50">Comentario</td>
			</tr>
	  <?php	$InstSql = "SHOW FULL COLUMNS FROM ".$BaseDato.".".$TablBaDa." ";
			$sql2 = $cone->prepare($InstSql);
			$sql2->execute();
			$NumeCamp = 1;
			While($Fila2 = $sql2->fetch())
			  { $Campo   = $Fila2[0];
				$Valor   = $Fila2[1];
				$Nulo    = $Fila2[3];
				$Llave   = $Fila2[4];
				$Default = $Fila2[5];
				$Comenta = $Fila2[8];		
				 ?>
			<tr>
				<td><?=$NumeCamp?></td>
				<td><?=$Campo?></td>
				<td><?=$Valor ?></td>
				<td><?=$Nulo?></td>
				<td><?=$Llave?></td>
				<td><?=$Default?></td>
				<td><?=$Comenta?></td>
			</tr>
			<?php
			   $NumeCamp++; 
			  }	//While($Fila2 = $sql2->fetch())?>
		  </table>
	  <?php 
	    } //if ( $TablBaDa == $Tabla )  ?> 	  	  	  
	</td>
  </tr>
  <?php 
     $NumeRegi++;
    } ?>	
</table>
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
					While($Fila2 = $sql2->fetch()) {
						$Campo   = $Fila2[0];
						$Valor   = $Fila2[1];
						$Nulo    = $Fila2[3];
						$Llave   = $Fila2[4];
						$Default = $Fila2[5];
						?>
						&nbsp;&nbsp;
						<?=$Campo?> <?=$Valor?> <?=$Nulo?> <?=$Llave?> <?=$Default?><br>
					<?php } 
				   } 
			} ?>
		</ul>

	</div>
	</body>
</html>
