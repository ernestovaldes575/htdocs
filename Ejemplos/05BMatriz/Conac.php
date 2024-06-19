<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Matriz</title>
</head>
<?php include("ConacSERP.php"); ?>	
<body>
<form method="post" name="formulario" action="ConacCRUD.php">
	<input type="hidden" name="C01" value="<?=$TipoMovi?>">
	<input type="hidden" name="C02" value="<?=$ClavBusq?>">
  <table width="200" border="1">
    <tbody>
      <tr>
        <td>&nbsp;</td>
        <td><a href="ConacList.php">Regresar</a></td>
      </tr>
		
      <tr>
        <td width="79">No</td>		<!-- Campo de la linea 9 de ConacSERP -->
        <td width="105"><input type="text" name="C03" value="<?=$VC03?>"></td>
      </tr>

	    <tr>
        <td>Ayuntamiento</td>				<!-- Campo de la linea 9 de ConacSERP -->
        <td><input type="text" name="C04" value="<?=$VC04?>"></td>
      </tr>
	
	<!--	  Agregar mas campos  -->
	    <tr>
        <td>Ejercicio</td>				
        <td><input type="text" name="C05" value="<?=$VC05?>"></td>
      </tr>

      <tr>
        <td>Fecha Inicio</td>				
        <td><input type="date" name="C06" value="<?=$VC06?>"></td>
      </tr>

      <tr>
        <td>Fecha Termino</td>				
        <td><input type="date" name="C07" value="<?=$VC07?>"></td>
      </tr>

      <tr>
        <td>Hipervinculo</td>				
        <td><input type="text" name="C08" value="<?=$VC08?>"></td>
      </tr>

      <tr>
        <td>Area Responsable</td>				
        <td><input type="text" name="C09" value="<?=$VC09?>"></td>
      </tr>

      <tr>
        <td>Fecha Actualizacion</td>				
        <td><input type="date" name="C10" value="<?=$VC10?>"></td>
      </tr>

      <tr>
        <td>Fecha de validacion</td>				
        <td><input type="date" name="C11" value="<?=$VC11?>"></td>
      </tr>

      <tr>
        <td>Nota</td>				
        <td><input type="text" name="C12" value="<?=$VC12?>"></td>
      </tr>
	
      <tr>
        <td>&nbsp;</td>
        <td><span class="botones">
          <input type="submit" name="Enviar" class="registrar" value="<?=$DescTiMo?>" >
        </span></td>
      </tr>
    </tbody>
  </table>
</form>	
<?php //} ?>	
</body>
</html>