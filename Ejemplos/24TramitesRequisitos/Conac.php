<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Tramites y requisitos</title>
</head>
<?php include("ConacSERP.php"); ?>	
<body>
<form method="post" name="formulario" action="ConacCRUD.php">
	<input type="hidden" name="C01" value="<?=$TipoMovi?>">
	<input type="hidden" name="C02" value="<?=$ClavBusq?>">
  <input type="hidden" name="C03" value="<?=$VC03?>">
  <input type="hidden" name="C04" value="<?=$VC04?>">
  <input type="hidden" name="C05" value="<?=$VC05?>">
  <table width="200" border="1">
    <tbody>
      <tr>
        <td>&nbsp;</td>
        <td><a href="ConacList.php">Regresar</a></td>
      </tr>

      <tr>
        <td>Fecha Inicio</td>	          <!-- Campo de la linea 9 de ConacSERP -->			
        <td><input type="date" name="C06" value="<?=$VC06?>"></td>
      </tr>

      <tr>
        <td>Fecha Termino</td>				
        <td><input type="date" name="C07" value="<?=$VC07?>"></td>
      </tr>

      <tr>
        <td>Denominacion</td>				
        <td><input type="text" name="C08" value="<?=$VC08?>"></td>
      </tr>

      <tr>
        <td>Tipo de Usuario</td>				
        <td><input type="text" name="C09" value="<?=$VC09?>"></td>
      </tr>

      <tr>
        <td>Descripcion</td>				
        <td><input type="text" name="C10" value="<?=$VC10?>"></td>
      </tr>

      <tr>
        <td>Modalidad</td>				
        <td><input type="text" name="C11" value="<?=$VC11?>"></td>
      </tr>

      <tr>
        <td>Hipervinculo Requ</td>				
        <td><input type="text" name="C12" value="<?=$VC12?>"></td>
      </tr>

      <tr>
        <td>Documentos Requ</td>				
        <td><input type="text" name="C13" value="<?=$VC13?>"></td>
      </tr>

      <tr>
        <td>Hipervinculo al Form </td>				
        <td><input type="text" name="C14" value="<?=$VC14?>"></td>
      </tr>

      <tr>
        <td>Tiempo res</td>				
        <td><input type="text" name="C15" value="<?=$VC15?>"></td>
      </tr>

      <tr>
        <td>Vigencia </td>				
        <td><input type="text" name="C16" value="<?=$VC16?>"></td>
      </tr>

      <tr>
        <td>Area de contacto</td>				
        <td><input type="text" name="C17" value="<?=$VC17?>"></td>
      </tr>

      <tr>
        <td>Costo </td>				
        <td><input type="text" name="C18" value="<?=$VC18?>"></td>
      </tr>

      <tr>
        <td>Sustento </td>				
        <td><input type="text" name="C19" value="<?=$VC19?>"></td>
      </tr>

      <tr>
        <td>Lugar de pago </td>				
        <td><input type="text" name="C19" value="<?=$VC20?>"></td>
      </tr>

      <tr>
        <td>Fund Juridica </td>				
        <td><input type="text" name="C19" value="<?=$VC21?>"></td>
      </tr>

      <tr>
        <td>Derechos </td>				
        <td><input type="text" name="C19" value="<?=$VC22?>"></td>
      </tr>

      <tr>
        <td>Lugar Repor </td>				
        <td><input type="text" name="C19" value="<?=$VC23?>"></td>
      </tr>

      <tr>
        <td>Otros </td>				
        <td><input type="text" name="C19" value="<?=$VC24?>"></td>
      </tr>

      <tr>
        <td>Hipervinculo Inf </td>				
        <td><input type="text" name="C19" value="<?=$VC25?>"></td>
      </tr>

      <tr>
        <td>Hipervinculo Sist </td>				
        <td><input type="text" name="C19" value="<?=$VC26?>"></td>
      </tr>

      <tr>
        <td>Area Responsable </td>				
        <td><input type="text" name="C19" value="<?=$VC27?>"></td>
      </tr>

      <tr>
        <td>Nota </td>				
        <td><input type="text" name="C19" value="<?=$VC28?>"></td>
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