<!DOCTYPE html>
<html lang="es">
<head> 
	<title>Fraccion 02B-Organigrama</title>
	<?php include "../Encabezado/Ligas.php"?>
</head>
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
	include 'InfoAltListSERP.php';  
	include "../tcarea.php";
?>
<!--encabezado--> 
<form id="PideDato" method="post" name="formulario" action="InfoAltListCRUD.php">
	<input name="C02" id="VC02" type="hidden" value="<?=$NumeRegi?>">
	<input type="hidden" name="C01" id="SV02" value="<?=$TipoMovi?>">
	<table width="70%" class="ListInfo tabla">
		<tr>
			<td>Ejercicio: <?=$EjerTrab?></td>
			<td>Fraccion: <?=$FracTrab?></td>
			<td>Trimestre:
            <?=$TrimTrab?></td>
			<td colspan="4">Inciso:
				<?=$NumeInci?>
              	<?=$NumeSubi?>
            	<?=$Nomativi?></td>
			<td>
				<a href="InformaList.php" 
					class="btn-Regresar">
			    Regresar
			    </a>		    
			</td>
		</tr>
		<tr align="center">
			<th>No</th>
			<th>Fecha Inicio</th>
			<th>Fecha Termino</th>
			<th>Hipervinculo</th>
			<th>Área Responsable</th>
			<th>Fecha Actualización</th>
			<th>Fecha Validación</th>
			<th>Nota</th>
		</tr>
		<?php 
			for ($i=1; $i<11; $i++) {
			  $VC03 = $NumeRegi	+ $i;
			//   $VC04 = $VC03;
			  $VC05 = $VC03;
			  $VC06 = "";
			  $VC07 = "";
			  $VC08 = "";
			  $VC09 = 0;
			  $VC10 = "";
			  $VC11 = "";
			  $VC12 = "";
			  
			  $RutaArch = "/ExpeElectroni/$ClavAyun/$EjerTrab/Transparen/$FracTrab/$TrimTrab/";

		?>
		<tr>
			<!-- <td><input name="C<?=$VC03?>04" id="VC04" type="text" value="<?=$VC04?>" 
						class="form-control" placeholder="No. Reg"></td>-->
			<td><input name="C<?=$VC03?>05" id="VC05" type="text" value="<?=$VC05?>" 
			class="form-control" placeholder="No.Registro" ></td>
			<td><input name="C<?=$VC03?>06" id="VC06" type="date" value="<?=$VC06?>" 
			class="form-control" placeholder="Fecha Inicio" ></td>
			<td><input name="C<?=$VC03?>07" id="VC07" type="date" value="<?=$VC07?>" 
			class="form-control" placeholder="Fecha Termino" ></td>
			<!-- <td><input  name="C<?=$VC03?>08" id="VC08" type="text"value="<?=$VC08?>" class="form-control" placeholder="Hipervinculo" ></td>-->
			<td>
				<?php if ( $TipoMovi == "A" ) { ?>
					    Registrar la información para realizar el hipervinculo 
				<?php } 
					else  { ?>
						<!-- Subir imagen -->
						<a href="#" onclick="CarImgPa(<?= $CampBusq?>,<?=$VC03?>)">
							<i class="bi bi-file-arrow-up-fill text-dark fs-1"></i>
						</a>
						<!-- Visualizar Image --> 
				<?php 
					if ( $VC08 != '' ) {  ?>
						<a href="javascript:window.open('<?=$RutaArch.$VC08?>','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">
						<i class="bi bi-eye-fill fs-1 text-success"></i>
				<?php echo "</a> "; } 
					}// else {?>
			</td>
			<td><select name="C<?=$VC03?>09" id="VC09" value="<?=$VC09?>"
			class="form-control">			
				<?php 
		 			foreach($ResCat02 as $RegiTabl){ 
						$CC03 = $RegiTabl['Clave'];
						$CC04 = $RegiTabl['Descri'];
						$CampSele = ( $CC03 == $VC09 )? "selected" : ""; 
 						echo "<option value='$CC03' $CampSele>$CC03  $CC04</option> ";
					} ?>
				</select></td>
			<td><input name="C<?=$VC03?>10" id="VC10" type="date" value="<?=$VC10?>" 
			class="form-control" placeholder="Fecha Actualización" ></td>
			<td><input name="C<?=$VC03?>11" id="VC11" type="date" value="<?=$VC11?>" 
			class="form-control" placeholder="Fecha Validación" ></td>
			<td><input name="C<?=$VC03?>12" id="VC12" type="text" value="<?=$VC12?>" 
			class="form-control" placeholder="Nota" ></td>

		</tr>
		<?php	} ?> 
		<tr>
			<td colspan="3"></td>
			<td colspan="6">
			<button type="submit" name="Enviar" placeholder="Registrar Lista"
					value="Registrar" class="btn-Submit container opacity-50" >
					Registrar Lista
			</button>
		</td>
		</tr>		
	</table>
</form>	

<?php
//require_once($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/PiePagi.php'); 
?>
</body>
</html>