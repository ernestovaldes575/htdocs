<!DOCTYPE html>
<html lang="es">

<head>
	<?php
	$RutaEnca = $_SERVER['DOCUMENT_ROOT'] . '/Intranet/';
	$TituEnca = "ER-02 - Reglamento";
	include($RutaEnca . 'Encabezado/EncaLiga.php');
	?>
	<link rel="stylesheet" href="/bootstrap-icons/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="/Intranet/CSS/Estilos/style.css">

</head>

<body>
	<!--encabezado-->
	<header class="bg-white border border-bottom">
		<?php include($RutaEnca . 'Encabezado/EncaPrin.php'); ?>
	</header>
	<?php include 'InfoListSERP.php'; ?>
	<!-- Card -->
	<div class="card p-0 col-md-9 mx-auto mt-2">
		<!-- Card-Header -->
		<div class="card-header">
			Formato:<?= $ClavForm ?> <?= $DescForm ?>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="ListInfo table table-striped table-bordered">
					<tr>
						<td colspan="8" class="text-center">
							Formato:<?= $ClavForm ?> <?= $DescForm ?>
						</td>
						<td colspan="4">
							<a href="../Formato.php" class="btn-Regresar">
								Regresar
							</a>
						</td>
					</tr>
					<tr>
						<th class="fs-6">
							No
						</th>
						<th>
							Nombre Reglamento
						</th>
						<th>Fecha Emisión</th>
						<th>Vigencia</th>
						<th class="	">
							Dependencia / Unidadades
							Administrativas Sujetas a su
							uso o aplicación
						</th>
						<th>Número de Ejemplares</th>
						<th>Dependencia / Unidadades
							Administrativas Responsables
							de su elaboración</th>
						<th>Dependencia / Unidadades
							Administrativas Responsables
							de su autorización</th>
						<th>Observaciones</th>
						<th>
							<?php
							if ($Alta == "A") { ?>
								<i class="bi bi-plus-lg btn-Nuevo NuevUno" title="Alta de Uno" data-id='0'></i>
							<?php } ?>
						</th>
						<th>
							<?php
							if ($Alta == "A") { ?>
								<i class="bi bi-align-middle btn-Nuevo NuevList" title="Alta de Lista" data-id='0'></i>
							<?php } ?>
						</th>
					</tr>
					<?php
					foreach ($ResuSql as $RegiTabl) {
						$VC03 = $RegiTabl[0];
						$VC04 = $RegiTabl[1];
						$VC05 = $RegiTabl[2];
						$VC06 = $RegiTabl[3];
						$VC07 = $RegiTabl[4];
						$VC08 = $RegiTabl[5];
						$VC09 = $RegiTabl[6];
						$VC10 = $RegiTabl[7];
						$VC11 = $RegiTabl[8];

						$RutaArch = "/ExpeElectroni/$ClavAyun/Transparen" .
							"/$ClavForm/";
					?>
						<tr>
							<td><?= $VC04 ?></td>
							<td><?= $VC05 ?></td>
							<td><?= $VC06 ?></td>
							<td><?= $VC07 ?></td>
							<td><?= $VC08 ?></td>
							<td><?= $VC09 ?></td>
							<td><?= $VC10 ?></td>
							<td><?= $VC11 ?></td>
							<td></td>
							<td data-titulo="Eliminar:">
								<?php if ($Baja == "A") { ?>
									<i class="bi bi-x-square btn-Eliminar ElimUno "
										data-CaBu='<?= $VC03 ?>' title="Eliminar"></i>
								<?php } ?>
							</td>
							<td data-titulo="Editar: ">
								<?php if ($Modi == "A") { ?>
									<i class="bi bi-pencil-square btn-Modificar ModiUno"
										data-CaBu="<?= $VC03 ?>" title="Modificar uno"></i>
								<?php } ?>
							</td>
							<td data-titulo="Editar: ">
								<?php if ($Modi == "A") { ?>
									<i class="bi bi-file-earmark-ruled btn-Modificar ModiList"
										data-CaBu="<?= $VC03 ?>" title="Modificar Lista"></i>
								<?php } ?>
							</td>
						</tr>
					<?php	} ?>
				</table>
			</div>
		</div>
	</div>
	

	<?php
	//require_once($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/PiePagi.php'); 
	?>
	<script src="InfoList.js"></script>
</body>

</html>