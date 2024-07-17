<!DOCTYPE html>
<html lang="es">
<head>  
	<title>Fraccion 38D-Inventario de Bienes Inmuebles</title>
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
					<td>Periodo que se informa (Semestral)</td>
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
        			<td>Denominación del inmueble</td>				
        			<td><input type="text" name="C08" id="VC08" value="<?=$VC08?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Institución a cargo del inmueble</td>				
        			<td><input type="text" name="C09" id="VC09" value="<?=$VC09?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Domicilio del inmueble: Tipo de Vialidad</td>				
        			<td><input type="number" name="C10" id="VC10" value="<?=$VC10?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Domicilio del inmueble: Tipo de Vialidad(Otro)</td>				
        			<td><input type="text" name="C11" id="VC11" value="<?=$VC11?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Domicilio del inmueble:Nombre de vialidad</td>				
        			<td><input type="text" name="C12" id="VC12" value="<?=$VC12?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Domicilio del inmueble:Número exterior</td>				
        			<td><input type="text" name="C13" id="VC13" value="<?=$VC13?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
      			<tr>
        			<td>Domicilio del inmueble: Número interior</td>				
        			<td><input type="text" name="C14" id="VC14" value="<?=$VC14?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
      			<tr>
        			<td>Domicilio del inmueble: Tipo de Asentamiento</td>				
        			<td><input type="number" name="C15" id="VC15" value="<?=$VC15?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
      			<tr>
        			<td>Domicilio del inmueble:Tipo de Asentamiento (Otro)</td>				
        			<td><input type="text" name="C16" id="VC16" value="<?=$VC16?>" class="form-control" placeholder="Descripción"></td> 
      			</tr>
				<tr>
        			<td>Domicilio del inmueble: Nombre del asentamiento humano</td>				
        			<td><input type="text" name="C17" id="VC17" value="<?=$VC17?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Domicilio del inmueble: Clave de la Entidad Federativa</td>				
        			<td><input type="number" name="C18" id="VC18 "value="<?=$VC18?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Domicilio del inmueble: Clave del Municipio</td>				
        			<td><input type="number" name="C19" id="VC19" value="<?=$VC19?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Domicilio del inmueble: Clave de Localidad</td>				
        			<td><input type="number" name="C20" id="VC20" value="<?=$VC20?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Domicilio del inmueble: Código Postal</td>				
        			<td><input type="number" name="C21" id="VC21" value="<?=$VC21?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Domicilio del inmueble: Páis del domicilio en el extranjero</td>				
        			<td><input type="text" name="C22" id="VC22" value="<?=$VC22?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Domicilio del inmueble: Ciudad del domicilio en el extranjero</td>				
        			<td><input type="text" name="C23" id="VC23" value="<?=$VC23?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Domicilio del inmueble: Calle del domicilio en el extranjero</td>				
        			<td><input type="text" name="C24" id="VC24" value="<?=$VC24?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Domicilio del inmueble: Número del domicilio en el exranjero</td>				
        			<td><input type="text" name="C25" id="VC25" value="<?=$VC25?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Uso del inmueble</td>				
        			<td><input type="text" name="C26" id="VC26" value="<?=$VC26?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Operación que da origen a la propiedad del inmueble</td>				
        			<td><input type="text" name="C27" id="VC27" value="<?=$VC27?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Valor Catastral/Último avalúo del inmueble</td>				
        			<td><input type="text" name="C28" id="VC28" value="<?=$VC28?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Títulos que acrediten la propiedad del inmueble</td>				
        			<td><input type="text" name="C29" id="VC29" value="<?=$VC29?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Hipervinculo Sistema de Información Inmobiliaria</td>	
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
        			<td>Área de adscripción de la persona responsable del inmueble</td>		
        			<td><input type="number" name="C31" id="VC31" value="<?=$VC31?>" class="form-control" placeholder="Descripción"></td> 
      			</tr>
				  <tr>
        			<td>Área responsable</td>				
        			<td><input type="number" name="C32" id="VC32" value="<?=$VC32?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Naturaleza del inmueble (Urbana/Rústica)</td>				
        			<td><input type="text" name="C33" id="VC33" value="<?=$VC33?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Carácter del Monumento</td>				
        			<td><input type="text" name="C34" id="VC34" value="<?=$VC34?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Tipo de Inmueble</td>				
        			<td><input type="text" name="C35" id="VC35" value="<?=$VC35?>" class="form-control" placeholder="Descripción"></td>
      			</tr>
				<tr>
        			<td>Nota </td>				
        			<td><input type="text" name="C36" id="VC36" value="<?=$VC36?>" class="form-control" placeholder="Descripción"></td>
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