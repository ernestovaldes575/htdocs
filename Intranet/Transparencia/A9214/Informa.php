<!DOCTYPE html>
<html lang="es">
<head>  
	<title>Fraccion 14-Programa de Subsidio, Estimulo y Apoyo</title>
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
        			<td>Tipo de programa social</td>				
        			<td><input type="number" name="C08" id="VC08" value="<?=$VC08?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Tipo de Programa social (Otro)</td>				
        			<td><input type="text" name="C09" id="VC09" value="<?=$VC09?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Denominacion del programa</td>				
        			<td><input type="text" name="C10" id="VC10" value="<?=$VC10?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Programa desarrollado por más de un área (si/no)</td>				
        			<td><input type="number" name="C11" id="VC11" value="<?=$VC11?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Programa desarrollado por más de un área (otro)</td>				
        			<td><input type="text" name="C12" id="VC12" value="<?=$VC12?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Sujeto corresponsable</td>				
        			<td><input type="text" name="C13" id="VC13" value="<?=$VC13?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
      			<tr>
        			<td>Area responsable del desarrollo del programa</td>				
        			<td><input type="text" name="C14" id="VC14" value="<?=$VC14?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
      			<tr>
        			<td>Denominacion del documento normativo</td>				
        			<td><input type="text" name="C15" id="VC15" value="<?=$VC15?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
      			<tr>
        			<td>Hipervinculo al documento normativo</td>		
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
	 					   if ( $VC16 != '' ) { ?> 
							<a href="javascript:window.open('<?=$RutaArch.$VC16?>','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">
							<i class="bi bi-eye-fill fs-1 text-success"></i>
						<?php  echo "</a> "; } 
						} //} else {?>
				  </td>		
        			<!-- <td><input type="text" name="C16" id="VC16" value="<?=$VC16?>" class="form-control" placeholder="Descripción"></td> -->
      			</tr>
				<tr>
        			<td>Periodo de vigencia definido (si/no)</td>				
        			<td><input type="number" name="C17" id="VC17" value="<?=$VC17?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Periodo de vigencia (otro) </td>				
        			<td><input type="text" name="C18" id="VC18 "value="<?=$VC18?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Fecha inicio de vigencia</td>				
        			<td><input type="date" name="C19" id="VC19" value="<?=$VC19?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Fecha termino de vigencia </td>				
        			<td><input type="date" name="C20" id="VC20" value="<?=$VC20?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Diseño </td>				
        			<td><input type="text" name="C21" id="VC21" value="<?=$VC21?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Objetivos y alcances del programa</td>				
        			<td><input type="text" name="C22" id="VC22" value="<?=$VC22?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Poblacion beneficiada </td>				
        			<td><input type="text" name="C23" id="VC23" value="<?=$VC23?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Nota metodologica de calculo</td>				
        			<td><input type="text" name="C24" id="VC24" value="<?=$VC24?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Monto de presupuesto aprobado </td>				
        			<td><input type="text" name="C25" id="VC25" value="<?=$VC25?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Monto de presupuesto modificado </td>				
        			<td><input type="text" name="C26" id="VC26" value="<?=$VC26?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Monto de presupuesto ejercido </td>				
        			<td><input type="text" name="C27" id="VC27" value="<?=$VC27?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Monto déficit de operacion </td>				
        			<td><input type="text" name="C28" id="VC28" value="<?=$VC28?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Monto gastos de operacion </td>				
        			<td><input type="text" name="C29" id="VC29" value="<?=$VC29?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Hipervinculo documento de modificadiones </td>	
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
        			<td>Hipervinculo calendario presupuestal </td>	
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
	 					   if ( $VC31 != '' ) { ?> 
							<a href="javascript:window.open('<?=$RutaArch.$VC31?>','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">
							<i class="bi bi-eye-fill fs-1 text-success"></i>
						<?php  echo "</a> "; } 
						} //} else {?>
				  </td>			
        			<!-- <td><input type="text" name="C31" id="VC31" value="<?=$VC31?>" class="form-control" placeholder="Descripción"></td> -->
      			</tr>
				  <tr>
        			<td>Criterios de elegibilidad </td>				
        			<td><input type="text" name="C32" id="VC32" value="<?=$VC32?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Requisitos y procedimiento de acceso </td>				
        			<td><input type="text" name="C33" id="VC33" value="<?=$VC33?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Monto minimo que recibirá </td>				
        			<td><input type="text" name="C34" id="VC34" value="<?=$VC34?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Monto maximo que recibirá </td>				
        			<td><input type="text" name="C35" id="VC35" value="<?=$VC35?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Procedimientos de queja </td>				
        			<td><input type="text" name="C36" id="VC36" value="<?=$VC36?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Mecanismo de exigibilidad </td>				
        			<td><input type="text" name="C37" id="VC37" value="<?=$VC37?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				  <tr>
        			<td>Mecanismos de cancelacion </td>				
        			<td><input type="text" name="C38" id="VC38" value="<?=$VC38?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Periodo evaluado </td>				
        			<td><input type="text" name="C39" id="VC39" value="<?=$VC39?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Mecanismos de evaluacion </td>				
        			<td><input type="text" name="C40" id="VC40" value="<?=$VC40?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				  <tr>
        			<td>Instancia evaluadora </td>				
        			<td><input type="text" name="C41" id="VC41" value="<?=$VC41?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Hipervinculo a resultados de informe </td>	
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
	 					   if ( $VC42 != '' ) { ?> 
							<a href="javascript:window.open('<?=$RutaArch.$VC42?>','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">
							<i class="bi bi-eye-fill fs-1 text-success"></i>
						<?php  echo "</a> "; } 
						} //} else {?>
				  </td>			
        			<!-- <td><input type="text" name="C42" id="VC42" value="<?=$VC42?>" class="form-control" placeholder="Descripción"></td> -->
      			</tr>
				<tr>
        			<td>Seguimiento de recomendaciones</td>				
        			<td><input type="text" name="C43" id="VC43" value="<?=$VC43?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Indicador </td>				
        			<td><input type="text" name="C44" id="VC44" value="<?=$VC44?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Forma de participacion social </td>				
        			<td><input type="text" name="C45" id="VC45" value="<?=$VC45?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				  <tr>
        			<td>Articulacion con otro programa (si/no) </td>				
        			<td><input type="text" name="C46" id="VC46" value="<?=$VC46?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				  <tr>
        			<td>Articulacion con otro programa social (otro) </td>				
        			<td><input type="text" name="C47" id="VC47" value="<?=$VC47?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Denominacion del programa </td>				
        			<td><input type="text" name="C48" id="VC48" value="<?=$VC48?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Esta sujeto a reglas de operacion (si/no) </td>				
        			<td><input type="number" name="C49" id="VC49" value="<?=$VC49?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				  <tr>
        			<td>Esta sujeto a reglas de operacion (otro) </td>				
        			<td><input type="text" name="C50" id="VC50" value="<?=$VC50?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Hipervinculo Reglas de operacion </td>	
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
	 					   if ( $VC51 != '' ) { ?> 
							<a href="javascript:window.open('<?=$RutaArch.$VC51?>','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">
							<i class="bi bi-eye-fill fs-1 text-success"></i>
						<?php  echo "</a> "; } 
						} //} else {?>
				  </td>			
        			<!-- <td><input type="text" name="C51" id="VC51" value="<?=$VC51?>" class="form-control" placeholder="Descripción"></td> -->
      			</tr>
				<tr>
        			<td>Informes periodicos de ejecucion de programa </td>				
        			<td><input type="text" name="C52" id="VC52" value="<?=$VC52?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				  <tr>
        			<td>Hipervinculo Padron de beneficiarios </td>	
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
	 					   if ( $VC53 != '' ) { ?> 
							<a href="javascript:window.open('<?=$RutaArch.$VC53?>','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">
							<i class="bi bi-eye-fill fs-1 text-success"></i>
						<?php  echo "</a> "; } 
						} //} else {?>
				  </td>			
        			<!-- <td><input type="text" name="C53" id="VC53" value="<?=$VC53?>" class="form-control" placeholder="Descripción"></td> -->
      			</tr>
				  <tr>
        			<td>Area responsable de informacion </td>				
        			<td><input type="number" name="C54" id="VC54" value="<?=$VC54?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				  <tr>
        			<td>Fecha de validacion </td>				
        			<td><input type="date" name="C55" id="VC55" value="<?=$VC55?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Fecha de actualizacion </td>				
        			<td><input type="date" name="C56" id="VC56" value="<?=$VC56?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				  <tr>
        			<td>Nota </td>				
        			<td><input type="text" name="C57" id="SV57" value="<?=$VC57?>" class="form-control" placeholder="Descripción"></td>
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