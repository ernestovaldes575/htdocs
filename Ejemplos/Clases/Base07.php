<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>
<?php include("Base07SERP.php"); ?>	
<body>
<form method="post" name="formulario" action="Base07CRUD.php">
	<input type="hidden" name="C01" value="<?=$TipoMovi?>">
	<input type="hidden" name="C02" value="<?=$ClavBusq?>">
  <table width="200" border="1">
    <tbody>
      <tr>
        <td>&nbsp;</td>
        <td><a href="Base07List.php">Regresar</a></td>
      </tr>
      <tr>
        <td width="79">Calve</td>
        <td width="105"><input type="text" name="C03" value="<?=$VC03?>"></td>
      </tr>
      <tr>
        <td>Descrio</td>
        <td><input type="text" name="C04" value="<?=$VC04?>"></td>
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