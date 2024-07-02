<!DOCTYPE html>
<html lang="es">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facultades de área</title>
    <link rel="stylesheet" href="/bootstrap-icons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/Intranet/Css/style.css">
    <script src="InformaList.js"></script>
</head>
<body>
<header class="shadow mb-4 bg-white">
<?php
    include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
    require_once($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaPrin.php'); 
?>
</header>
<?php
    include 'InformaListSERP.php';
?>  
<!--encabezado--> 
<div class="container table-responsive">
    <table width="70%" class="ListInfo tabla">
        <tr>
            <td>Ejercicio: <?=$EjerTrab?></td>
            <td>Fraccion: <?=$NumeFrac?></td>
            <td>Trimestre: <?=$TrimTrab?></td>
            <td colspan="2">Inc iso: <?=$NumeInci?> <?=$NumeSubi?> <?=$Nomativi?></td>
            <td colspan="2">
                <a href="../Fracciones.php" class="btn-Regresar">Regresar</a>
            </td>
        </tr>
        <tr>
            <th>No</th>
            <th>Fecha</th>
            <th width="15%">Fecha</th>
            <th colspan="2">Descripción</th>
            <th width="6%">
                <?php if ($Alta == "A") { ?>
                    <i class="bi bi-plus-lg Nuev btn-Nuevo" title="AGREGAR" data-id='0'></i>
                <?php } ?>
            </th>
            <th width="12%">&nbsp;</th>
        </tr>
        <?php foreach($ResuSql as $RegiTabl) { ?>
            <tr>
                <td width="13%"><?=$RegiTabl['ANumeRegi']?></td>
                <td width="13%"><?=$RegiTabl['AFechaInicio']?></td>
                <td><?=$RegiTabl['AFechaTermino']?></td>
                <td width="34%"><?=$RegiTabl['ADenominacion']?></td>
                <td width="7%">
                    <?php if (!empty($RegiTabl['AHipervinculo'])) { ?> 
                        <a href="javascript:window.open('<?=$RutaArch.$RegiTabl['AHipervinculo']?>','','width=300,height=200,left=50,top=50,resizable=yes,scrollbars=yes');void 0">
                            <i class="bi bi-eye-fill fs-1 text-success"></i>
                        </a> 
                    <?php } ?>
                </td>
                <td data-titulo="Eliminar:">
                    <?php if($Baja == "A") { ?>
                        <i class="bi bi-x-square btn-Eliminar Elim" data-CaBu='<?=$RegiTabl['AConsecutivo']?>' title="ELIMINAR"></i>
                    <?php } ?>
                </td>
                <td data-titulo="Editar: ">
                    <?php if($Modi == "A") { ?>
                        <i class="bi bi-pencil-square btn-Modificar Modi" data-CaBu="<?=$RegiTabl['AConsecutivo']?>" title="MODIFICAR"></i>
                    <?php } ?>
                </td>
            </tr>
        <?php } ?> 
    </table>
</div>  
</body>
</html>
