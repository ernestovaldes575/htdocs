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
					<td width="29%" class="text-uppercase" scope="row">
						Campo
					</td>
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
        			<td>Denominacion del tramite</td>				
        			<td><input type="text" name="C08" id="VC08" value="<?=$VC08?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Tipo de Usuario</td>				
        			<td><input type="text" name="C09" id="VC09" value="<?=$VC09?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Descripcion del objetivo del tramite</td>				
        			<td><input type="text" name="C10" id="VC10" value="<?=$VC10?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Modalidad (presencial/linea)</td>				
        			<td><input type="text" name="C11" id="VC11" value="<?=$VC11?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Hipervinculo de requisitos</td>		
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
	 					   if ( $VC12 != '' ) { ?> 
							<a href="javascript:window.open('<?=$RutaArch.$VC12?>','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">
							<i class="bi bi-eye-fill fs-1 text-success"></i>
						<?php  echo "</a> "; } 
						} //} else {?>
				  </td>
				  <!-- <td><input type="text" name="C12" id="VC12" value="<?=$VC12?>" class="form-control" placeholder="Descripción"></td> -->
					<td>
      			</tr>
				<tr>
        			<td>Documentos requeridos</td>				
        			<td><input type="text" name="C13" id="VC13" value="<?=$VC13?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
      			<tr>
        			<td>Hipervinculo al formato respectivo</td>		
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
	 					   if ( $VC14 != '' ) { ?> 
							<a href="javascript:window.open('<?=$RutaArch.$VC14?>','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">
							<i class="bi bi-eye-fill fs-1 text-success"></i>
						<?php  echo "</a> "; } 
						} //} else {?>
				  </td>		
        			<!-- <td><input type="text" name="C14" id="VC14" value="<?=$VC14?>" class="form-control" placeholder="Descripción"></td> -->
      			</tr>
      			<tr>
        			<td>Tiempo de respuesta</td>				
        			<td><input type="text" name="C15" id="VC15" value="<?=$VC15?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
      			<tr>
        			<td>Vigencia de resultados</td>				
        			<td><input type="text" name="C16" id="VC16" value="<?=$VC16?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Area de contacto en donde realizar tramite</td>				
        			<td><input type="text" name="C17" id="VC17" value="<?=$VC17?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Costo </td>				
        			<td><input type="text" name="C18" id="VC18 "value="<?=$VC18?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Sustento legal para cobro</td>				
        			<td><input type="text" name="C19" id="VC19" value="<?=$VC19?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Lugar de pago </td>				
        			<td><input type="text" name="C20" id="VC20" value="<?=$VC20?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Fundamento juridico </td>				
        			<td><input type="text" name="C21" id="VC21" value="<?=$VC21?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Derechos al usuario</td>				
        			<td><input type="text" name="C22" id="VC22" value="<?=$VC22?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Lugar para reportar anomalias </td>				
        			<td><input type="text" name="C23" id="VC23" value="<?=$VC23?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Otros datos</td>				
        			<td><input type="text" name="C24" id="VC24" value="<?=$VC24?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Hipervinculo informacion adicional </td>
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
	 					   if ( $VC25 != '' ) { ?> 
							<a href="javascript:window.open('<?=$RutaArch.$VC25?>','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">
							<i class="bi bi-eye-fill fs-1 text-success"></i>
						<?php  echo "</a> "; } 
						} //} else {?>
				  </td>				
        			<!-- <td><input type="text" name="C25" id="VC25" value="<?=$VC25?>" class="form-control" placeholder="Descripción"></td> -->
      			</tr>
				<tr>
        			<td>Hipervinculo al sistema </td>		
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
	 					   if ( $VC26 != '' ) { ?> 
							<a href="javascript:window.open('<?=$RutaArch.$VC26?>','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">
							<i class="bi bi-eye-fill fs-1 text-success"></i>
						<?php  echo "</a> "; } 
						} //} else {?>
				  </td>		
        			<!-- <td><input type="text" name="C26" id="VC26" value="<?=$VC26?>" class="form-control" placeholder="Descripción"></td> -->
      			</tr>
				<tr>
        			<td>Area Responsable </td>				
        			<td><input type="number" name="C27" id="VC27" value="<?=$VC27?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Nota </td>				
        			<td><input type="text" name="C28" id="SV28" value="<?=$VC28?>" class="form-control" placeholder="Descripción"></td>
      			</tr>

			<!-- Termina  campos -->	
				<tr>
				  <td></td>
				  <td><button type="submit" name="Enviar" placeholder="<?=$MesnTiMo?>"
						value="<?=$MesnTiMo?>" class="btn-Submit container opacity-50">
							<?=$MesnTiMo?>
						</button></td>
			  </tr>
			</table>
	</form>	
</div>
<!-- <script src="/Intranet/Js/ValiForm.js"></script> -->
</body>
</html>