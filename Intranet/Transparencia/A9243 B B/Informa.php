<!DOCTYPE html>
<html lang="es">
<head>  
<?php include "../Encabezado/Ligas.php"?>
</head>
<script language="JavaScript" src="Informa.js"></script>

<body> 
<header class="shadow mb-4 bg-white">
<?php 
	//Varibales Globales
	include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
	//Encabezado	
	require_once($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaPrin.php'); 
?> 
</header>
	
<?php 
	//Carga de la Informacion	
	include 'InformaSERP.php';	
?>
<!-- <caption>
<?=	$DescTiSe?>	
</caption> -->
<div>
	<form id="PideDato" method="post" name="formulario" action="InformaCRUD.php">	
		<input type="hidden" name="C00" id="SV01" value="<?=$CRUD?>">
		<input type="hidden" name="C01" id="SV02" value="<?=$TipoMovi?>">
		<input type="hidden" name="C02" id="SV03" value="<?=$CampBusq?>">
		
		<div class="contenedor-tabla">
			<div class="contenedor-tabla-sec">
			<table class="ListInfo01 tabla">
				<tr class="">
					<th width="29%" class="text-uppercase" scope="row">
						Campo
					</th>
					<td width="71%">
						<a class="btn-Regresar container" href="InformaList.php">
							Regresar
						</a>
					</td>
				</tr>
				<!-- Inicia campos -->
				<tr>
					<td>No</td>
					<td>
						<input name="C05" id="VC05" type="number" value="<?=$VC05?>"
						class="form-control" placeholder="Titulo">
					</td>
				</tr>	
				<tr>
					<td>Período que se informa (Semestral)</td>
					<td>
						<input name="C06" id="VC06" type="int" value="<?=$VC06?>" 
						class="form-control" placeholder="Descripción" >
					</td>	  
				</tr>	
				
				<tr>
				  <td>atención: en este campo se mostrará el valor que se agregue al sistema, de acuerdo al valor seleccionado del campo (Período que se informa (Semestral)), para los criterios fecha de inicio y termino del período que se informa</td>
				  <td><input name="C07" id="VC07" type="text" value="<?=$VC07?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
				<tr>
				  <td>Fecha de la resolución y/o acta con el formato día/mes/año</td>
				  <td><input name="C08" id="VC08" type="date" value="<?=$VC08?>" 
						class="form-control" placeholder="Descripción" ></td>
			  
			  <tr>
				  <td>Hipervínculo al documento de la resolución y/o acta</td>
				  <td>				
				    <?php if ( $TipoMovi == "A" ) { ?>
					    Registrar la información para realizar el hipervinculo 
					<?php } else { ?>
					  	<!-- Subir imagen -->
						<a href="#" onclick="CarImgPa(<?= $CampBusq?>,<?=$VC03?>)">
							<i class="bi bi-file-arrow-up-fill text-dark fs-1"></i>
						</a>
						<!-- Visualizar Image -->
						<?php 
	 					   if ( $VC09 != '' ) { ?> 
							<a href="javascript:window.open('<?=$RutaArch.$VC09?>','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">
							<i class="bi bi-eye-fill fs-1 text-success"></i>
						<?php  echo "</a> "; } 
						} //} else {?>
				  </td>
				  
			  </tr>
				<tr>
				  <td>Area Responsable</td>
				  <td><input name="C10" id="VC10" type="text" value="<?=$VC10?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
				<tr>
				  <td>Nota</td>
				  <td><input name="C11" id="VC11" type="text" value="<?=$VC11?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
			<!-- Termina  campos -->	
			<tr>
				  <td></td>
				  <td>
					<button type="submit" name="Enviar" placeholder="<?=$MesnTiMo?>"
						value="<?=$MesnTiMo?>" class="btn-Submit container opacity-50">
							<?=$MesnTiMo?>
					</button>
				  </td>
			  </tr>
			</table>
	</form>	
</div>
<!-- <script src="/Intranet/Js/ValiForm.js"></script> -->
</body>
</html>