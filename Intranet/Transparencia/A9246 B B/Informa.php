<!DOCTYPE html>
<html lang="es">
<head>  
	<title>Fraccion 46B-Listado de Jubilados y Pensionados y el monto que reciben</title>
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
						class="form-control" placeholder="Descripción" >
					</td>	  
				</tr>	
				<tr>
					<td>Periodo que se informa</td>
					<td>
						<input name="C06" id="VC06" type="number" value="<?=$VC06?>" 
						class="form-control" placeholder="Descripción" >
					</td>	  
				</tr>	
				<tr>
				  <td>Periodo que se informa (Otro)</td>
				  <td><input name="C07" id="VC07" type="text" value="<?=$VC07?>" 
						class="form-control" placeholder="Descripción" ></td>
			  	</tr>
			  	<tr>
				  <td>Respuesta de Recibido</td>
				  <td><input  name="C08" id="VC08" type="text"value="<?=$VC08?>" 
						class="form-control" placeholder="Descripción" ></td>
			  	</tr>
				<tr>
				  <td>Respuesta de Administración</td>
				  <td><input  name="C09" id="VC09" type="text"value="<?=$VC09?>" 
						class="form-control" placeholder="Descripción" ></td>
			  	</tr>
				<tr>
				  <td>Nombre del Responsable</td>
				  <td><input name="C10" id="VC10" type="text" value="<?=$VC10?>" 
						class="form-control" placeholder="Descripción" ></td>
			  	</tr>
				<tr>
				  <td>Área Responsable</td>
				  <td><input name="C11" id="VC11" type="number" value="<?=$VC11?>" 
						class="form-control" placeholder="Descripción" ></td>
			  	</tr>
				<tr>
				  <td>Nota</td>
				  <td><input name="C12" id="VC12" type="text" value="<?=$VC12?>" 
						class="form-control" placeholder="Descripción" ></td>
			  	</tr>
			<!-- Termina  campos -->	
				<tr>
				  <td></td>
				  <td><button type="submit" name="Enviar" placeholder="<?=$MesnTiMo?>"
						value="<?=$MesnTiMo?>" class="btn-Submit container opacity-50" >
							<?=$MesnTiMo?>
						</button></td>
			  	</tr>
			</table>
	</form>	
</div>
<!--<script src="/Intranet/Js/ValiForm.js"></script>-->
<!--<script src="Formulario.js"></script>-->
</body>
</html>