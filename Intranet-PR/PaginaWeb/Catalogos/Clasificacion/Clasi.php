<!DOCTYPE html>
<html lang="es">
<head>  
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Clasificacion</title>
	<link rel="stylesheet" href="/bootstrap-icons/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="/Intranet/Css/style.css">
</head>
<script language="JavaScript" src="Clasi.js"></script> <!-- <-Cambiar nombre -->

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
	include 'ClasiSERP.php';	 //<- Cambiar nombra
?>
<!-- <caption>
<?=	$DescTiSe?>	
</caption> -->
<div>
	<form id="PideDato" method="post" name="formulario" onsubmit="validarFormulario()" action="ClasiApi.php">
		<input type="hidden" name="C00" id="SV01" value="<?=$CRUD?>">
		<input type="hidden" name="C01" id="SV02" value="<?=$TipoMovi?>">
		<input type="hidden" name="C02" id="SV03" value="<?=$CampBusq?>">
		
		<div class="contenedor-tabla">
			<div class="contenedor-tabla-sec">
			<table class="ListInfo01 tabla">
				<tr class="">
					<td width="29%" class="text-uppercase" scope="row">
						Campo
					</td>
					<td width="71%">
						<a class="btn-Regresar container" href="ClasiList.php">
							Regresar
						</a>
					</td>
				</tr>	
				<tr>
					<th>Titulo</th>
					<td>
						<input id="VC03" type="text" name="C03" value="<?=$VC03?>"
						class="form-control" placeholder="Titulo">
					</td>
				</tr>	
				<tr>
					<th>Descripcion</th>
					<td>
						<input id="VC04" type="text" name="C04" value="<?=$VC04?>" 
						class="form-control" placeholder="Descripción" >
					</td>	  
				</tr>	
				<!-- Agregar campos--> 
				<tr>
					<td></td>
					<td>
						<button type="submit" name="Enviar" placeholder="Registrar"
						value="<?=$MesnTiMo?>" class="btn-Submit container opacity-50" disabled>
							Registrar
						</button>
					</td>
				</tr>
			</table>
	</form>	
</div>
	<script src="ValiForm.js"></script>
</body>
</html>