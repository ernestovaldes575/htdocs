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
				  <td><input name="C05" id="VC05" type="number" value="<?=$VC05?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>

			  <tr>
				  <td>Fecha de inicio del periodo que se informa</td>
				  <td><input name="C06" id="VC06" type="date" value="<?=$VC06?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
				
				<tr>
				  <td>Fecha de término del periodo que se informa</td>
				  <td><input name="C07" id="VC07" type="date" value="<?=$VC07?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
				<tr>
				  <td>Ejercicio auditado</td>
				  <td><input name="C08" id="VC08" type="text" value="<?=$VC08?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
				<tr>
				  <td>Periodo auditado</td>
				  <td><input  name="C09" id="VC09" type="text"value="<?=$VC09?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
				<tr>
				  <td>Rubro</td>
				  <td><input name="C10" id="VC10" type="text" value="<?=$VC10?>" 
						class="form-control" placeholder="Descripción" ></td>
			 </tr>
			  
			 
				<tr>
				  <td>Atención: Rubro en caso de elegir OTRO llenar este campo</td>
				  <td><input name="C11" id="VC11" type="text" value="<?=$VC11?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
				<tr>
				  <td>Tipo de Auditoría</td>
				  <td><input name="C12" id="VC12" type="text" value="<?=$VC12?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>

			  </tr>
				<tr>
				  <td>Número de Auditoría</td>
				  <td><input name="C13" id="VC13" type="text" value="<?=$VC13?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>	
				
				<tr>
				  <td>Órgano que realizó la revisión o auditoría</td>
				  <td><input name="C14" id="VC14" type="text" value="<?=$VC14?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
				<tr>
				  <td>Nomenclatura, número o folio del oficio o documento de notificación del inicio de trabajo</td>
				  <td><input name="C15" id="VC15" type="text" value="<?=$VC15?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
				<tr>
				  <td>Nomenclatura, número o folio del oficio o documento  de solicitud de información que  será revisada</td>
				  <td><input  name="C16" id="VC16" type="text"value="<?=$VC16?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
				<tr>
				  <td>Nomenclatura, número o folio que identifique el oficio o documento de solicitud de información</td>
				  <td><input name="C17" id="VC17" type="text" value="<?=$VC17?>" 
						class="form-control" placeholder="Descripción" ></td>
			 </tr>
			  
			 
				<tr>
				  <td>Objetivo(s) de la realización de la auditoría</td>
				  <td><input name="C18" id="VC18" type="text" value="<?=$VC18?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
				<tr>
				  <td>Rubros sujetos a revisión</td>
				  <td><input name="C19" id="VC19" type="text" value="<?=$VC19?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>

			  <tr>
				  <td>Fundamento legal (normas y legislaciones aplicables a la auditoría)</td>
				  <td><input name="C20" id="VC20" type="text" value="<?=$VC20?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>

				<tr>
				  <td>Número de oficio de notificación de resultados</td>
				  <td><input name="C21" id="VC21" type="text" value="<?=$VC21?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
				<tr>
				  <td>Hipervínculo al oficio o documento de notificación de resultados</td>
				  <td><input name="C22" id="VC22" type="text" value="<?=$VC22?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
				<tr>
				  <td>Por rubro sujeto a revisión especificar el número total de hallazgos, observaciones, conclusiones, recomendaciones, o lo que derive</td>
				  <td><input  name="C23" id="VC23" type="text"value="<?=$VC23?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
				<tr>
				  <td>Hipervínculo a las recomendaciones hechas</td>
				  <td><input name="C24" id="VC24" type="text" value="<?=$VC24?>" 
						class="form-control" placeholder="Descripción" ></td>
			 </tr>
			  
			 
				<tr>
				  <td>Hipervínculos a los informes finales, de revisión y/o dictamen</td>
				  <td><input name="C25" id="VC25" type="text" value="<?=$VC25?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
				<tr>
				  <td>Acción implementada por el órgano fiscalizador</td>
				  <td><input name="C26" id="VC26" type="text" value="<?=$VC26?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>

			  <tr>
				  <td>Servidor(a) público(a) y/o área responsable de recibir los resultados</td>
				  <td><input name="C27" id="VC27" type="text" value="<?=$VC27?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
				<tr>
				  <td>El total de solventaciones y/ o aclaraciones realizadas</td>
				  <td><input name="C28" id="VC28" type="text" value="<?=$VC28?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>

			  <tr>
				  <td>Hipervínculo al Informe aclaraciones por y promovidas OF</td>
				  <td><input name="C29" id="VC29" type="text" value="<?=$VC29?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
				<tr>
				  <td>El total de acciones pendientes por solventar y/o aclarar ante el órgano fiscalizador</td>
				  <td><input name="C30" id="VC30" type="text" value="<?=$VC30?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>

			  <tr>
				  <td>Hipervínculo al programa anual de auditorías</td>
				  <td><input name="C31" id="VC31" type="text" value="<?=$VC31?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
				<tr>
				  <td>Área responsable de la información</td>
				  <td><input name="C32" id="VC32" type="text" value="<?=$VC32?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>

			  <tr>
				  <td>Nota</td>
				  <td><input name="C33" id="VC33" type="text" value="<?=$VC33?>" 
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
