<!DOCTYPE html>
<html lang="es">
<head>  
<?php
	  $RutaIntr = $_SERVER['DOCUMENT_ROOT']."/IntraClien/";
	  $TituEnca = "Detalle de la Solicitud";
	  include $RutaIntr.'Encabezado/EncaLiga.php';
	?>
</head>
<script language="JavaScript" src="Solicitud.js"></script>

<body> 
<header class="header">
   <?php include $RutaIntr.'Encabezado/EncaHead.php'?>
 </header>
<?php 
include 'SoliDetaSERP.php';
?>
<form method="post" name="formulario" onsubmit="validarFormulario()" action="SoliDetaCRUD.php">
  <input type="hidden" name="C00" value="<?=$CRUD?>">
  <input type="hidden" name="C01" value="<?=$TipoMovi?>">
  <input type="hidden" name="C02" value="<?=$NumeArti?>">
	
  <table width="48%" class="ListInfo01" with="50%">
    <caption>
      <?=$DescTiSe?>
    </caption>
  	<thead>	
	  <tr>
		<th width="165">Campo</th>
		<th width="289" align="right">
         <a href="SoliDetaList.php">Regresar</a></th>
	  </tr>	
    </thead>
	<tr>
		<th>Numero</th>
		<td>
			<input type="Number" name="C04" value="<?=$VC04?>" 
					onkeyup="checaMensaje(this.value)" readonly>
		</td>
	</tr>	
	<tr>
	  <th>Descripción</th>
	  <td><input type="text" name="C05" value="<?=$VC05?>" 
	  			 placeholder="Digitar la descripción"	size="25"></td>
    </tr>

	<tr>
	  <th>Cantidad</th>
	  <td><input type="Number" name="C06" value="<?=$VC06?>" size="5"></td>
    </tr>
	<tr>
	  <th>Clave de la unidad</th>
	  <td><input type="text" name="C07" value="<?=$VC07?>" 
				 placeholder="Digitar la clave"></td>
    </tr>
	<tr>
		<th>Unidad de Medida</th>
		<td><input type="text" name="C08" value="<?=$VC08?>" 
				   placeholder="Digitar la Unidad"></td>
	</tr>	
	<tr>
	  <th>Clave del Producto</th>
	  <td><input type="text" name="C09" value="<?=$VC09?>" 
				 placeholder="Digite la clave"></td>
    </tr>
	<tr>
		<th>Importe</th>
		<td>
			<input data-type="currency"  name="C10" value="<?=$VC10?>" min="0.00" 
				   placeholder="$1,000,000.00"></td>
	</tr>	
	<tr>
		<td></td>
		<td >
		<?php  if ( $EstSolBu == "01" || $EstSolBu == "02" ) { ?>
			<input type="submit" name="Enviar" value="<?=$MesnTiMo?>" >
		<?php  } ?>	
		</td>
	</tr>	
</table>	
</body>
</html>