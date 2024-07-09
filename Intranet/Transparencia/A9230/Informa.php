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
		<input type="hidden" name="C03" value="<?=$VC03?>">
  		<input type="hidden" name="C04" value="<?=$VC04?>">
  		<input type="hidden" name="C05" value="<?=$VC05?>">
		
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
					<td>Fecha Inicio del periodo que se informa</td>
					<td>
						<input name="C06" id="VC06" type="date" value="<?=$VC06?>" 
						class="form-control" placeholder="Descripción" >
					</td>	  
				</tr>	
				<tr>
				  <td>Fecha de Termino del periodo que se informa</td>
				  <td><input name="C07" id="VC07" type="date" value="<?=$VC07?>" 
						class="form-control" placeholder="Descripción" ></td>
				</tr>
				<tr>
        			<td>Ejercicio Auditado</td>				
        			<td><input type="text" name="C08" id="VC08" value="<?=$VC08?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Hipervinculo a los Estados Financieros Dictaminados</td>				
        			<td><input type="text" name="C09" id="VC09" value="<?=$VC09?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Fecha de emisión del dictamen</td>				
        			<td><input type="date" name="C10" id="VC10" value="<?=$VC10?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Hipervinculo al dictamen de estados financieros</td>				
        			<td><input type="text" name="C11" id="VC11" value="<?=$VC11?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Total de observaciones resultantes</td>				
        			<td><input type="text" name="C12" id="VC12" value="<?=$VC12?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Total de aclaraciones efectuadas</td>				
        			<td><input type="text" name="C13" id="VC13" value="<?=$VC13?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
      			<tr>
        			<td>Total de solventaciones</td>				
        			<td><input type="text" name="C14" id="VC14" value="<?=$VC14?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
      			<tr>
        			<td>Nombre del contador público que realizó el dictamen</td>				
        			<td><input type="text" name="C15" id="VC15" value="<?=$VC15?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
      			<tr>
        			<td>Primer Apellido del contador público </td>				
        			<td><input type="text" name="C16" id="VC16" value="<?=$VC16?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Segundo Apellido del contador público</td>				
        			<td><input type="text" name="C17" id="VC17" value="<?=$VC17?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Denominación de la contaduría pública que realizó el dictamen</td>				
        			<td><input type="text" name="C18" id="VC18 "value="<?=$VC18?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Area Responsable</td>				
        			<td><input type="text" name="C19" id="VC19" value="<?=$VC19?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Nota</td>				
        			<td><input type="text" name="C20" id="VC20" value="<?=$VC20?>" class="form-control" placeholder="Descripción"></td>
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