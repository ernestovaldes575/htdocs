<!DOCTYPE html>
<html lang="es">
<head> 
	<title>Fraccion 02B-Organigrama</title>
	<?php include "../Encabezado/Ligas.php"?>
</head>
<body>
<header class="shadow mb-4 bg-white">
<?php
    $RutaEnca = $_SERVER['DOCUMENT_ROOT'].'/Intranet/';
	//Varibales Globales
	include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
	//Encabezado	
	require_once($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaPrin.php'); 
?>
</header>
<?php
	include 'InfoModListSERP.php';
	include "../tcarea.php";
?>	
<!--encabezado--> 
<form id="PideDato" method="post" name="formulario" action="InfoModListCRUD.php">
    <input name="C02" id="VC02" type="hidden" value="<?=$CampBusq?>">
	<table width="70%" class="ListInfo tabla">
		<tr>
			<td>Ejercicio: <?=$EjerTrab?></td>
			<td>Fraccion: <?=$FracTrab?></td>
			<td>Trimestre: <?=$TrimTrab?></td>
			<td colspan="4">Inciso:
				<?=$NumeInci?>
              	<?=$NumeSubi?>
            	<?=$Nomativi?></td>
			<td colspan="6">
				<a href="InformaList.php" class="btn-Regresar">
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
			foreach($ResuSql as $RegiTabl){
				$VC03 = $RegiTabl['OConsecutivo'];
				// $VC04 = $RegiTabl['OFechInicio'];
				$VC05 = $RegiTabl['ONumeRegi'];
				$VC06 = $RegiTabl['OFechInicio'];
			    $VC07 = $RegiTabl['OFechTerm'];
			    $VC08 = $RegiTabl['OHipervin'];
				$VC09 = $RegiTabl['OAreaResp'];
				$VC10 = $RegiTabl['OFechAct'];
				$VC11 = $RegiTabl['OFechValid'];
				$VC12 = $RegiTabl['ONota'];
			  
			  $RutaArch = "/ExpeElectroni/$ClavAyun/$EjerTrab/Transparen/$FracTrab/$TrimTrab/";
		?>
		<tr>
			<td><input name="C<?=$VC03?>05" id="VC05" type="text" value="<?=$VC05?>" 
			class="form-control" placeholder="No. Registro" ></td>
			<td><input name="C<?=$VC03?>06" id="VC06" type="date" value="<?=$VC06?>" 
			class="form-control" placeholder="Fecha Inicio" ></td>
			<td><input name="C<?=$VC03?>07" id="VC07" type="date" value="<?=$VC07?>" 
			class="form-control" placeholder="Fecha Termino" ></td>
			<td><input  name="C<?=$VC03?>08" id="VC08" type="text"value="<?=$VC08?>" 
			class="form-control" placeholder="Hipervinculo" ></td>
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
			<td><input name="C<?=$VC03?>11" id="VC03" type="date" value="<?=$VC11?>" 
			class="form-control" placeholder="Fecha Validación"></td>
			<td><input name="C<?=$VC03?>12" id="VC04" type="text" value="<?=$VC12?>" 
			class="form-control" placeholder="Nota"></td>

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