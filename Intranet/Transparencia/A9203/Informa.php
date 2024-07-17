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
						<input name="C05" id="VC05" type="Number" value="<?=$VC05?>"
						class="form-control" placeholder="Titulo">
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
				  <td>Fecha de término del periodo que se informa </td>
				  <td><input name="C07" id="VC07" type="date" value="<?=$VC07?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
			  <tr>
				  <td>Denominacion de area</td>
				  <td>
				   <select name="select" >
<option value="04">4632>>>Sindicatura Municipal</option>
<option value="05">4633>>>Primera Regiduría</option>
<option value="07">4634>>>Segunda Regiduría</option>
<option value="07">4635>>>Tercer Regiduría</option>
<option value="08"selected>4636>>>Cuarto Regiduría</option>
<option value="09">4637>>>Quinta Regiduría</option>
<option value="10">4638>>>Sexta Regiduría</option>
<option value="11">4639>>>Séptima Regiduría</option>
<option value="12">4640>>>Octava Regiduría</option>
<option value="13">4642>>>Décima Regiduría</option>
<option value="14">4643>>>Décima Primera Regiduría</option>
<option value="15">4644>>>Décimo Segunda Regiduría</option>
<option value="16">4645>>>Décimo Tercer Regiduría</option>
<option value="17">22944>>>Coordinación de Logística</option>
<option value="18">54697>>>Dirección de Desarrollo Humano y Bienestar Social</option>
<option value="19">57039>>>DIRECCIÓN DE TURISMO</option>
<option value="20">57047>>>Instituto Municipal de la Juventud</option>
<option value="21">28234>>>Presidencia Municipal</option>
<option value="22">4823>>>Dirección de Desarrollo Económico</option>
<option value="23">44462>>>Organo Interno de Control</option>
<option value="24">4801>>>Secretaría Particular</option>
<option value="25">4803>>>Secretaría Técnica</option>
<option value="26">4808>>>Coordinación de Comunicación Social</option>
<option value="27">4812>>>Dirección de Obras Públicas y Desarrollo Urbano</option>
<option value="28">4821>>>Dirección de Gobierno</option>
<option value="29">4826>>>Coordinación Jurídica</option>
<option value="30">14870>>>Unidad de Transparencia</option>
<option value="31">22433>>>Coordinación Municipal de Protección Civil</option>
<option value="32">57038>>>Dirección de Educación y Cultura</option>
<option value="33">57084>>>Coordinación General Municipal de Mejora Regulatoria</option>
<option value="34">4800>>>Secretaría del Ayuntamiento</option>
<option value="35">4807>>>Tesorería Municipal</option>
<option value="36">4810>>>Dirección de Servicios Públicos</option>
<option value="37">4813>>>Dirección de Administración</option>
<option value="38">4820>>>Dirección de Medio Ambiente</option>
<option value="39">4824>>>Dirección de Programas Sociales</option>
<option value="40">4825>>>Dirección de Seguridad Pública y Tránsito</option>
<option value="41">5743>>>Secretaría Técnica del Consejo de Seguridad</option> Pública
<option value="42">4830>>>Defensoría Municipal de Derechos Humanos</option>
<option value="43">4833>>>Instituto Municipal de la Mujer</option>
<option value="44">4650>>>Contraloria Municipal</option>
<option value="45">4804>>>Unidad de Información, Planeación, Programaciónv y Evaluación
<option value="46">4811>>>Dirección de Desarrollo Urbano</option>
<option value="47">4822>>>Dirección de Educación, Cultura y Turismo</option>
<option value="48">22435>>>Instituto Municipal de la Juventud</option>
<option value="49">22432>>>Dirección de Desarrollo Metropolitano y Movilidad</option>
<option value="50">34665>>>Instituto de Cultura Física y Deporte</option>
<option value="51">58055>>>DIRECCIÓN </option>
<option value="52">58057>>>SUBDIRECCIÓN </option>
<option value="53">58058>>>SUBDIRECCIÓN</option>
<option value="54">58064>>>DEPARTAMENTO</option> 
<option value="55">58065>>>DEPARTAMENTO </option>
<option value="56">58066>>>DEPARTAMENTO</option> 
<option value="57">58074>>>UNIDAD DE INFORMACIÓN, PLANEACIÓN, PROGRAMACIÓN Y EVALUACIÓN.</option>
<option value="58">58075>>>CONTRALORÍA</option>
<option value="59">37386>>>DIRECCIÓN GENERAL</option>
<option value="60">37387>>>SUBDIRECCIÓN DE CULTURA FÍSICA Y DEPORTE</option>
<option value="61">37389>>>DEPARTAMENTO DE ACTIVACIÓN FÍSICA</option>
<option value="62">37390>>>DEPARTAMENTO DE NATACIÓN</option>
<option value="63">37392>>>DEPARTAMENTO DE FUTBOL Y BASQUETBOL</option>
<option value="64">37393>>>DEPARTAMENTO DE CONTABILIDAD Y TESORERÍA</option>
<option value="65">43829>>>SUBDIRECCIÓN DE ADMINISTRACIÓN Y FINANZAS DEL IMCUFIDEZ</option>

				  </select> 
				  <?php /*
		 			foreach($ResCat01 as $RegiTabl){
						$CC03 = $RegiTabl['Clave'];
						$CC04 = $RegiTabl['Descri'];
						echo "Clave: $CC03 <br> ";
					} */?>
				  <select name="C08" class="form-control">			
				  <?php 
		 			foreach($ResCat01 as $RegiTabl){ 
						$CC03 = $RegiTabl['Clave'];
						$CC04 = $RegiTabl['Descri'];
						$CampSele = ( $CC03 == $VC08 )? "selected" : ""; 
 						echo "<option value='$CC03' $CampSele>$CC04</option> ";
					} ?>
				  </select> 	
				  	
				  <!-- <input name="C08" id="VC08" type="text" value="<?=$VC20?>" 
						class="form-control" placeholder="Descripción" > -->
				</td>
			  </tr>
				<tr>
				  <td>Denominación de la norma en la que se establecen sus facultades</td>
				  <td><input  name="C09" id="VC09" type="text"value="<?=$VC09?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
			  <tr>
				  <td>Fundamento legal</td>
				  <td><input  name="C10" id="VC10" type="text"value="<?=$VC10?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>

			  <tr>
				  <td>Hipervínculo al fragmento de la norma que establece las facultades que correspondan a cada área </td>
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
	 					   if ( $VC11!= '' ) { ?> 
							<a href="javascript:window.open('<?=$RutaArch.$VC11?>','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">
							<i class="bi bi-eye-fill fs-1 text-success"></i>
						<?php  echo "</a> "; } 
						} //} else {?>
				  </td>
				  
			  </tr>

			  <tr>
				  <td>Área(s) responsable(s) que genera(n), posee(n), publica(n) y actualizan la información</td>
				  <td><input name="C12" id="VC12" type="int" value="<?=$VC12?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>

			  <tr>
				  <td>Nota</td>
				  <td><input name="C13" id="VC13" type="text" value="<?=$VC13?>" 
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