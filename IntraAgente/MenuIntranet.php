<!DOCTYPE html>
<html lang="es">
<head>
  <?php $TituEnca= "Intranet";
   	    include 'Encabezado/EncaLiga.php'; ?>
</head> 
<body>
 <header class="header">
  <?php include 'Encabezado/EncaHead.php'; ?>	
 </header>
<?php
$ClavAyun = '105';
include($_SERVER['DOCUMENT_ROOT'].'/IntraAgente/Encabezado/EncaCook.php'); 
include($_SERVER['DOCUMENT_ROOT'].'/IntraAgente/Conexion/ConBasAgente.php');

//Carga las variables
$ArCooki1 = $_COOKIE['CMenu'];
$AMenu = explode("|", $ArCooki1);
$Nivel  = $AMenu[0]; 
$OpcMen = $AMenu[1]; 
$OpcSub = $AMenu[2]; 
$BandMens = false;

if ( isset($_GET["Param1"]) ){
	$Nivel = $_GET["Param1"];
	$OpcMen = $_GET["Param2"];
	$ArCooki3 = $Nivel.'|'.$OpcMen.'||';
	setcookie("CMenu", "$ArCooki3");
 }

if ( isset($_GET["Param3"]) ){
	$Nivel = $_GET["Param3"];
	$OpcSub = $_GET["Param4"];
	$ArCooki4 = $Nivel.'|'.$OpcMen.'|'.$OpcSub.'|';
	setcookie("CMenu", "$ArCooki4");
 }

$InstSql = "SELECT CMEClave,CMEDescri,CMEBasDat ".
		   "FROM acceso.atpermen ".
		   "INNER JOIN acceso.acmenu ON CMEClave=PMenu ".
		   "WHERE PAyuntamiento='$ClavAyun' and ". 
		         "PConsServ='$ConsAgen' ";
if ($BandMens)  echo "1)<br>$InstSql<br><br>";
$ResuSql = $ConeBase->prepare($InstSql);
$ResuSql->execute();
$MenuBase = $ResuSql->fetchAll();
?>	
<table>
	<?php 
	 	//	foreach($MenuBase as $valor):
			$CMEClave  = '10';			///$valor['CMEClave'];
			$CMEDescri = 'Seguimineto';	//$valor['CMEDescri'];
			$CMEBasDat = 'Seguimiento';	//$valor['CMEBasDat'];?>

	<tr>
		<td>
			<a href="MenuIntranet.php?Param1=2&Param2=<?=$CMEClave?>" 
			   class="enlace_primero">
			<i class="bi bi-folder-fill"></i>	
			<?=$CMEDescri?>
			</a>
		</td> 
	</tr>
	<?php 
	if($Nivel > 1 && $CMEClave==$OpcMen ){
			$InstSql = 	"SELECT CTSClave,CTSDescripcion ".
						"FROM   $CMEBasDat.actipser ".
						"WHERE CTSClave in (SELECT PTipoServ ".
										   "FROM   $CMEBasDat.adPermi ".
										   "WHERE  PAyuntamiento = '".$ClavAyun."' AND ".
												  "PConsServ = ".$ConsAgen.")";

			if ($BandMens)  echo "2)<br>$InstSql<br><br>";
			$ResSql2 = $ConeBase->prepare($InstSql);
			$ResSql2->execute();
			$submenu = $ResSql2->fetchAll();
			foreach($submenu as $valor):
		  		$CTSClave       = $valor['CTSClave'];
		  		$CTSDescripcion = $valor['CTSDescripcion'];
			?>	
			<tr>
				<td>&nbsp;&nbsp;
					<a href="MenuIntranet.php?Param3=3&Param4=<?=$CTSClave?>" class="enlace_segundo">
					    <i class="bi bi-folder"></i>
						<?=$CTSDescripcion?>
					</a>		
				</td>
			</tr>	
			<?php 
				if ( $Nivel > 2 && $CTSClave == $OpcSub) {
					$InstSql = "SELECT COSClave,COSDescripcion,COSDireccion ".
							   "FROM ".$CMEBasDat.".adpermi ".
							   "Inner Join ".$CMEBasDat.".acopcser ON PTipoServ=COSTipSer AND POpciServ=COSClave ".
							   "WHERE PAyuntamiento = '".$ClavAyun."' AND ".
									   		 "PConsServ ='".$ConsAgen."' AND ". 
											 "PTipoServ = '".$OpcSub."'";
					if ($BandMens)  echo '3)<br>'.$InstSql.'<br><br>';
					$ResSql3 = $ConeBase->prepare($InstSql);
					$ResSql3->execute();
					$resultado = $ResSql3->fetchAll();
					foreach($resultado as $valor):
						$COSClave       = $valor['COSClave'];
						$COSDescripcion = $valor['COSDescripcion'];
						$COSDireccion   = $valor['COSDireccion'];
					?>
				<tr>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;
						<a href="ModuloIntra.php?Param1=<?=$CMEBasDat?>&Param2=<?=$CTSClave?>&Param3=<?=$CTSDescripcion?>&Param4=<?=$COSClave?>&Param5=<?=$COSDescripcion?>&Param6=<?=$COSDireccion?>" class="enlace_tercero">
						<i class="bi bi-file-earmark-check-fill"></i>
							<?=$COSDescripcion?>
						</a>	
					</td>
				</tr>	

	<?php			endforeach;
				}	
			 endforeach;
		}
		//endforeach; ?>
		</table>
	<a href="/IntraAgente/Intranet.php" class="enlace1 exit">Salir</a>
</body>
</html>
							