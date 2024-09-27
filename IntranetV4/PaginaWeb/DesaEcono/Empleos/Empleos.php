<!DOCTYPE html>
<html lang="es">
<head>  
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Facultades de área</title>
	<link rel="stylesheet" type="text/css" href="/Intranet/Encabezado/EstiIntr.css">
</head>
<script language="JavaScript" src="PWRegistro.js"></script>

<body> 
 <header>
  <?php 
   //Varibales Globales
   include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
   //Encabezado	
   require_once($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaPrin.php'); 
  ?> 
 </header>
<?php 
//Carga de la Informacion	
$CRUD = "GET";
include 'EmpleoApi.php';
echo "Valor CRUD: $CRUD ";
?>
<form method="post" name="formulario" onsubmit="validarFormulario()" action="EmpleoApi.php">
  <input type="hidden" name="C00" value="<?=$CRUD?>">
  <input type="hidden" name="C01" value="<?=$TipoMovi?>">
  <input type="hidden" name="C02" value="<?=$ConsBusq?>">
  <table >
	<tr>
	  <th>&nbsp;</th>
	  <td><a href="EmpleoList.php">Regresar</a></td>
    </tr>
	<tr>
		<th>Puesto</th>
		<td><input type="text" name="C03" value="<?=$VC03?>" onkeyup="checaMensaje(this.value)"></td>
	</tr>
	<tr>
	<th>Sexo</td>
		<td>
			<select name="C04" >
					<?php 
					foreach($CataSexo as $RegiTabl): 
						$ClavCata = $RegiTabl[0];		
						$DescCata = $RegiTabl[1];  
						$Activo = ( $ClavCata == $VC04) ? "selected" : ""; 
						?>
						<option value="<?=$ClavCata?>" <?=$Activo?>> <?=$DescCata?> </option>
						<?php	
					endforeach;
					?>
				</select>
				</td>
			</tr>
			<tr>
				<th>Edad</td>
				<td><input name="C05" type="text" onkeyup="checaMensaje(this.value)" value="<?=$VC05?>" size="50" maxlength="50"></td>
			</tr>
			<tr>
				<th>Sueldo</td>
				<td><input name="C06" type="text" onkeyup="checaMensaje(this.value)" value="<?=$VC06?>" size="50" maxlength="80"></td>
			</tr>

			<tr>
				<th>Escolaridad</td>
				<td><input name="C07" type="text" onkeyup="checaMensaje(this.value)" value="<?=$VC07?>" size="30" maxlength="30"></td>
			</tr>
			<tr>
				<th>Experiencia</td>
				<td><input name="C08" type="text" onkeyup="checaMensaje(this.value)" value="<?=$VC08?>" size="50" maxlength="200"></td>
			</tr>
			<tr>
				<th>Estado</td>
				<td>
					<input type="checkbox" name="C09" value="A" <?=$EstaPlaA?>> Activo &nbsp;&nbsp; 
					<input type="checkbox" name="C09" value="I" <?=$EstaPlaI?>> Inactivo	
				</td>
			</tr>
			<tr>
			  <th>              
			  <td><input type="submit" name="Enviar" class="registrar" value="<?=$MesnTiMo?>" ></td>
    </tr>

		</table>
</form>	
</body>
</html>