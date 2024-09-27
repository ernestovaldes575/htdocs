<!DOCTYPE html>
<html lang="es">
<head> 
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Estructura Programatica</title>
	<link rel="stylesheet" href="/bootstrap-icons/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="/Intranet/CSS/Estilos/style.css">
</head>
<body>
<header class="shadow mb-4 bg-white">
<?php
   $RutaEnca = $_SERVER["DOCUMENT_ROOT"]."/Intranet/";
	include($RutaEnca."Encabezado/EncaCook.php");
	require_once($RutaEnca."Encabezado/EncaPrin.php"); 
?>
</header>
<?php include "InfoAltListSERP.php";  ?>
<!--encabezado--> 
<form id="PideDato" method="post" name="formulario" action="InfoAltListCRUD.php">
	<input name="C02" id="VC02" type="hidden" value="<?=$NumeRegi?>">
	<table width="70%" class="ListInfo tabla">
		<tr>
			<td colspan="3">Formato:<?=$ClavForm?> <?=$DescForm?>  </td>
			<td colspan="6">
				<a href="InfoList.php" 
					class="btn-Regresar">
			    Regresar 
			    </a>
			</td>
		</tr>
		<tr align="center">
			<th>Numero Progresivo</th>
			<th>Número de Acta</th>
			<th>Fecha de Aprobación</th>
			<th>Número de Gaceta Municipal</th>
			<th>Fecha de Publicación</th>
			<th>Última revisión</th>
			<th>Medios de Difusión</th>
			<th>Dependencia/Unidad Administrativa Responsable del Resguardo</th>
			<th>Observaciones</th>
		</tr>
		<?php 
			for ($i=1; $i<11; $i++) {
			  $VC03 = $NumeRegi	+ $i;
			   $VC04 = $VC03; 
			   $VC05 = 0; 
			   $VC06 = ""; 
			   $VC07 = 0; 
			   $VC08 = 0; 
			   $VC09 = 0; 
			   $VC10 = ""; 
			   $VC11 = ""; 
			   $VC12 = 0; 
			  
			  $RutaArch = "/ExpeElectroni/$ClavAyun/Entrega/".
				  		 "/$ClavForm/";
		?>
		<tr>
			<td><input name="C<?=$VC03?>04" id="VC04" type="" value="<?=$VC04?>"
					   class="form-control" placeholder="Numero Progresivo" title="Numero Progresivo"></td>
			<td><input name="C<?=$VC03?>05" id="VC05" type="" value="<?=$VC05?>"
					   class="form-control" placeholder="Número de Acta" title="Número de Acta"></td>
			<td><input name="C<?=$VC03?>06" id="VC06" type="" value="<?=$VC06?>"
					   class="form-control" placeholder="Fecha de Aprobación" title="Fecha de Aprobación"></td>
			<td><input name="C<?=$VC03?>07" id="VC07" type="" value="<?=$VC07?>"
					   class="form-control" placeholder="Número de Gaceta Municipal" title="Número de Gaceta Municipal"></td>
			<td><input name="C<?=$VC03?>08" id="VC08" type="" value="<?=$VC08?>"
					   class="form-control" placeholder="Fecha de Publicación" title="Fecha de Publicación"></td>
			<td><input name="C<?=$VC03?>09" id="VC09" type="" value="<?=$VC09?>"
					   class="form-control" placeholder="Última revisión" title="Última revisión"></td>
			<td><input name="C<?=$VC03?>10" id="VC10" type="" value="<?=$VC10?>"
					   class="form-control" placeholder="Medios de Difusión" title="Medios de Difusión"></td>
			<td><input name="C<?=$VC03?>11" id="VC11" type="" value="<?=$VC11?>"
					   class="form-control" placeholder="Dependencia/Unidad Administrativa Responsable del Resguardo" title="Dependencia/Unidad Administrativa Responsable del Resguardo"></td>
			<td><input name="C<?=$VC03?>12" id="VC12" type="" value="<?=$VC12?>"
					   class="form-control" placeholder="Observaciones" title="Observaciones"></td>
			
		</tr>
		<?php	} ?> 
		<tr>
			<td colspan="3"></td>
			<td colspan="6">
			<button type="submit" name="Enviar" placeholder="Registrar"
						value="Guardar" >
							Registrar
						</button>
		</td>
		</tr>
	</table>
</form>
 
<?php
//require_once($_SERVER["DOCUMENT_ROOT"]."/Intranet/Encabezado/PiePagi.php"); 
?>
</body>
</html>
