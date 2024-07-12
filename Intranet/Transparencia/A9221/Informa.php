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
					<th>No</th>
					<td>
						<input name="C03" id="VC03" type="text" value="<?=$VC03?>"
						class="form-control" placeholder="Titulo">
					</td>
				</tr>	
				<tr>
					<th>Fecha Inicio</th>
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
				  <td>Denominacion Puesto</td>
				  <td><input name="C08" id="VC08" type="text" value="<?=$VC08?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
				<tr>
				  <td>Denominacion Cargo</td>
				  <td><input  name="C09" id="VC09" type="text"value="<?=$VC09?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
				<tr>
				  <td>Nombre</td>
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
					<th>Area Adscripcion</th>
					<td>
						<input name="C13" id="VC13" type="date" value="<?=$VC13?>" 
						class="form-control" placeholder="Descripción" >
					</td>	  
				</tr>	
				
				<tr>
				  <td>Nivel Estudios</td>
				  <td><input name="C14" id="VC14" type="date" value="<?=$VC14?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
				<tr>
				  <td>Nivel Estudios (Otro)</td>
				  <td><input name="C15" id="VC15" type="text" value="<?=$VC15?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
				<tr>
				  <td>Carrera Generica</td>
				  <td><input  name="C16" id="VC16" type="text"value="<?=$VC16?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
				<tr>
				  <td>Experiencia Laboral</td>
				  <td><input name="C17" id="VC17" type="text" value="<?=$VC17?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
			  
			
				<tr>
				  <td>Hipervinculo Curriculum</td>
				  <td><input name="C18" id="VC18" type="text" value="<?=$VC18?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
				<tr>
				  <td>Sanciones Admon</td>
				  <td><input name="C19" id="VC19" type="text" value="<?=$VC19?>" 
						class="form-control" placeholder="Descripción" ></td>
			  </tr>
	
				<tr>
					<th>Sanciones Admon (Otro)</th>
					<td>
						<input name="C20" id="VC20" type="date" value="<?=$VC20?>" 
						class="form-control" placeholder="Descripción" >
					</td>	  
				</tr>	

				<tr>
					<th>Area Responsable</th>
					<td>
						<input name="C21" id="VC21" type="date" value="<?=$VC21?>" 
						class="form-control" placeholder="Descripción" >
					</td>	  
				</tr>	

				<tr>
					<th>Nota</th>
					<td>
						<input name="C22" id="VC22" type="date" value="<?=$VC22?>" 
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