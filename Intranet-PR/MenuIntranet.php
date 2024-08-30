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
	<?php
	include 'Encabezado/EncaPrin.php';
	session_start();
	$ConeInEx = $_SESSION['ConeInEx'];
	// echo "Conexion: $ConeInEx";
	//Carga las variables
	$ArCooki1 = $_COOKIE['CMenu'];
	$AMenu = explode("|", $ArCooki1);
	$Nivel  = $AMenu[0];
	$OpcMen = $AMenu[1];
	$OpcSub = $AMenu[2];
	// echo "Nivel=$Nivel<br>";
	// echo "OpcMen=$OpcMen<br>";
	// echo "OpcSub=$OpcSub<br>";

	//Carga las variables
	$ArCooki2 = $_COOKIE['CEncaAcc'];
	$AEncaMae = explode("|", $ArCooki2);
	$ConsUsua = $AEncaMae[0];
	$ClavAyun = $AEncaMae[1];
	$DescAyun = $AEncaMae[2];
	$ConsUnid = $AEncaMae[3];
	$DescUnid = $AEncaMae[4];
	$MenuPrin = $AEncaMae[5];

	$BandMens = true;
	if (isset($_GET["Param0"])) {
		$BandMens = true;
	}

	include_once 'Conexion/conexion.php';


	?>
	<div class="intra d-flex align-items-center">
		<div class="container-xl d-flex justify-content-between">
			<h2 class="text-light fs-3 fw-semibold">
				Menu Intranet
			</h2>
			<a href="Intranet.php" class="btn-Regresar">
				Salir
			</a>
		</div>
	</div>

	<section class="contenedor-conac container-sm mb-5 mt-5">
		<div class="contenedor-conac-centrar">
			<h2 class="text-uppercase text-success fw-bolder text-center fs-1 mb-5">
				CONAC
			</h2>
			<div class="accordion secondary-focus shadow-lg" id="accordionPanelsStayOpenExample">
				<?php
				$InstSql = 	"SELECT CMEClave,CMEDescri,CMEBasDat " .
					"FROM acceso.atpermen " .
					"INNER JOIN acceso.acmenu ON CMEClave=PMenu " .
					"WHERE PAyuntamiento='" . $ClavAyun . "' and PConsServ='" . $ConsUsua . "'";

				if ($BandMens)
					echo '1)<br>' . $InstSql . '<br><br>';

				$ResuSql = $conexion->prepare($InstSql);
				$ResuSql->execute();
				$MenuBase = $ResuSql->fetchAll();

				if (!$BandMens) {
					echo "<pre>";
					var_dump($MenuBase);
					echo "<pre>";
				}

				foreach ($MenuBase as $RegTab01) {
						$MenuPrin = $RegTab01[0];
						$DescPrin = $RegTab01[1];
						$BasePrin = $RegTab01[2];

						$base = strval($BasePrin);
						echo "$base";

				?>
					<div class="accordion-item rounded">
						<h2 class="accordion-header">
							<!-- AÑO -->
							<button class="fs-5 accordion-button bg-success bg-opacity-100 fw-bold text-white fw-medium z-0" type="button" data-bs-toggle="collapse" data-bs-target="#accordionCollapse<?= $MenuPrin ?>" aria-expanded="true" aria-controls="accordionCollapse<?= $MenuPrin ?>">
								<?= $MenuPrin ?><?= $DescPrin ?> *<?= $base ?>*
							</button>
						</h2>
						<div id="accordionCollapse<?= $MenuPrin ?>"
							class="accordion-collapse collapse bg-white
							<?php if ($MenuBase === reset($RegTab01)) echo 'show'; ?>">
							<!-- Contenedor Cuerpo 1 INICIO-->
							<div class="accordion-body">
								<?php
								//?Segundo Query//

								$InstSql01 = 	'SELECT CTSClave , CTSDescripcion  ' .
												'FROM  '.$base.'.actipser ' .
												'WHERE  CTSClave  in (SELECT PTipoServ ' .
												'FROM '.$base.'.adPermi ' .
												'WHERE PAyuntamiento = "' . $ClavAyun . '" AND ' .
												'PConsServ = ' . $ConsUsua .')';

								if ($BandMens)  echo '2)<br>' . $InstSql01 . '<br><br>';

								$ResSql2 = $conexion->prepare($InstSql01);
								$ResSql2->execute();
								$submenu = $ResSql2->fetchAll();

								foreach ($submenu as $RegTab02) {
									$ClavSubM = $RegTab02[0];
									$DescSubM = $RegTab02[1];

								?>
									<div class="accordion-item rounded">
										<h2 class="accordion-header">
											<button class="z-0 accordion-button collapsed text-uppercase 
                        fw-semibold bg-success bg-opacity-75 text-dark rounded" type="button" data-bs-toggle="collapse"
												data-bs-target="#accordionCollapse<?= $MenuPrin ?>-<?= $ClavSubM ?>"
												aria-expanded="falsearia-controls="
												accordionCollapse<?= $MenuPrin ?>-<?= $ClavSubM ?>"><?= $DescSubM ?>
											</button>
										</h2>
										<div id="accordionCollapse<?= $MenuPrin ?>-<?= $ClavSubM ?>"
											class="accordion-collapse collapse<?php if ($submenu === reset($RegTab02)) echo 'show'; ?>">

											<div class="accordion-body">
												<?php

												$InstSql = 	"SELECT COSClave,COSDescripcion,COSDireccion " .
													"FROM $BasePrin.adpermi " .
													"Inner Join $BasePrin.acopcser ON PTipoServ=COSTipSer AND POpciServ=COSClave " .
													"WHERE PAyuntamiento = '" . $ClavAyun . "' AND " .
													"PConsServ ='" . $ConsUsua . "' AND " .
													"PTipoServ = '" . $ClavSubM . "'";

												// echo "3)$InstSql";
												if ($BandMens)  echo '3)<br>' . $InstSql . '<br><br>';

												$ResSql3 = $conexion->prepare($InstSql);
												$ResSql3->execute();
												$resultado = $ResSql3->fetchAll();

												foreach ($resultado as $RegTab03) {
													$ClavClIn = $RegTab03[0];
													$DescClIn = $RegTab03[1];
												?>
													<div class="accordion-item">
														<h2 class="accordion-header">
															<button class="accordion-button collapsed z-0 bg-success bg-opacity-50 text-dark fw-semibold fs-6" type="button" data-bs-toggle="collapse"
																data-bs-target="#accordionCollapse<?= $MenuPrin ?>-<?= $ClavSubM ?>-<?= $ClavClIn ?>" aria-expanded="false"
																aria-controls="accordionCollapse<?= $MenuPrin ?>-<?= $ClavSubM ?>-<?= $ClavClIn ?>">
																<?= $DescClIn ?>
															</button>
														</h2>
														<div id="accordionCollapse<?= $MenuPrin ?>-<?= $ClavSubM ?>-<?= $ClavClIn ?>" class="accordion-collapse collapse">
														</div>
													</div>
												<?php } ?>
											</div>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>