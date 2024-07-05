<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		$Titulo = 'Menu Intranet';
		include 'components/encabezado.php';
		include 'components/logoHeader.php';
	?>
	<!-- Bootstrap CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
	<!-- Bootstrap Icons -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css" rel="stylesheet">
	<style>
		.sidebar {
			height: 100vh;
			background-color: #f8f9fa;
		}
		.main-content {
			padding: 20px;
		}
	</style>
</head>
<body>
	<?php 
		session_start();
		$ConeInEx = $_SESSION['ConeInEx'];
		$ArCooki1 = $_COOKIE['CMenu'];
		$AMenu = explode("|", $ArCooki1);
		$Nivel  = $AMenu[0]; 
		$OpcMen = $AMenu[1]; 
		$OpcSub = $AMenu[2];
		$ArCooki2 = $_COOKIE['CEncaAcc'];
		$AEncaMae = explode("|", $ArCooki2);
		$ConsUsua = $AEncaMae[0]; 
		$ClavAyun = $AEncaMae[1];
		$DescAyun = $AEncaMae[2];
		$ConsUnid = $AEncaMae[3];
		$DescUnid = $AEncaMae[4];
		$EjerTrab = $AEncaMae[5];
		$BandMens = false;
		if(isset($_GET["Param0"]) ){
			$BandMens = true;
		}
		include_once 'Archivos/Conexiones/conexion.php';
		$InstSql = "SELECT CMEClave,CMEDescri,CMEBasDat FROM acceso.atpermen INNER JOIN acceso.acmenu ON CMEClave=PMenu WHERE PAyuntamiento='".$ClavAyun."' and PConsServ='".$ConsUsua."'";
		if ($BandMens) echo '1)<br>'.$InstSql.'<br><br>';		   
		$ResuSql = $conexion->prepare($InstSql);
		$ResuSql->execute();
		$MenuBase = $ResuSql->fetchAll();
	?>
	<div class="container-fluid">
		<div class="row">
			<nav class="col-md-3 col-lg-3 d-md-block sidebar shadow-lg">
				<div class="position-sticky">
					<ul class="nav flex-column align-content-between mt-2">
						<?php 
						foreach($MenuBase as $valor){
							$CMEClave  = $valor['CMEClave'];
							$CMEDescri = $valor['CMEDescri'];
							$CMEBasDat = $valor['CMEBasDat'];?>
							<li class="nav-item">
								<a href="MenuIntranetApi.php?Param1=2&Param2=<?=$CMEClave?>" 
									class="nav-link text-success fw-semibold text-uppercase">
									<i class="bi bi-folder-fill"></i>
									<?=$CMEDescri?>
								</a>
							</li>
							<?php 
							if($Nivel > 1 && $CMEClave==$OpcMen ){
								$InstSql = "SELECT `CTSClave`,`CTSDescripcion` FROM ".$CMEBasDat.".actipser WHERE `CTSClave` in (SELECT PTipoServ FROM $CMEBasDat.adPermi WHERE PAyuntamiento = '".$ClavAyun."' AND PConsServ = ".$ConsUsua.")";
								if ($BandMens) echo '2)<br>'.$InstSql.'<br><br>';
								$ResSql2 = $conexion->prepare($InstSql);
								$ResSql2->execute();
								$submenu = $ResSql2->fetchAll();
								foreach($submenu as $valor){
									$CTSClave = $valor['CTSClave'];
									$CTSDescripcion = $valor['CTSDescripcion'];
							?>
							<li class="nav-item ms-3">
								<a href="MenuIntranetApi.php?Param3=3&Param4=<?=$CTSClave?>" 
								   class="nav-link text-info-emphasis text-uppercase">
									<i class="bi bi-folder"></i> <?=$CTSDescripcion?>
								</a>
							</li>	
							<?php 
								if ($Nivel > 2 && $CTSClave == $OpcSub){
									$InstSql = "SELECT COSClave,COSDescripcion,COSDireccion FROM ".$CMEBasDat.".adpermi Inner Join ".$CMEBasDat.".acopcser ON PTipoServ=COSTipSer AND POpciServ=COSClave WHERE PAyuntamiento = '".$ClavAyun."' AND PConsServ ='".$ConsUsua."' AND PTipoServ = '".$OpcSub."'";
									if ($BandMens) echo '3)<br>'.$InstSql.'<br><br>';
									$ResSql3 = $conexion->prepare($InstSql);
									$ResSql3->execute();
									$resultado = $ResSql3->fetchAll();
									foreach($resultado as $valor){
										$COSClave = $valor['COSClave'];
										$COSDescripcion = $valor['COSDescripcion'];
										$COSDireccion = $valor['COSDireccion'];
							?>
							<li class="nav-item ms-5">
								<a href="ModuloIntra.php?Param1=<?=$CMEBasDat?>&Param2=<?=$CTSClave?>&Param3=<?=$CTSDescripcion?>&Param4=<?=$COSClave?>&Param5=<?=$COSDescripcion?>&Param6=<?=$COSDireccion?>" class="nav-link text-black">
									<i class="bi bi-file-earmark-check-fill"></i> <?=$COSDescripcion?>
								</a>
							</li>
							<?php 
									}
								}	
							}
						}
					}
					?>
					</ul>
					<div class="d-flex align-items-center p-2 bg-primary my-2 rounded-2">
						<i class="bi bi-person-fill fs-2 text-white"></i>
						<h2 class="text-white fw-semibold">Ernesto Valdes Lujano</h2>
					</div>
					<div>
						<a href="/" class="btn-Regresar">
							Salir
						</a>
					</div>
				</div>
			</nav>
			<main class="col-md-9 ms-sm-auto col-lg-9 main-content d-flex align-items-center justify-content-center">
				<img src="/Intranet/img/SIMGA.jpg" alt="SIMGA" style="width: 40em;" class="rounded-5 shadow-lg img-fluid">
			</main>
		</div>
	</div>
	<!-- Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
