<!DOCTYPE html>
<html lang="es">
<head>  
	<meta charset="UTF-8">
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

				<tr>
					<td>Fecha Inicio</td>
					<td>
						<input name="C06" id="VC06" type="date" value="<?=$VC06?>" 
						class="form-control" placeholder="Descripción" >
					</td>	  
		
				
				<tr>
				  <td>Fecha de Termino</td>
				  <td><input name="C07" id="VC07" type="date" value="<?=$VC07?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
				<tr>
				  <td>Nombre Programa</td>
				  <td><input name="C08" id="VC08" type="text" value="<?=$VC08?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
				<tr>
				  <td>Objetivo</td>
				  <td><input  name="C09" id="VC09" type="text"value="<?=$VC09?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
				<tr>
				  <td>Nombre Indicador</td>
				  <td><input name="C10" id="VC10" type="text" value="<?=$VC10?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
			
		
				<tr>
				  <td>Dimensiones AMedir</td>
				  <td><input name="C11" id="VC11" type="text" value="<?=$VC11?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
				<tr>
				  <td>Definicion Indicador</td>
				  <td><input name="C12" id="VC12" type="text" value="<?=$VC12?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>

			  <tr>
				  <td>Metodo Calculo</td>
				  <td><input name="C13" id="VC13" type="text" value="<?=$VC13?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
			  <tr>
				  <td>Unidad Medida</td>
				  <td><input name="C14" id="VC14" type="text" value="<?=$VC15?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
			  <tr>
				  <td>Frecuencia Medicion</td>
				  <td><input name="C15" id="VC15" type="text" value="<?=$VC15?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
			  <tr>
				  <td>Linea Base</td>
				  <td><input name="C16" id="VC16" type="text" value="<?=$VC16?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
			  <tr>
				  <td>Metas Programadas</td>
				  <td><input name="C17" id="VC17" type="text" value="<?=$VC17?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
			  <tr>
				  <td>Metas Ajustadas</td>
				  <td><input name="C18" id="VC18" type="text" value="<?=$VC18?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
			  <tr>
				  <td>Avance</td>
				  <td><input name="C19" id="VC19" type="text" value="<?=$VC19?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
			  <tr>
				  <td>Sentido Indicador</td>
				  <td>
				  <!-- <select name="select" >
					<option value="01">Asendente</option>
					<option value="02" >Desendente</option>
					<option value="03" selected>No Aplica</option>
					<option value="04">Otro</option>
				  </select> -->
				  <?php /*
		 			foreach($ResCat01 as $RegiTabl){
						$CC03 = $RegiTabl['Clave'];
						$CC04 = $RegiTabl['Descri'];
						echo "Clave: $CC03 <br> ";
					} */?>
				  <select name="C20" class="form-control">			
				  <?php 
		 			foreach($ResCat01 as $RegiTabl){ 
						$CC03 = $RegiTabl['Clave'];
						$CC04 = $RegiTabl['Descri'];
						$CampSele = ( $CC03 == $VC20 )? "selected" : ""; 
 						echo "<option value='$CC03' $CampSele>$CC04</option> ";
					} ?>
				  </select> 	
				  	
				  <!-- <input name="C20" id="VC20" type="text" value="<?=$VC20?>" 
						class="form-control" placeholder="Descripción" > -->
				</td>
			  </tr>
			  <tr>
				  <td>Sentido Indicador Otro</td>
				  <td><input name="C21" id="VC21" type="text" value="<?=$VC21?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
			  <tr>
				  <td>Fuente Informacion</td>
				  <td><input name="C22" id="VC22" type="text" value="<?=$VC22?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
			  <tr>
				  <td>Area Responsable</td>
				  <td><input name="C24" id="VC24" type="text" value="<?=$VC24?>" 
				  class="form-control" placeholder="Descripción" ></td>
			  </tr>
			  <tr>
				  <td>Nota</td>
				  <td><input name="C24" id="VC24" type="text" value="<?=$VC24?>" 
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
<!--script src="/Intranet/Js/ValiForm.js"></script>-->
</body>
</html>