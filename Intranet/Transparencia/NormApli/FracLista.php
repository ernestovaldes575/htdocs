<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
	<?php
		include '../NormApli/Componente/LigasHTML.php';
	?>
</head>
<body>
	<script src="FracLista.js"></script>
	<header class="shadow mb-4 bg-white">
		<?php
		include($_SERVER['DOCUMENT_ROOT'] . '/Intranet/Encabezado/EncaCook.php');
		require_once($_SERVER['DOCUMENT_ROOT'] . '/Intranet/Encabezado/EncaPrin.php');
		?>
	</header>
	<?php
	include 'FracListaSERP.php';
	?>
	<!--encabezado-->
	<div class="container table-responsive card mb-5 p-5">
		<table width="70%" class="ListInfo tabla table table-striped table-bordered" id="tblRegistros">
			<thead>
				<tr>
					<td width="8%"></td>
					<td colspan="2"></td>
					<td class="text-center">
						<a href="ArtiLista.php" class="btn btn-secondary">
							Regresar
						</a>
					</td>
				</tr>
				<tr>
					<th>Inciso</th>
					<th width="10%" class="text-center">Subinciso</th>
					<th width="70%" class="text-center">Normatividad</th>
					<th width="20%" class="text-center">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach($ResuSql as $fila) {?>
					<tr>
						<td class="text-center"><?=$fila->FInciso;?></td>
						<td class="text-center"><?=$fila->FSubinciso;?></td>
						<td class="text-center"><?=$fila->FNormatividad;?></td>
						<td class="text-center">
							<i class="bi bi-file-arrow-down btn-Modificar NumeTrim" data-Inciso='<?= $VC03 ?>' data-SubInc='<?= $VC04 ?>' data-Normat='<?= $VC05 ?>' data-Period='<?= $VC06 ?>' title="3er Trimestre">
							</i>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

	<!-- jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<!-- Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<!-- DataTables JS -->
	<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>

	<script>
		$(function() {
			$('#tblRegistros').DataTable({
				"paging": true,
				"lengthChange": false,
				"searching": true,
				"ordering": true,
				"info": true,
				"autoWidth": false,
				"responsive": true,
			});
		});
	</script>

	<?php
	//require_once($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/PiePagi.php'); 
	?>
</body>

</html>