    <main class="contenedor">
        <div class="contenedor-centrar">
            <div class="aviso-grid">
                <article class="item1">
                <main>
                    <div class="swiper" id="swiper-3">
                        <div class="swiper-wrapper">
                            <?php
                                include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConPagWeb.php');
                                $BandInst = false;
                                $InstSql =  "SELECT  PEjercicio, PMesRegi, PImagenPagi, PDocuLiga, ". 
                                                    "PDocumento, PLiga, PVentRefe, CTDCarpeta ".
                                                    "FROM ptpagina ".
                                                    "INNER JOIN pctipodocu ON CTDClave = PTipoDocu ".
                                                    "WHERE PAyuntamiento = $ClavAyun ". 
                                                    "AND PTipoDocu = '03' AND PEstado = 'A'";
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
                                        $RutaArch = "/ExpeElectroni/$ClavAyun/$EjerTrab/$MesTraba/$CarpImag/$DocuTrab";
                                        if($BandInst) echo "2)<br>$ImagPagi <br>";
                                    // echo($DocuLiga);
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
                </main>
                </article>

                <article>
                <div class="swiper" id="swiper-5">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="">
                                <img src="../img/Interes/conmutador.png" alt="">
                            </a> 
                        </div>
                        <div class="swiper-slide">
                            <a href="">
                                <img src="../img/conmutador2.png" alt="">
                            </a> 
                        </div>
                        <div class="swiper-slide">
                            <a href="">
                                <img src="../img/Interes/conmutador.png" alt="">
                            </a> 
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div> 
                </article>

                <article class="item2 item2-grid">
                <div class="emg">
                    <img src="../img/tel2.png" alt="">
                </div>
                <div class="swiper" id="swiper-4">
                    <!-- Imagenes Inicio -->
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href=""><img src="../img/busq/1.jpg" alt=""></a> 
                        </div>
                        <div class="swiper-slide">
                            <a href=""><img src="../img/busq/2.jpg" alt=""></a> 
                        </div>
                        <div class="swiper-slide">
                            <a href=""><img src="../img/busq/1.jpg" alt=""></a> 
                        </div>
                        <div class="swiper-slide">
                            <a href=""><img src="../img/busq/1.jpg" alt=""></a> 
                        </div>
                    </div>
                    <!-- Imagenes Fin -->

                    <!-- Botones Inicio -->
                    <div class="swiper-pagination"></div>
                    <!-- Botones Fin -->
                </div> 
                </article>
            </div>
        </div>
    </main>