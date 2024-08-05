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
						class="form-control" placeholder="numero">
					</td>
				</tr>	
				<tr>
					<td>Fecha de inicio del periodo que se informa</td>
					<td>
						<input name="C06" id="VC06" type="date" value="<?=$VC06?>" 
						class="form-control" placeholder="Descripción" >
					</td>	  
				</tr>	
				
				<tr>
				  <td>Fecha de término del periodo que se informa</td>
				  <td><input name="C07" id="VC07" type="date" value="<?=$VC07?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
				<tr>
				  <td>Denominación del puesto</td>
				  <td><input name="C08" id="VC08" type="text" value="<?=$VC08?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
				<tr>
				  <td>Denominacion Cargo</td>
				  <td><input  name="C09" id="VC09" type="text"value="<?=$VC09?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
				<tr>
				  <td>Nombre(s)</td>
				  <td><input name="C10" id="VC10" type="text" value="<?=$VC10?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
			  
				
				<tr>
				  <td>Primer Apellido</td>
				  <td><input name="C11" id="VC11" type="text" value="<?=$VC11?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
				<tr>
				  <td>Segundo Apellido</td>
				  <td><input name="C12" id="VC12" type="text" value="<?=$VC12?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>

				
				<tr>
					<td>Área o unidad administrativa de adscripción</td>
					<td>
					<select name="C13" class="form-control">			
				  <?php 
		 			foreach($ResCat02 as $RegiTabl){ 
						$CC03 = $RegiTabl['Clave'];
						$CC04 = $RegiTabl['Descri'];
						$CampSele = ( $CC03 == $VC13 )? "selected" : ""; 
 						echo "<option value='$CC03' $CampSele>$CC03  $CC04</option> ";
					} ?>
				  </select>
					</td>					
        			<!-- <td><input type="number" name="C36" id="VC36" value="<?=$VC13?>" class="form-control" placeholder="Descripción"></td> -->
      			</tr>
				<tr>
				  <td>Nivel máximo de estudios</td>
				  <td>
					<select name="C14" class="form-control">			
				  <?php 
		 			foreach($ResCat09 as $RegiTabl){ 
						$CC03 = $RegiTabl['Clave'];
						$CC04 = $RegiTabl['Descri'];
						$CampSele = ( $CC03 == $VC14 )? "selected" : ""; 
 						echo "<option value='$CC03' $CampSele>$CC03  $CC04</option> ";
					} ?>
				  </select>
					</td>					
        			<!-- <td><input type="number" name="C36" id="VC36" value="<?=$VC14?>" class="form-control" placeholder="Descripción"></td> -->
      			</tr>
				<tr>
				  <td>Atención: Nivel máximo de estudios en caso de elegir OTRO llenar este campo</td>
				  <td><input name="C15" id="VC15" type="text" value="<?=$VC15?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
				<tr>
				  <td>Carrera Generica</td>
				  <td><input  name="C16" id="VC16" type="text"value="<?=$VC16?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
				<tr>
				  <td>Experiencia laboral:  Colocar el o los números de línea de la hoja t_327122_art92_xxi separados por comas. Ejemplo:  2,4-6,9,11</td>
				  <td><input name="C17" id="VC17" type="text" value="<?=$VC17?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
			  
			
				<tr>
				  <td>Hipervinculo Curriculum</td>
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
	 					   if ( $VC18 != '' ) { ?> 
							<a href="javascript:window.open('<?=$RutaArch.$VC18?>','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">
							<i class="bi bi-eye-fill fs-1 text-success"></i>
						<?php  echo "</a> "; } 
						} //} else {?>
				  </td>
				  
			  </tr>
				<tr>
				  <td>¿Ha tenido sanciones administrativas?</td>
				  <td>
					<select name="C19" class="form-control">			
				  <?php 
		 			foreach($ResCat10 as $RegiTabl){ 
						$CC03 = $RegiTabl['Clave'];
						$CC04 = $RegiTabl['Descri'];
						$CampSele = ( $CC03 == $VC19 )? "selected" : ""; 
 						echo "<option value='$CC03' $CampSele>$CC03  $CC04</option> ";
					} ?>
				  </select>
					</td>					
        			<!-- <td><input type="number" name="C36" id="VC36" value="<?=$VC19?>" class="form-control" placeholder="Descripción"></td> -->
      			</tr>
	
				<tr>
					<td>Atención: ¿Ha tenido sanciones administrativas? en caso de elegir OTRO llenar este campo</td>
					<td>
						<input name="C20" id="VC20" type="text" value="<?=$VC20?>" 
						class="form-control" placeholder="Descripción" >
					</td>	  
				</tr>	

				<tr>
					<td>Área responsable de la información</td>
					<td>
					<select name="C21" class="form-control">			
				  <?php 
		 			foreach($ResCat02 as $RegiTabl){ 
						$CC03 = $RegiTabl['Clave'];
						$CC04 = $RegiTabl['Descri'];
						$CampSele = ( $CC03 == $VC21 )? "selected" : ""; 
 						echo "<option value='$CC03' $CampSele>$CC03  $CC04</option> ";
					} ?>
				  </select>
					</td>					
        			<!-- <td><input type="number" name="C36" id="VC36" value="<?=$VC21?>" class="form-control" placeholder="Descripción"></td> -->
      			</tr>	

				<tr>
					<td>Nota</td>
					<td>
						<input name="C22" id="VC22" type="text" value="<?=$VC22?>" 
						class="form-control" placeholder="Descripción" >
					</td>	  
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
</html>