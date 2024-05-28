<?php 
    $ClavAyun = '105';
    $Title = "Zinacantepec";
    include 'Components/HeadHtml.php';
    include 'Components/menuPrin.php';
    include 'Components/menuSecu.php';
    include 'Components/RedesSociales.php';
?>
    <main class="main">
        <div class="contenedor__principal contenedor__grid">
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
    <section class="contenedor--titulo">
        <div class="contenedor--titulo--posicion">
            <h2 class="contenedor--titulo--posicion--contenido animate">
                Transparencia
            </h2>
        </div>
    </section>
    <section class="contenedor--transparencia">
        <div class="contenedor--transparencia--contenido">
            <a href="/Conac/CONAC/index.php" class="shadow-xl bg-green-1000">
                CONAC
            </a>
            <a href="/Conac/PAE/index.php" class="pae shadow-xl bg-blue-1000">
                PAE
            </a>
            <a href="/Conac/SRFT/index.php" class="shadow-xl bg-yellow-1000">
                SRFT
            </a>
            <a href="" class="shadow-lg bg-red-1000">
                CUENTA PÚBLICA
            </a>
        </div>
    </section>  
    
    <section class="contenedor--titulo">
        <div class="contenedor--titulo--posicion">
            <h2 class="contenedor--titulo--posicion--contenido">
                Ultimas Noticias
            </h2>
        </div>
    </section>

    <main class="card">
        <div class="contenedor__principal ">
            <article class="card__content__grid">
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
                <div class="card__content">
                    <div class="img__not">
                        <img src="<?=$ImagPagi?>" alt="Not1">
                    </div>
                    <div class="card__Not">
                        <a href="#"><span class="title"><?=$TituNoti?></span></a>
                        <p class="card__content__text">
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


    <!-- Avisos -->
    <section class="contenedor--titulo">
        <div class="contenedor--titulo--posicion">
            <h2 class="contenedor--titulo--posicion--contenido">
                Avisos
            </h2>
        </div>
    </section>

    <main class="main__secondary">
        <div class="contenedor__principal">
            <?php include 'EstrPagi/Avisos02.php'?>
            <?php include 'EstrPagi/Avisos03.php'?>
            <?php include 'EstrPagi/Avisos01.php'?>
        </div>
    </main>

    <section class="contenedor--titulo">
        <div class="contenedor--titulo--posicion">
            <h2 class="contenedor--titulo--posicion--contenido">
                Sitios de Interes
            </h2>
        </div>
    </section>
    <?php include 'EstrPagi/SitiInte.php'?>

    <section class="contenedor--titulo">
        <div class="contenedor--titulo--posicion">
            <h2 class="contenedor--titulo--posicion--contenido">
                Redes Sociales
            </h2>
        </div>
    </section>
    <main class="contenedor__redes__sociales" id="facebook">
        <div class="contenedor__principal">
            <article>
                <div class="fb-page" data-href="https://www.facebook.com/ManuelVilchisV" data-tabs="timeline"  data-height="610" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/ManuelVilchisV" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ManuelVilchisV">Manuel Vilchis Viveros</a></blockquote>
                </div>
            </article>
            <article>
                <div class="fb-page" data-href="https://www.facebook.com/AyuntamientoZinacantepecOficial" data-tabs="timeline" data-width="" data-height="610" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/AyuntamientoZinacantepecOficial" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/AyuntamientoZinacantepecOficial">Ayuntamiento de Zinacantepec 2022-2024</a></blockquote>
                </div>
            </article>
        </div>
    </main>

    <?php include 'EstrPagi/Footer.php'?> 

    <script src="/scripts/app.js"></script>
    <script src="./swiperjs/swiper-bundle.min.js"></script>
    
    <script src="/scripts/swiper.js"></script>  
    <script>
        ScrollReveal().reveal('.effect',{interval:150});
    </script>
    <script src="./scripts/anime.min.js"></script>  
    <script src="/scripts/animate.js"></script>
</body>
</html>