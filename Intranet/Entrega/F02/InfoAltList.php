<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Facultades de área</title>
	<link rel="stylesheet" href="/bootstrap-icons/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="/Intranet/CSS/Estilos/style.css">
</head>

<body>
	<header class="shadow mb-4 bg-white">
		<?php
		$RutaEnca = $_SERVER['DOCUMENT_ROOT'] . '/Intranet/';
		include($RutaEnca . 'Encabezado/EncaCook.php');
		require_once($RutaEnca . 'Encabezado/EncaPrin.php');
		?>
	</header>
	<?php include 'InfoAltListSERP.php';  ?>
	<!--encabezado-->
	<div class="container table-responsive">
		<form id="PideDato" method="post" name="formulario" action="InfoAltListCRUD.php">
			<input name="C02" id="VC02" type="hidden" value="<?= $NumeRegi ?>">
			<table width="70%" class="ListInfo tabla">
				<tr>
					<td colspan="3">Formato:<?= $ClavForm ?> <?= $DescForm ?> </td>
					<td colspan="6">
						<a href="InfoList.php"
							class="btn-Regresar">
							Regresar
						</a>
					</td>
				</tr>
				<tr align="center">
					<th>No</th>
					<th>Nombre <br>Reglamento</th>
					<th>Fecha <br>Emisión</th>
					<th>Vigencia</th>
					<th>Dependencia / Unidadades
						Administrativas Sujetas a su <br>
						uso o aplicación</th>
					<th>Número de <br> Ejemplares</th>
					<th>Dependencia / Unidadades <br>
						Administrativas Responsables<br>
						de su elaboración</th>
					<th>Dependencia / Unidadades <br>
						Administrativas Responsables<br>
						de su autorización</th>
					<th>Observaciones</th>
				</tr>
				<?php
				for ($i = 1; $i < 11; $i++) {
					$VC03 = $NumeRegi	+ $i;
					$VC04 = $VC03;
					$VC05 = "";
					$VC06 = "";
					$VC07 = "";
					$VC08 = "";
					$VC09 = 0;
					$VC10 = "";
					$VC11 = "";
					$VC12 = "";

					$RutaArch = "/ExpeElectroni/$ClavAyun/Entrega/" .
						"/$ClavForm/";
				?>
					<tr>
						<td><input name="C<?= $VC03 ?>04" id="VC04" type="text" value="<?= $VC04 ?>"
								class="form-control" placeholder="No. Reg"></td>
						<td><input name="C<?= $VC03 ?>05" id="VC05" type="text" value="<?= $VC05 ?>"
								class="form-control" placeholder="Digitar nombre del reglamento"></td>
						<td><input name="C<?= $VC03 ?>06" id="VC06" type="date" value="<?= $VC06 ?>"
								class="form-control" placeholder="Fecha"></td>
						<td><input name="C<?= $VC03 ?>07" id="VC07" type="text" value="<?= $VC07 ?>"
								class="form-control" placeholder="Digitar la vigencia"></td>
						<td><input name="C<?= $VC03 ?>08" id="VC08" type="text" value="<?= $VC08 ?>"
								class="form-control" placeholder="Digitar la Unidad Sujeta a su uso"></td>
						<td><input name="C<?= $VC03 ?>09" id="VC09" type="text" value="<?= $VC09 ?>"
								class="form-control" placeholder="Digitar el No de Ejemplar"></td>
						<td><input name="C<?= $VC03 ?>10" id="VC10" type="text" value="<?= $VC10 ?>"
								class="form-control" placeholder="Digitar la unidad Admon resp. Elabo."></td>
						<td><input name="C<?= $VC03 ?>11" id="VC11" type="text" value="<?= $VC11 ?>"
								class="form-control" placeholder="Digitar la unidad Admon resp. Elabo."></td>
						<td><input name="C<?= $VC03 ?>12" id="VC12" type="text" value="<?= $VC12 ?>"
								class="form-control" placeholder="Digitar la observación"></td>

					</tr>
				<?php	} ?>
				<tr>
					<td colspan="3"></td>
					<td colspan="6">
						<button type="submit" name="Enviar" placeholder="Registrar"
							value="Guardar" class="btn btn-Submit">
							Registrar
						</button>
					</td>
				</tr>
			</table>
		</form>
	</div>

	<?php
	//require_once($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/PiePagi.php'); 
	?>
</body>

</html>