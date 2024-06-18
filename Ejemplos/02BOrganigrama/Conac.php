<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
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
        <td>Fecha Inicio</td>				<!-- Campo de la linea 9 de ConacSERP -->
        <td><input type="date" name="C04" value="<?=$VC04?>"></td>
      </tr>
	
	<!--	  Agregar mas campos  -->
	  <tr>
        <td>Hipervinculo</td>				
        <td><input type="text" name="C05" value="<?=$VC05?>"></td>
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