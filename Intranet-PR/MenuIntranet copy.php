<!DOCTYPE html>
<html lang="en">

<head>
	<?php
	$Titulo = 'Menu Intranet';
	include 'components/encabezado.php';
	include 'components/logoHeader.php';
	?>
</head>

<body>
	<?php include 'Encabezado/EncaPrin.php'; ?>

	<?php

	session_start();
	if (!$_SESSION['activo']) {
		header("Location:MenuIntranet copy.php");
	}

	date_default_timezone_set('America/Mexico_City');
	//Carga las variables
	$ArCooki2 = $_SESSION['CEncaAcc'];
	$AEncaMae = explode("|", $ArCooki2);
	var_dump($AEncaMae);
	$ConsUsua = $AEncaMae[0];
	$ClavAyun = $AEncaMae[1];
	$DescAyun = $AEncaMae[2];
	$ConsUnid = $AEncaMae[3];
	$DescUnid = $AEncaMae[4];
	$EjerTrab = $AEncaMae[5];

	// echo "ConsUsua=$ConsUsua<br>";
	// echo "ClavAyun=$ClavAyun<br>";
	// echo "DescAyun=$DescAyun<br>";
	$ArCooki1 = $_SESSION['CMenu'];
	$AMenu = explode("|", $ArCooki1);
	$Nivel = $AMenu[0];
	$OpcMen = $AMenu[1];
	$OpcSub = $AMenu[2];
	// echo "Nivel=$Nivel<br>";
	// echo "OpcMen=$OpcMen<br>";
	// echo "OpcSub=$OpcSub<br>";



	$BandMens = false;
	if (isset($_GET["Param0"])) {
		$BandMens = true;
	}

	include_once 'Conexion/conexion.php';

	$InstSql = "SELECT CMEClave,CMEDescri,CMEBasDat " .
		"FROM acceso.atpermen " .
		"INNER JOIN acceso.acmenu ON CMEClave=PMenu " .
		"WHERE PAyuntamiento='" . $ClavAyun . "' and PConsServ='" . $ConsUsua . "'";

	if ($BandMens)
		echo '1)<br>' . $InstSql . '<br><br>';
	$ResuSql = $conexion->prepare($InstSql);
	$ResuSql->execute();
	$MenuBase = $ResuSql->fetchAll();
	?>
	<div class="intra d-flex align-items-center">
		<div class="container-xl d-flex justify-content-between">
			<h2 class="text-light fs-3 fw-semibold">
				Menu Intranet
			</h2>
			<a href="salir.php" class="btn-Regresar">
				Salir
			</a>
		</div>
	</div>

	<div class="table-responsive container-sm">
		<table class="tabla mt-4">
			<?php
			foreach ($MenuBase as $valor) {
				$CMEClave  = $valor['CMEClave'];
				$CMEDescri = $valor['CMEDescri'];
				$CMEBasDat = $valor['CMEBasDat']; ?>
				<tr>
					<td>
						<a href="MenuIntranetApi.php?Param1=2&Param2=<?= $CMEClave ?>"
							class="enlace_primero text-success fw-semibold text-uppercase fs-4 text-decoration-none">
							<i class="bi bi-folder-fill"></i>
							<?= $CMEDescri ?>
						</a>
					</td>
				</tr>
				<?php
				if ($Nivel > 1 && $CMEClave == $OpcMen) {
					$InstSql = 	"SELECT `CTSClave`,`CTSDescripcion` " .
						"FROM " . $CMEBasDat . ".actipser " .
						"WHERE `CTSClave` in (SELECT PTipoServ " .
						"FROM $CMEBasDat.adPermi " .
						"WHERE PAyuntamiento = '" . $ClavAyun . "' AND " .
						"PConsServ = " . $ConsUsua . ")";

					if ($BandMens)  echo '2)<br>' . $InstSql . '<br><br>';
					$ResSql2 = $conexion->prepare($InstSql);
					$ResSql2->execute();
					$submenu = $ResSql2->fetchAll();
					foreach ($submenu as $valor) {
						$CTSClave = $valor['CTSClave'];
						$CTSDescripcion = $valor['CTSDescripcion'];
				?>

						<tr>
							<td>
								<a href="MenuIntranetApi.php?Param3=3&Param4=<?= $CTSClave ?>"
									class="enlace_segundo text-info-emphasis text-uppercase fw-semibold 
						fs-5 text-decoration-none fw-semibold">
									<i class="bi bi-folder"></i>
									<?= $CTSDescripcion ?>
								</a>
							</td>
						</tr>
						<?php
						if ($Nivel > 2 && $CTSClave == $OpcSub) {
							$InstSql = 	"SELECT COSClave,COSDescripcion,COSDireccion " .
								"FROM " . $CMEBasDat . ".adpermi " .
								"Inner Join " . $CMEBasDat . ".acopcser ON PTipoServ=COSTipSer AND POpciServ=COSClave " .
								"WHERE PAyuntamiento = '" . $ClavAyun . "' AND " .
								"PConsServ ='" . $ConsUsua . "' AND " .
								"PTipoServ = '" . $OpcSub . "'";
							// echo "3)$InstSql";
							if ($BandMens)  echo '3)<br>' . $InstSql . '<br><br>';
							$ResSql3 = $conexion->prepare($InstSql);
							$ResSql3->execute();
							$resultado = $ResSql3->fetchAll();
							foreach ($resultado as $valor) {
								$COSClave       = $valor['COSClave'];
								$COSDescripcion = $valor['COSDescripcion'];
								$COSDireccion   = $valor['COSDireccion'];
						?>
								<tr>
									<td>
										<a href="ModuloIntra.php?Param1=<?= $CMEBasDat ?>&Param2=<?= $CTSClave ?>&Param3=<?= $CTSDescripcion ?>&Param4=<?= $COSClave ?>&Param5=<?= $COSDescripcion ?>&Param6=<?= $COSDireccion ?>"
											class="enlace_tercero text-decoration-none	text-black fw-semibold">
											<i class="bi bi-file-earmark-check-fill"></i>
											<?= $COSDescripcion ?>
										</a>
									</td>
								</tr>
			<?php			}
						}
					}
				}
			}
			?>
		</table>

</body>

</html>