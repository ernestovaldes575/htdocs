<!DOCTYPE html>
<html lang="es">
<head> 
	<?php
		include'../NormApli/Componente/LigasHTML.php';
	?>
</head>

<body>
<script src="FormatoLista.js"></script>
<header class="shadow mb-4 bg-white">
<?php
    $RutaEnca = $_SERVER['DOCUMENT_ROOT'].'/Intranet/';
	include($RutaEnca.'Encabezado/EncaCook.php');
	require_once($RutaEnca.'Encabezado/EncaPrin.php'); 
?>
</header>
<?php include 'FormatoListaSERP.php'; ?>	
<!--encabezado--> 
<div class="container table-responsive">
	<table width="70%" class="ListInfo tabla">
		<tr>
			<td >No</td>
			<td >Formato</td>
			<td class="text-center">
				<a href="/Intranet/MenuIntranet.php" class="btn-Regresar">
					Regresar
				</a>
			</td>
		</tr>
		<tr>
			<th>No</th>
			<th width="10%" class="text-center">Formato</th>
		</tr>
		<?php 
			foreach($ResuSql as $RegiTabl){
					$VC03 = $RegiTabl[0];	
					$VC04 = $RegiTabl[1];
		?>
		<tr>
			<td class="text-center"><?=$VC03?></td>
			<td class="text-center"><?=$VC04?></td>
			<td class="text-center">			 	
				<i class="bi bi-file-arrow-down btn-Modificar NumeTrim"
					data-ClFo='<?= $VC03?>' data-DeFo='<?= $VC04?>'  	
					title="Formato">
				</i>
			</td>
		</tr>
		<?php	} ?> 
	</table>
</div>	

<?php
//require_once($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/PiePagi.php'); 
?>
</body>
</html>