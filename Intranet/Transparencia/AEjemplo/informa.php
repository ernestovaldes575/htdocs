<!DOCTYPE html>
<html lang="es">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facultades de área</title>
    <link rel="stylesheet" href="/bootstrap-icons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="/Intranet/css/style.css">
    <script src="Informa.js"></script>
</head>
<body> 
<header class="shadow mb-4 bg-white">
    <?php 
        // Variables Globales
        include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaCook.php');
        // Encabezado	
        require_once($_SERVER['DOCUMENT_ROOT'].'/Intranet/Encabezado/EncaPrin.php'); 
    ?> 
</header>

<?php 
    // Carga de la Informacion	
    include 'InformaSERP.php';	
?>

<div>
    <form id="PideDato" method="post" name="formulario" action="InformaCRUD.php">	
        <input type="hidden" name="C00" id="SV01" value="<?= isset($CRUD) ? $CRUD : '' ?>">
        <input type="hidden" name="C01" id="SV02" value="<?= isset($TipoMovi) ? $TipoMovi : '' ?>">
        <input type="hidden" name="C02" id="SV03" value="<?= isset($CampBusq) ? $CampBusq : '' ?>">
        
        <div class="contenedor-tabla">
            <div class="contenedor-tabla-sec">
                <table class="ListInfo01 tabla">
                    <tr class="">
                        <td width="29%" class="text-uppercase" scope="row">
                            Campo
                        </td>
                        <td width="71%">
                            <a class="btn-Regresar container" href="InformaList.php">
                                Regresar
                            </a>
                        </td>
                    </tr>
                    <!-- Inicia campos -->
                    <tr>
                        <th>No</th>
                        <td>
                            <input name="C03" id="VC03" type="text" value="<?= isset($VC03) ? $VC03 : '' ?>"
                            class="form-control" placeholder="Titulo">
                        </td>
                    </tr>	
                    <tr>
                        <th>Fecha Inicio</th>
                        <td>
                            <input name="C04" id="VC04" type="date" value="<?= isset($VC04) ? $VC04 : '' ?>" 
                            class="form-control" placeholder="Descripción" >
                        </td>	  
                    </tr>	
                    <tr>
                        <td></td>
                        <td>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>Fecha de Termino</td>
                        <td><input name="C05" id="VC05" type="date" value="<?= isset($VC05) ? $VC05 : '' ?>" 
                            class="form-control" placeholder="Descripción" ></td>
                    </tr>
                    <tr>
                        <td>Area</td>
                        <td><input name="C06" id="VC06" type="text" value="<?= isset($VC06) ? $VC06 : '' ?>" 
                            class="form-control" placeholder="Descripción" ></td>
                    </tr>
                    <tr>
                        <td>Denominacion</td>
                        <td><input name="C07" id="VC07" type="text" value="<?= isset($VC07) ? $VC07 : '' ?>" 
                            class="form-control" placeholder="Descripción" ></td>
                    </tr>
                    <tr>
                        <td>Fundamento</td>
                        <td><input name="C08" id="VC08" type="text" value="<?= isset($VC08) ? $VC08 : '' ?>" 
                            class="form-control" placeholder="Descripción" ></td>
                    </tr>
                    <tr>
                        <td>Hipervinculo</td>
                        <td>				
                            <?php if ( isset($TipoMovi) && $TipoMovi == "A" ) { ?>
                                Registrar la información para realizar el hipervinculo 
                            <?php } else { ?>
                                <!-- Subir imagen -->
                                <a href="#" onclick="CarImgPa(<?= isset($CampBusq) ? $CampBusq : '' ?>,<?= isset($VC03) ? $VC03 : '' ?>)">
                                    <i class="bi bi-file-arrow-up-fill text-dark fs-1"></i>
                                </a>
                                <!-- Visualizar Imagen -->
                                <?php 
                                    if ( isset($VC09) && $VC09 != '' ) { ?> 
                                    <a href="javascript:window.open('<?= isset($RutaArch) ? $RutaArch.$VC09 : '' ?>','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">
                                    <i class="bi bi-eye-fill fs-1 text-success"></i>
                                <?php  echo "</a> "; } 
                                } ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Area Responsable</td>
                        <td><input name="C10" id="VC10" type="text" value="<?= isset($VC10) ? $VC10 : '' ?>" 
                            class="form-control" placeholder="Descripción" ></td>
                    </tr>
                    <tr>
                        <td>Nota</td>
                        <td><input name="C11" id="VC11" type="text" value="<?= isset($VC11) ? $VC11 : '' ?>" 
                            class="form-control" placeholder="Descripción" ></td>
                    </tr>
                    <!-- Termina  campos -->	
                    <tr>
                        <td></td>
                        <td><button type="submit" name="Enviar" placeholder="Registrar"
                            value="<?= isset($MesnTiMo) ? $MesnTiMo : '' ?>" class="btn-Submit container opacity-50" disabled>
                                    Registrar
                                </button></td>
                    </tr>
                </table>
            </div>
        </div>
    </form>	
</div>
<script src="/Intranet/Js/ValiForm.js"></script>
</body>
</html>
