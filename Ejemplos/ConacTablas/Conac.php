<!DOCTYPE html>
<html lang="en">
<head>      
    <?php
        $Titulo = 'Conac Registro';
        include 'Componentes/LigasEnca.php';
    ?>
</head>
<?php include("ConacSERP.php"); ?>	
<body>
    <div class="container d-flex justify-content-center">
        <form method="post" name="formulario" action="ConacCRUD.php">
            <input type="hidden" name="C01" value="<?=$TipoMovi?>">
            <input type="hidden" name="C02" value="<?=$ClavBusq?>">
            
        <table class="tabla table-bordered1 border-secondary    ">
            <tbody>
                <tr>
                    <td class="text-uppercase">
                        Clave
                    </td><!-- Campo de la linea 9 de ConacSERP -->
                    <td>
                        <input type="text" name="C03" value="<?=$VC03?>" class="form-control d-inline">
                    </td>
                </tr>
                <tr>
                    <td class="text-uppercase">
                        Descripción
                    </td><!-- Campo de la linea 9 de ConacSERP -->
                    <td><input type="text" name="C04" value="<?=$VC04?>" class="form-control"></td>
                </tr>
                    <!--	
                    Agregar mas campos  
                    <tr>
                        <td>Descrio</td>				
                        <td><input type="text" name="C04" value="<?=$VC04?>"></td>
                    </tr>
                    -->	
                <tr>
                    <td>&nbsp;</td>
                    <td>
                        <span class="botones">
                            <input type="submit" name="Enviar" class="btn-Modificar" value="<?=$DescTiMo?>">
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
        </form>	
    </div>
<div class="container d-flex justify-content-end">
    <a href="ConacList.php" class="btn-Regresar">Salir</a>
</div>
<?php //} ?>	
</body>
</html>