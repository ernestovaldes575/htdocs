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
        			<td>Tipo de Integrante del Sujeto Obligado</td>				
        			<td><input type="text" name="C08" id="VC08" value="<?=$VC08?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Tipo de Integrante del Sujeto Obligado (Otro)</td>				
        			<td><input type="text" name="C09" id="VC09" value="<?=$VC09?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Clave/Nivel del puesto</td>				
        			<td><input type="text" name="C10" id="VC10" value="<?=$VC10?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Denominacion del puesto</td>				
        			<td><input type="text" name="C11" id="VC11" value="<?=$VC11?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Denominación del cargo</td>				
        			<td><input type="text" name="C12" id="VC12" value="<?=$VC12?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Área de adscripción</td>				
        			<td><input type="text" name="C13" id="VC13" value="<?=$VC13?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
      			<tr>
        			<td>Nombre</td>				
        			<td><input type="text" name="C14" id="VC14" value="<?=$VC14?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
      			<tr>
        			<td>Primer Apellido</td>				
        			<td><input type="text" name="C15" id="VC15" value="<?=$VC15?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
      			<tr>
        			<td>Segundo Apellido</td>				
        			<td><input type="text" name="C16" id="VC16" value="<?=$VC16?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Sexo</td>				
        			<td><input type="text" name="C17" id="VC17" value="<?=$VC17?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Sexo (otro) </td>				
        			<td><input type="text" name="C18" id="VC18 "value="<?=$VC18?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Remuneración mensual bruta</td>				
        			<td><input type="text" name="C19" id="VC19" value="<?=$VC19?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Tipo de moneda de la Remuneración bruta </td>				
        			<td><input type="text" name="C20" id="VC20" value="<?=$VC20?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Remuneracion mensual neta </td>				
        			<td><input type="text" name="C21" id="VC21" value="<?=$VC21?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Tipo de moneda de la Remuneración neta</td>				
        			<td><input type="text" name="C22" id="VC22" value="<?=$VC22?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Percepcion adicional en dinero</td>				
        			<td><input type="text" name="C23" id="VC23" value="<?=$VC23?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Percepción adicional en especie</td>				
        			<td><input type="text" name="C24" id="VC24" value="<?=$VC24?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Ingresos, monto bruto y neto</td>				
        			<td><input type="text" name="C25" id="VC25" value="<?=$VC25?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Sistemas de Compensación </td>				
        			<td><input type="text" name="C26" id="VC26" value="<?=$VC26?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Gratificaciones</td>				
        			<td><input type="text" name="C27" id="VC27" value="<?=$VC27?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Primas</td>				
        			<td><input type="text" name="C28" id="VC28" value="<?=$VC28?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Comisiones</td>				
        			<td><input type="text" name="C29" id="VC29" value="<?=$VC29?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Dietas</td>				
        			<td><input type="text" name="C30" id="VC30" value="<?=$VC30?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Bonos</td>				
        			<td><input type="text" name="C31" id="VC31" value="<?=$VC31?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				  <tr>
        			<td>Estimulos</td>				
        			<td><input type="text" name="C32" id="VC32" value="<?=$VC32?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Apoyos económicos </td>				
        			<td><input type="text" name="C33" id="VC33" value="<?=$VC33?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Prestaciones económicas </td>				
        			<td><input type="text" name="C34" id="VC34" value="<?=$VC34?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Prestaciones en especie </td>				
        			<td><input type="text" name="C35" id="VC35" value="<?=$VC35?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Área responsable de la información </td>				
        			<td><input type="text" name="C36" id="VC36" value="<?=$VC36?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Nota </td>				
        			<td><input type="text" name="C37" id="VC37" value="<?=$VC37?>" class="form-control" placeholder="Descripción"></td>
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