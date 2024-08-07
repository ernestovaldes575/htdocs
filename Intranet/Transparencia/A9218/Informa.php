<!DOCTYPE html>
<html lang="es">
<head>  
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Facultades de área</title>
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
						class="form-control" placeholder="Titulo">
					</td>
				</tr>	
				<tr>
					<td>Fecha Inicio</td>
					<td>
						<input name="C06" id="VC06" type="date" value="<?=$VC06?>" 
						class="form-control" placeholder="Descripción" >
					</td>	  
				</tr>	
				
				<tr>
				  <td>Fecha de Termino</td>
				  <td><input name="C07" id="VC07" type="date" value="<?=$VC07?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
				<tr>
				  <td>Tipo Evento</td>
				  <td>
					<select name="C08" class="form-control">			
				  <?php 
		 			foreach($ResCat05 as $RegiTabl){ 
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
				  <td>Tipo Evento (Otro)</td>
				  <td><input  name="C09" id="VC09" type="text"value="<?=$VC09?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
				<tr>
				  <td>Alcance Concurso</td>
				  <td>
					<select name="C10" class="form-control">			
				  <?php 
		 			foreach($ResCat06 as $RegiTabl){ 
						$CC03 = $RegiTabl['Clave'];
						$CC04 = $RegiTabl['Descri'];
						$CampSele = ( $CC03 == $VC10 )? "selected" : ""; 
 						echo "<option value='$CC03' $CampSele>$CC03  $CC04</option> ";
					} ?>
				  </select>
					</td>					
        			<!-- <td><input type="number" name="C36" id="VC36" value="<?=$VC10?>" class="form-control" placeholder="Descripción"></td> -->
      			</tr>
				<tr>
				  <td>atención: Alcance del concurso en caso de elegir OTRO llenar este campo</td>
				  <td><input name="C11" id="VC11" type="text" value="<?=$VC11?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
				<tr>
				  <td>Tipo Cargo o puesto</td>
				  <td>
					<select name="C12" class="form-control">			
				  <?php 
		 			foreach($ResCat07 as $RegiTabl){ 
						$CC03 = $RegiTabl['Clave'];
						$CC04 = $RegiTabl['Descri'];
						$CampSele = ( $CC03 == $VC12 )? "selected" : ""; 
 						echo "<option value='$CC03' $CampSele>$CC03  $CC04</option> ";
					} ?>
				  </select>
					</td>					
        			<!-- <td><input type="number" name="C36" id="VC36" value="<?=$VC12?>" class="form-control" placeholder="Descripción"></td> -->
      			</tr>
			
				<tr>
				  <td>atención: Tipo de cargo o puesto en caso de elegir OTRO llenar este campo</td>
				  <td><input name="C13" id="VC13" type="text" value="<?=$VC13?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>

			
				<tr>
				  <td>Clave o nivel del puesto</td>
				  <td><input name="C14" id="VC14" type="int" value="<?=$VC14?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>

			 
				<tr>
				  <td>Denominación del puesto</td>
				  <td><input name="C15" id="VC15" type="text" value="<?=$VC15?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
			  
				<tr>
				  <td>Denominación del cargo o función</td>
				  <td><input name="C16" id="VC16" type="text" value="<?=$VC16?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>

			  
				<tr>
				  <td>Denominación del área o unidad</td>
				  <td>
					<select name="C17" class="form-control">			
				  <?php 
		 			foreach($ResCat02 as $RegiTabl){ 
						$CC03 = $RegiTabl['Clave'];
						$CC04 = $RegiTabl['Descri'];
						$CampSele = ( $CC03 == $VC17 )? "selected" : ""; 
 						echo "<option value='$CC03' $CampSele>$CC03  $CC04</option> ";
					} ?>
				  </select>
					</td>					
        			<!-- <td><input type="number" name="C36" id="VC36" value="<?=$VC17?>" class="form-control" placeholder="Descripción"></td> -->
      			</tr>

			  
				<tr>
				  <td>Salario Bruto</td>
				  <td><input name="C18" id="VC18" type="int" value="<?=$VC18?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>

			 
				<tr>
				  <td>Salario Neto Mensual</td>
				  <td><input name="C19" id="VC19" type="int" value="<?=$VC19?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>

			 
				<tr>
				  <td>Fecha Publicacion</td>
				  <td><input name="C20" id="VC20" type="date" value="<?=$VC20?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>

			
				<tr>
				  <td>Numero Convocatoria</td>
				  <td><input name="C21" id="VC21" type="int" value="<?=$VC21?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>

				<tr>
				  <td>Hipervinculo Documento</td>
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
	 					   if ( $VC22!= '' ) { ?> 
							<a href="javascript:window.open('<?=$RutaArch.$VC22?>','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">
							<i class="bi bi-eye-fill fs-1 text-success"></i>
						<?php  echo "</a> "; } 
						} //} else {?>
				  </td>
				  
			  </tr>

			  
				<tr>
				  <td>Estado del proceso del concurso</td>
				  <td>
					<select name="C23" class="form-control">			
				  <?php 
		 			foreach($ResCat08 as $RegiTabl){ 
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
				  <td>Estado Proceso Con (Otro)</td>
				  <td><input name="C24" id="VC24" type="text" value="<?=$VC24?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>

			 
				<tr>
				  <td>Total Candidatos</td>
				  <td><input name="C25" id="VC25" type="text" value="<?=$VC25?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>

			 
				<tr>
				  <td>Nombre(s) de la persona aceptada</td>
				  <td><input name="C26" id="VC26" type="text" value="<?=$VC26?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>

			
				<tr>
				  <td>Primer apellido de la persona aceptada</td>
				  <td><input name="C27" id="VC27" type="text" value="<?=$VC27?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
			  </tr>	<tr>
				  <td>Segundo apellido de la persona aceptada</td>
				  <td><input name="C28" id="VC28" type="text" value="<?=$VC28?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>

			 
				<tr>
				  <td>Hipervínculo a la versión pública del acta o documento que al(la) ganador(a)</td>
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
	 					   if ( $VC29!= '' ) { ?> 
							<a href="javascript:window.open('<?=$RutaArch.$VC29?>','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">
							<i class="bi bi-eye-fill fs-1 text-success"></i>
						<?php  echo "</a> "; } 
						} //} else {?>
				  </td>
				  
			  </tr>

				<tr>
				  <td>En su caso, hipervínculo al sistema electrónico de convocatorias y/o concursos</td>
				  <td><input name="C30" id="VC30" type="text" value="<?=$VC30?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>

			
				<tr>
				  <td>Área(s) responsable(s) que genera(n), posee(n), publica(n) y actualizan la información</td>
				  <td>
					<select name="C31" class="form-control">			
				  <?php 
		 			foreach($ResCat02 as $RegiTabl){ 
						$CC03 = $RegiTabl['Clave'];
						$CC04 = $RegiTabl['Descri'];
						$CampSele = ( $CC03 == $VC31 )? "selected" : ""; 
 						echo "<option value='$CC03' $CampSele>$CC03  $CC04</option> ";
					} ?>
				  </select>
					</td>					
        			<!-- <td><input type="number" name="C36" id="VC36" value="<?=$VC31?>" class="form-control" placeholder="Descripción"></td> -->
      			</tr>
			 
				<tr>
				  <td>Nota</td>
				  <td><input name="C32" id="VC32" type="text" value="<?=$VC32?>" 
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