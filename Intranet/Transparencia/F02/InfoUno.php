<!DOCTYPE html>
<html lang="es">
<head>  
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Facultades de área</title>
	<link rel="stylesheet" href="/bootstrap-icons/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="/Intranet/CSS/Estilos/style.css">
</head>
<script language="JavaScript" src="InfoUno.js"></script>

<body> 
<header class="shadow mb-4 bg-white">
<?php
    $RutaEnca = $_SERVER['DOCUMENT_ROOT'].'/Intranet/';
	include($RutaEnca.'Encabezado/EncaCook.php');
	require_once($RutaEnca.'Encabezado/EncaPrin.php'); 
?>
</header>
<?php include 'InfoUnoSERP.php';  ?>
<div>
	<form id="PideDato" method="post" name="formulario" action="InfoUnoCRUD.php">	
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
						<a class="btn-Regresar container" href="InfoList.php">
							Regresar
						</a>
					</td>
				</tr>
				<!-- Inicia campos -->
				<tr>
					<th>No</th>
					<td>
						<input name="C03" id="VC03" type="text" value="<?=$VC03?>"
						class="form-control" placeholder="Digitar No.">
					</td>
				</tr>	
				<tr>
					<th>Nombre Reglamento</th>
					<td>
						<input name="C04" id="VC04" type="text" value="<?=$VC04?>" 
						class="form-control" placeholder="Digitar nombre del reglamento" >
					</td>	  
				</tr>	
				<tr>
				  <td>Fecha Emisión</td>
				  <td><input name="C05" id="VC05" type="date" value="<?=$VC05?>" 
						class="form-control" placeholder="Fecha de emision" ></td>
			  </tr>
				<tr>
				  <td>Vigencia</td>
				  <td><input name="C06" id="VC06" type="text" value="<?=$VC06?>" 
						class="form-control" placeholder="Digitar la vigencia" ></td>
			  </tr>
				<tr>
				  <td>Unidad sujetas uso</td>
				  <td><input  name="C07" id="VC07" type="text"value="<?=$VC07?>" 
						class="form-control" placeholder="Digitar la Unidad Sujeta a su uso" ></td>
			  </tr>
				<tr>
				  <td>No Ejemplar</td>
				  <td><input name="C08" id="VC08" type="text" value="<?=$VC08?>" 
						class="form-control" placeholder="digitar el No de Ejemplar" ></td>
			  </tr>
			  <tr>
				  <td>Unidad Admon Resp Elab</td>
				  <td>				
				  <input name="C09" id="VC09" type="text" value="<?=$VC09?>" 
				  class="form-control" placeholder="Digitar la unidad Admon resp. Elabo." >
				  </td>
				  
			  </tr>
				<tr>
				  <td>Unidad Admon Resp Auto</td>
				  <td><input name="C10" id="VC10" type="text" value="<?=$VC10?>" 
						class="form-control" placeholder="Digitar la unidad Admon resp. Elabo." ></td>
			  </tr>
				<tr>
				  <td>Observación</td>
				  <td><input name="C11" id="VC11" type="text" value="<?=$VC11?>" 
						class="form-control" placeholder="Digitar la observación" ></td>
			  </tr>
			<!-- Termina  campos -->	
				<tr>
				  <td></td>
				  <td><button type="submit" name="Enviar" placeholder="Registrar"
						value="<?=$MesnTiMo?>" class="btn-Submit container opacity-50" disabled>
							Registrar
						</button></td>
			  </tr>
			</table>
	</form>	
</div>
<script src="/Intranet/Js/ValiForm.js"></script>
</body>
</html>