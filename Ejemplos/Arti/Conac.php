<!DOCTYPE html>
<html lang="en">
<head>
<<<<<<< HEAD
<meta charset="utf-8">
<title>transpa2024</title>
=======
    <meta charset="utf-8">
    <title>Documento sin título</title>
>>>>>>> 19fd93aec8f65361b2ad061e0d7d214604445ca0
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
                    <td width="79">
                        Clave
                    </td>		<!-- Campo de la linea 9 de ConacSERP -->
                    <td width="105">
                        <input type="text" name="C03" value="<?=$VC03?>">
                    </td>
                </tr>
                <tr>
                    <td>Descripcion</td>				<!-- Campo de la linea 9 de ConacSERP -->
                    <td><input type="text" name="C04" value="<?=$VC04?>"></td>
                </tr>
                <!--Agregar mas campos  
                <tr>
                    <td>Descrio</td>				
                    <td><input type="text" name="C04" value="<?=$VC04?>"></td>
                </tr>
                -->	
                <tr>
                    <td>&nbsp;</td>
                    <td>
                        <span class="botones">
                            <input type="submit" name="Enviar" class="registrar" value="<?=$DescTiMo?>" >
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>	
<?php //} ?>	
</body>
</html>