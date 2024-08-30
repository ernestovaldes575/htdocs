<!DOCTYPE html>
<html lang="es">
<head>  
	<title>Fraccion 39A-Recomendaciones emitidas por la CNDH</title>
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
					<td>Periodo que se informa (Trimestral)</td>
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
        			<td>Fecha que se recibió la notificación</td>				
        			<td><input type="date" name="C08" id="VC08" value="<?=$VC08?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Número de recomendación</td>				
        			<td><input type="text" name="C09" id="VC09" value="<?=$VC09?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Hecho violatorio</td>				
        			<td><input type="text" name="C10" id="VC10" value="<?=$VC10?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Tipo de recomendación</td>				
        			<td><input type="text" name="C11" id="VC11" value="<?=$VC11?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Número de expediente</td>				
        			<td><input type="text" name="C12" id="VC12" value="<?=$VC12?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Fecha de solicitud (opinión no vinculatoria)</td>				
        			<td><input type="date" name="C13" id="VC13" value="<?=$VC13?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
      			<tr>
        			<td>Fecha que recibe la opinión de la unidad responable</td>				
        			<td><input type="date" name="C14" id="VC14" value="<?=$VC14?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
      			<tr>
        			<td>Estatus de la recomendación</td>				
        			<td><input type="text" name="C15" id="VC15" value="<?=$VC15?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
      			<tr>
        			<td>Número de oficio o  documento de aceptación/ recomendación</td>				
        			<td><input type="text" name="C16" id="VC16" value="<?=$VC16?>" class="form-control" placeholder="Descripción"></td> 
      			</tr>
				<tr>
        			<td>Hipervínculo al documento de la recomendación</td>	
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
	 					   if ( $VC17 != '' ) { ?> 
							<a href="javascript:window.open('<?=$RutaArch.$VC17?>','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">
							<i class="bi bi-eye-fill fs-1 text-success"></i>
						<?php  echo "</a> "; } 
						} //} else {?>
				  </td>			
        			<!-- <td><input type="text" name="C17" id="VC17" value="<?=$VC17?>" class="form-control" placeholder="Descripción"></td> -->
      			</tr>
				<tr>
        			<td>Fecha de Solicitud de opinión (Recomendación aceptada)</td>				
        			<td><input type="date" name="C18" id="VC18 "value="<?=$VC18?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Fecha respuesta Unidad Responsable (Recomendación aceptada)</td>				
        			<td><input type="date" name="C19" id="VC19" value="<?=$VC19?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Acciones del sujeto obligado para dar cumplimiento a los puntos recomendados</td>				
        			<td><input type="text" name="C20" id="VC20" value="<?=$VC20?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Dependencias/Entidades Federativas que colaboraron para cumplir la recomendación</td>				
        			<td><input type="text" name="C21" id="VC21" value="<?=$VC21?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Fecha de notificación a la CNDH/Organismo Estatal</td>				
        			<td><input type="date" name="C22" id="VC22" value="<?=$VC22?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Hipervínculo a la sección del sitio de Internet de la CNDH</td>	
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
	 					   if ( $VC23 != '' ) { ?> 
							<a href="javascript:window.open('<?=$RutaArch.$VC23?>','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">
							<i class="bi bi-eye-fill fs-1 text-success"></i>
						<?php  echo "</a> "; } 
						} //} else {?>
				  </td>			
        			<!-- <td><input type="text" name="C23" id="VC23" value="<?=$VC23?>" class="form-control" placeholder="Descripción"></td> -->
      			</tr>
				<tr>
        			<td>Razón de la negativa (Recomendación no aceptada)</td>				
        			<td><input type="text" name="C24" id="VC24" value="<?=$VC24?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Fecha de comparecencia (Recomendación no aceptada)</td>				
        			<td><input type="date" name="C25" id="VC25" value="<?=$VC25?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Servidor Público encargado de comparecer</td>				
        			<td><input type="text" name="C26" id="VC26" value="<?=$VC26?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Hipervínculo a la minuta de la comparecencia</td>	
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
	 					   if ( $VC27 != '' ) { ?> 
							<a href="javascript:window.open('<?=$RutaArch.$VC27?>','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">
							<i class="bi bi-eye-fill fs-1 text-success"></i>
						<?php  echo "</a> "; } 
						} //} else {?>
				  	</td>			
        			<!-- <td><input type="text" name="C27" id="VC27" value="<?=$VC27?>" class="form-control" placeholder="Descripción"></td> -->
      			</tr>
				<tr>
        			<td>Determinación/Respuesta del organismo</td>				
        			<td><input type="text" name="C28" id="VC28" value="<?=$VC28?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Feha de notificación al sujeto obligado</td>				
        			<td><input type="date" name="C29" id="VC29" value="<?=$VC29?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Hipervinculo al oficio notificación de la determinación</td>	
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
	 					   if ( $VC30 != '' ) { ?> 
							<a href="javascript:window.open('<?=$RutaArch.$VC30?>','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">
							<i class="bi bi-eye-fill fs-1 text-success"></i>
						<?php  echo "</a> "; } 
						} //} else {?>
				  	</td>			
        			<!-- <td><input type="text" name="C30" id="VC30" value="<?=$VC30?>" class="form-control" placeholder="Descripción"></td> -->
      			</tr>
				<tr>
        			<td>Respuesta notificada al organismo respecto d ela determinación</td>		
        			<td><input type="text" name="C31" id="VC31" value="<?=$VC31?>" class="form-control" placeholder="Descripción"></td> 
      			</tr>
				  <tr>
        			<td>Fecha que se notifica la respuesta del organismo</td>				
        			<td><input type="date" name="C32" id="VC32" value="<?=$VC32?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Número de oficio que notifica la respuesta el organismo</td>				
        			<td><input type="text" name="C33" id="VC33" value="<?=$VC33?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Número de denuncia ante el Ministerio Público</td>				
        			<td><input type="text" name="C34" id="VC34" value="<?=$VC34?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Estado de recomendaciones aceptadas</td>				
        			<td><input type="text" name="C35" id="VC35" value="<?=$VC35?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Fecha de conclusión</td>				
        			<td><input type="date" name="C36" id="VC36" value="<?=$VC36?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				  <tr>
        			<td>Fecha de notificación de la conclusión</td>				
        			<td><input type="date" name="C37" id="VC37" value="<?=$VC37?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Hipervínculo a la versión pública del sistema corespondiente</td>	
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
	 					   if ( $VC38 != '' ) { ?> 
							<a href="javascript:window.open('<?=$RutaArch.$VC38?>','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">
							<i class="bi bi-eye-fill fs-1 text-success"></i>
						<?php  echo "</a> "; } 
						} //} else {?>
				  	</td>			
        			<!-- <td><input type="date" name="C38" id="VC38" value="<?=$VC38?>" class="form-control" placeholder="Descripción"></td> -->
      			</tr>
				  <tr>
        			<td>Área responsable</td>				
        			<td><input type="number" name="C39" id="VC39" value="<?=$VC39?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				  <tr>
        			<td>Nota</td>				
        			<td><input type="text" name="C40" id="VC40" value="<?=$VC40?>" class="form-control" placeholder="Descripción"></td>
      			</tr>

			<!-- Termina  campos -->	
				<tr>
				  <td></td>
				  <td><button type="submit" name="Enviar" placeholder="<?=$MesnTiMo?>"
						value="<?=$MesnTiMo?>" class="btn-Submit container opacity-50" >
						<?=$MesnTiMo?>
						</button>
				  </td>
			  </tr>
			</table>
	</form>	
</div>
<!-- <script src="/Intranet/Js/ValiForm.js"></script> -->
</body>
</html>