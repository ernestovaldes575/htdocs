<!DOCTYPE html>
<html lang="es">
<head>  
	<title>Fraccion 02B-Organigrama</title>
	<?php include "../Encabezado/Ligas.php"?>
</head>
<script language="JavaScript" src="InfoUno.js"></script>

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
	include 'InfoUnoSERP.php';	
	include "../tcarea.php";
?>
<!-- <caption>
<?=	$DescTiSe?>	
</caption> -->
<div>
	<form id="PideDato" method="post" name="formulario" action="InfoUnoCRUD.php">	
		<input type="hidden" name="C00" id="SV01" value="<?=$CRUD?>">
		<input type="hidden" name="C01" id="SV02" value="<?=$TipoMovi?>">
		<input type="hidden" name="C02" id="SV03" value="<?=$CampBusq?>">		
		
		<div class="contenedor-tabla">  
			<div class="contenedor-tabla-sec"> 
			<table class="ListInfo01 tabla" style="width: 80%; margin: 0 auto;">
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
					<th width="90">No</th>
					<td>
						<input name="C05" id="VC05" type="number" value="<?=$VC05?>" 
						class="form-control" placeholder="Descripción" >
					</td>
				</tr>
				<tr>
					<th width="203">Fecha Inicio</th>
					<td>
						<input name="C06" id="VC06" type="date" value="<?=$VC06?>" 
						class="form-control" placeholder="Descripción" >
					</td>
				</tr>
				<tr>
					<th>Fecha de Termino</th>
					<td>
						<input name="C07" id="VC07" type="date" value="<?=$VC07?>" 
						class="form-control" placeholder="Descripción" >
					</td>
				</tr>
				<tr>
					<th>Hipervínculo</th>
					<td>
					<?php if ( $TipoMovi == "A" ) { ?>
					    Registrar la información para realizar el hipervinculo 
					<?php } else  { ?>
					  	<!-- Subir imagen -->
						<a href="#" onclick="CarImgPa(<?= $CampBusq?>,<?=$VC03?>)">
							<i class="bi bi-file-arrow-up-fill text-dark fs-1"></i>
						</a>
						<!-- Visualizar Image --> 
						<?php 
						if ( $VC08 != '' ) {  ?>
							<a href="javascript:window.open('<?=$RutaArch.$VC08?>','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">
							<i class="bi bi-eye-fill fs-1 text-success"></i>
						<?php echo "</a> "; } 
						 }// else {?>
				  	</td>
				</tr>
				<tr>
					<th>Área Responsable</th>
					<td>
						<select name="C09" class="form-control">			
				  		<?php 
		 					foreach($ResCat02 as $RegiTabl){ 
							$CC03 = $RegiTabl['Clave'];
							$CC04 = $RegiTabl['Descri'];
							$CampSele = ( $CC03 == $VC09 )? "selected" : ""; 
 							echo "<option value='$CC03' $CampSele>$CC03  $CC04</option> ";
						} ?>
				  		</select>
					</td>
				</tr>
				<tr>
					<th>Fecha de Actualización</th>
					<td>
						<input name="C10" id="VC10" type="date" value="<?=$VC10?>" 
						class="form-control" placeholder="Descripción" >
					</td>
				</tr>
				<tr>
					<th>Fecha de Validación</th>
					<td>
						<input name="C11" id="VC11" type="date" value="<?=$VC11?>" 
						class="form-control" placeholder="Descripción" >
					</td>
				</tr>
				<tr>
					<th>Nota</th>
					<td>
						<input name="C12" id="VC12" type="text" value="<?=$VC12?>" 
						class="form-control" placeholder="Descripción" >
					</td>
				</tr>						
				<tr>
					<td></td>
					<td>
						<button type="submit" name="Enviar" placeholder="<?=$MesnTiMo?>"
						value="<?=$MesnTiMo?>" class="btn-Submit container opacity-50" >
							<?=$MesnTiMo?>
						</button>
					</td>
				</tr>
			</table>
	</form>	
</div>
<!--<script src="/Intranet/Js/ValiForm.js"></script>-->
<!--<script src="Formulario.js"></script>-->
</body>
</html>