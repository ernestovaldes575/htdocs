    <main class="contenedor">
        <div class="contenedor-centrar contenedor-grid">
            <article class="article__carrusel item-1">
                <div class="swiper" id="swiper-2">
                    <div class="swiper-wrapper">
                        <?php
                            include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConPagWeb.php');
                            $BandInst = false;

                            $InstSql =  "SELECT PEjercicio, PMesRegi, PImagenPagi, ".
                                                "PDocuLiga, PDocumento, PLiga, PVentRefe, CTDCarpeta  ".
                                        "FROM ptpagina ".
                                        "INNER JOIN pctipodocu ON CTDClave = PTipoDocu ".
                                        "WHERE PAyuntamiento = $ClavAyun AND PTipoDocu = '02' AND PEstado = 'A'";
                            if($BandInst) echo "1)<br>$InstSql<br>";
                                $RespSql = $ConeBase->prepare($InstSql);
                                $RespSql->execute();
                                $ResuEjer = $RespSql->fetchAll();
                            foreach($ResuEjer as $RegTab01){
                                    $EjerTrab = $RegTab01['PEjercicio'];
                                    $MesTraba = $RegTab01['PMesRegi'];
                                    $ImagTrab = $RegTab01['PImagenPagi'];
                                    $DocuLiga = $RegTab01['PDocuLiga'];
                                    $DocuTrab = $RegTab01['PDocumento'];
                                    $LigaTrab = $RegTab01['PLiga'];
                                    $VentRefe = $RegTab01['PVentRefe']; //N NADA, P PAGINA, V VENTANA
                                    $CarpImag = $RegTab01['CTDCarpeta'];
                                    $ImagPagi = "/ExpeElectroni/$ClavAyun/$EjerTrab/$MesTraba/$CarpImag/$ImagTrab";
                            if($BandInst) echo "2)<br>$ImagPagi<br>";
                                    $RutaArch = "/ExpeElectroni/$ClavAyun/$EjerTrab/$MesTraba/$CarpImag/$DocuTrab";
                                // echo "$RutaArch";
                                // echo  "<br>$ImagPagi<br>";
                                // echo($VentRefe);
                                $InicHtml = '';
                                $TermHtml = '';
                            if($DocuLiga <> "N"){
                            // echo('Entra');
                            if($VentRefe == "V"){
                                $InicHtml = "javascript:window.open('$RutaArch','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0";
                            }
                            if($VentRefe == "P"){
                                // echo('Pagina');
                                $InicHtml = $RutaArch;
                            }
                            }
                        ?>
                        <div class="swiper-slide">
                            <a href="<?=$InicHtml?>">
                                <img src="<?=$ImagPagi?>" alt="">
                            </a>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div> 
            </article>
            
            <article class="article__exp item-2">
                <div class="gallery">
                    <a href="https://dif.zinacantepec.gob.mx/">
                        <img src="../img/Imagenes_Exp/DIF_Edificio.png" alt="DIF">
                    </a>
                    <a href="https://opdapas.zinacantepec.gob.mx/">
                        <img src="../img/Imagenes_Exp/OPDAPAS_EDIF.jpg" alt="OPDAPAS">
                    </a>
                    <a href="https://imcufidez.zinacantepec.gob.mx/">
                        <img src="../img/Imagenes_Exp/IMCUFIDEZ_ZIN.jpg" alt="IMCUFIDEZ">
                    </a>
                </div>
            </article>
        </div>
    </main>