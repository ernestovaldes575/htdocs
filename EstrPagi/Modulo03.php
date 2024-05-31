<main class="contenedor">
        <div class="contenedor-centrar">
            <article class="Noticias-Grid">
                <?php
                    $BandInst = false;
                    include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasPagWeb.php');
                    $InstSql =  "SELECT  PTitulo, PEjercicio, PMesRegi, PImagenPagi, PDocuLiga, ". 
                                        "PDocumento, PLiga, PVentRefe, CTDCarpeta, PDescripcion ".
                                "FROM ptpagina ".
                                "INNER JOIN pctipodocu ON CTDClave = PTipoDocu ".
                                "WHERE PAyuntamiento = $ClavAyun ".
                                "AND PTipoDocu = '04'   ";
                    if($BandInst) echo "<br>$InstSql<br>";
                        $RespSql = $ConeBase->prepare($InstSql);
                        $RespSql->execute();
                        $ResuEjer = $RespSql->fetchAll();
                    foreach($ResuEjer as $RegTab01){
                            $EjerTrab = $RegTab01['PEjercicio'];
                            $MesTraba = $RegTab01['PMesRegi'];
                            $ImagNoti = $RegTab01['PImagenPagi'];
                            $CarpNoti = $RegTab01['CTDCarpeta'];
                            $DescNoti = $RegTab01['PDescripcion'];
                            $TituNoti = $RegTab01['PTitulo'];
                            $ImagPagi = "/ExpeElectroni/$ClavAyun/$EjerTrab/$MesTraba/$CarpNoti /$ImagNoti";
                ?>
                <div class="card-contenido">
                    <div class="img__not">
                        <img src="<?=$ImagPagi?>" alt="Not1">
                    </div>
                    <div class="card__Not">
                        <a href="#" class="titulo">
                            <span>
                                <?=$TituNoti?>
                            </span>
                        </a>
                        <p class="text-contenido">
                            <?=$DescNoti?>
                        </p>
                        <a href="" class="action">
                            Más
                        </a>
                    </div>
                </div>
                <?php
                }
                ?>
            </article>
        </div>
    </main>