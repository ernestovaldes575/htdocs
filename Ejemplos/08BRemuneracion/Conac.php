<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Remuneraciones</title>
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
        <td>Tipo Integrante </td>				
        <td><input type="text" name="C08" value="<?=$VC08?>"></td>
      </tr>

      <tr>
        <td>Clave</td>				
        <td><input type="text" name="C10" value="<?=$VC10?>"></td>
      </tr>

      <tr>
        <td>Denominacion de puesto</td>				
        <td><input type="text" name="C11" value="<?=$VC11?>"></td>
      </tr>

      <tr>
        <td>Denominacion de cargo</td>				
        <td><input type="text" name="C12" value="<?=$VC12?>"></td>
      </tr>

      <tr>
        <td>Área de adscripción</td>				
        <td><input type="text" name="C13" value="<?=$VC13?>"></td>
      </tr>

      <tr>
        <td>Nombre</td>				
        <td><input type="text" name="C14" value="<?=$VC14?>"></td>
      </tr>

      <tr>
        <td>Primer Apellido</td>				
        <td><input type="text" name="C15" value="<?=$VC15?>"></td>
      </tr>

      <tr>
        <td>Segundo Apellido</td>				
        <td><input type="text" name="C16" value="<?=$VC16?>"></td>
      </tr>

      <tr>
        <td>Sexo</td>				
        <td><input type="text" name="C17" value="<?=$VC17?>"></td>
      </tr>

      <tr>
        <td>Remuneracion mensual bruta</td>				
        <td><input type="text" name="C19" value="<?=$VC19?>"></td>
      </tr>

      <tr>
        <td>Tipo de moneda de remuneracion bruta</td>				
        <td><input type="text" name="C20" value="<?=$VC20?>"></td>
      </tr>

      <tr>
        <td>Remuneracion mensual neta</td>				
        <td><input type="text" name="C21" value="<?=$VC21?>"></td>
      </tr>

      <tr>
        <td>Tipo de moneda de remuneracion neta</td>				
        <td><input type="text" name="C22" value="<?=$VC22?>"></td>
      </tr>

      <tr>
        <td>Percepcion adicional en dinero</td>				
        <td><input type="text" name="C23" value="<?=$VC23?>"></td>
      </tr>

      <tr>
        <td>Percepcion adicional en especie</td>				
        <td><input type="text" name="C24" value="<?=$VC24?>"></td>
      </tr>

      <tr>
        <td>Ingresos</td>				
        <td><input type="text" name="C25" value="<?=$VC25?>"></td>
      </tr>

      <tr>
        <td>Sistema de Compensacion</td>				
        <td><input type="text" name="C126" value="<?=$VC26?>"></td>
      </tr>

      <tr>
        <td>Gratificaciones</td>				
        <td><input type="text" name="C27" value="<?=$VC27?>"></td>
      </tr>

      <tr>
        <td>Primas</td>				
        <td><input type="text" name="C28" value="<?=$VC28?>"></td>
      </tr>

      <tr>
        <td>Comisiones</td>				
        <td><input type="text" name="C29" value="<?=$VC29?>"></td>
      </tr>

      <tr>
        <td>Dietas</td>				
        <td><input type="text" name="C30" value="<?=$VC30?>"></td>
      </tr>

      <tr>
        <td>Bonos</td>				
        <td><input type="text" name="C31" value="<?=$VC31?>"></td>
      </tr>

      <tr>
        <td>Estimulo</td>				
        <td><input type="text" name="C32" value="<?=$VC32?>"></td>
      </tr>

      <tr>
        <td>Apoyo Economico</td>				
        <td><input type="text" name="C33" value="<?=$VC33?>"></td>
      </tr>

      <tr>
        <td>Prestacion Economica</td>				
        <td><input type="text" name="C34" value="<?=$VC34?>"></td>
      </tr>

      <tr>
        <td>Prestacion en Especie</td>				
        <td><input type="text" name="C35" value="<?=$VC35?>"></td>
      </tr>

      <tr>
        <td>Area Responsable</td>				
        <td><input type="text" name="C36" value="<?=$VC36?>"></td>
      </tr>

      <tr>
        <td>Nota</td>				
        <td><input type="text" name="C37" value="<?=$VC37?>"></td>
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