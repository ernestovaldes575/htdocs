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
				</tr>
				<tr>
					<td>Fecha Inicio</td>
					<td>
						<input name="C06" id="VC06" type="date" value="<?=$VC06?>" 
						class="form-control" placeholder="Descripción" >
					</td>	  
				</tr>	
				
				</tr>
				<tr>
				  <td>Fecha de Termino</td>
				  <td><input name="C07" id="VC07" type="date" value="<?=$VC07?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
			  <tr>
				  <td>Tipo contratacion</td>
					<td>
					<select name="C08" class="form-control">			
				  <?php 
		 			foreach($ResCat03 as $RegiTabl){ 
						$CC03 = $RegiTabl['Clave'];
						$CC04 = $RegiTabl['Descri'];
						$CampSele = ( $CC03 == $VC08 )? "selected" : ""; 
 						echo "<option value='$CC03' $CampSele>$CC03  $CC04</option> ";
					} ?>
				  </select>
					</td>					
        			<!-- <td><input type="number" name="C36" id="VC36" value="<?=$VC08?>" class="form-control" placeholder="Descripción"></td> -->
      			</tr>

				<tr>
				  <td>Tipo Contratacion (Otro)</td>
				  <td><input  name="C09" id="VC09" type="text"value="<?=$VC09?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
				<tr>
				  <td>Partida presupuestal de los recursos</td>
				  <td><input name="C10" id="VC10" type="text" value="<?=$VC10?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>

			  <tr>
				  <td>Nombre(s)</td>
				  <td><input name="C11" id="VC11" type="text" value="<?=$VC11?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>

			  <tr>
				  <td>Primer Apellido</td>
				  <td><input name="C12" id="VC12" type="text" value="<?=$VC12?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>

			  <tr>
				  <td>Segundo Apellido</td>
				  <td><input name="C13" id="VC13" type="text" value="<?=$VC13?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>

			  <tr>
				  <td>Numero Contrato</td>
				  <td><input name="C14" id="VC14" type="text" value="<?=$VC14?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>

			  
			  <tr>
				  <td>Hipervinculo al contrato</td>
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
	 					   if ( $VC15 != '' ) { ?> 
							<a href="javascript:window.open('<?=$RutaArch.$VC15?>','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">
							<i class="bi bi-eye-fill fs-1 text-success"></i>
						<?php  echo "</a> "; } 
						} //} else {?>
				  </td>
				  
			  </tr>
				<tr>
				  <td>Fecha de inicio del contrato</td>
				  <td><input name="C16" id="VC16" type="date" value="<?=$VC16?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>

			  <tr>
				  <td>Fecha de término del contrato</td>
				  <td><input name="C17" id="VC17" type="date" value="<?=$VC17?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>

			  <tr>
				  <td>Servicios contratados</td>
				  <td><input name="C18" id="VC18" type="text" value="<?=$VC18?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>

			  <tr>
				  <td>Remuneración mensual bruta o contraprestación</td>
				  <td><input name="C19" id="VC19" type="float" value="<?=$VC19?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>

			  <tr>
				  <td>Monto total a pagar</td>
				  <td><input name="C20" id="VC20" type="float" value="<?=$VC20?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>

			  <tr>
				  <td>Prestaciones (en su caso)</td>
				  <td><input name="C21" id="VC21" type="text" value="<?=$VC21?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>

			  <tr>
				  <td>Hipervínculo a la normatividad</td>
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
	 					   if ( $VC22 != '' ) { ?> 
							<a href="javascript:window.open('<?=$RutaArch.$VC22?>','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">
							<i class="bi bi-eye-fill fs-1 text-success"></i>
						<?php  echo "</a> "; } 
						} //} else {?>
				  </td>
				  
			  </tr>

				<tr>
				  <td>Área responsable de la información</td>
				  <td>
					<select name="C23" class="form-control">			
				  <?php 
		 			foreach($ResCat02 as $RegiTabl){ 
						$CC03 = $RegiTabl['Clave'];
						$CC04 = $RegiTabl['Descri'];
						$CampSele = ( $CC03 == $VC23 )? "selected" : ""; 
 						echo "<option value='$CC03' $CampSele>$CC03  $CC04</option> ";
					} ?>
				  </select>
					</td>					
        			<!-- <td><input type="number" name="C36" id="VC36" value="<?=$VC23?>" class="form-control" placeholder="Descripción"></td> -->
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