<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $ClavAyun = '105';
        $Titulo = "Zinacantepec";
        include 'Components/HeadHtml.php';
    ?>
</head>
<body>
    <?php
        include 'Components/menuPrin.php';
        include 'Components/menuSecu.php';
        include 'Components/RedesSociales.php';
    ?>
    <?php include 'EstrPagi/Modulo01.php'?>

    <main class="contenedor">
        <div class="contenedor-centrar">
            <div class="contenedor-titulo">
                <h2 class="titulo">
                    Transparencia
                </h2>
            </div>
        </div>
    </main>
    <?php include 'EstrPagi/Modulo02.php';?>
    
    <main class="contenedor">
        <div class="contenedor-centrar">
            <div class="contenedor-titulo">
                <h2 class="titulo">
                    Ultimas Noticias
                </h2>
            </div>
        </div>
    </main> 
    <?php include 'EstrPagi/Modulo03.php';?>

    <!-- Avisos -->
    <main class="contenedor">
        <div class="contenedor-centrar">
            <div class="contenedor-titulo">
                <h2 class="titulo">
                    Avisos
                </h2>
            </div>
        </div>
    </main> 

    <main class="main__secondary">
        <div class="contenedor__principal">
            <article class="item1">
                <main>
                    <div class="swiper" id="swiper-3">
                        <div class="swiper-wrapper">
                            <?php
                                include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConPagWeb.php');

                                $InstSql =  "SELECT  PEjercicio, PMesRegi, PImagenPagi, PDocuLiga, ". 
                                                    "PDocumento, PLiga, PVentRefe, CTDCarpeta ".
                                                    "FROM ptpagina ".
                                                    "INNER JOIN pctipodocu ON CTDClave = PTipoDocu ".
                                                    "WHERE PAyuntamiento = $ClavAyun ". 
                                                    "AND PTipoDocu = '03' AND PEstado = 'A'";

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
    </main>

    <main class="contenedor">
        <div class="contenedor-centrar">
            <div class="contenedor-titulo">
                <h2 class="titulo">
                    Sitios de Interes
                </h2>
            </div>
        </div>
    </main>
    <?php include 'EstrPagi/SitiInte.php'?>
    
    <main class="contenedor">
        <div class="contenedor-centrar">
            <div class="contenedor-titulo">
                Redes Sociales
            </div>
        </div>
    </main>
    <main class="contenedor__redes__sociales" id="facebook">
        <div class="contenedor__principal">
            <article>
                <div class="fb-page" data-href="https://www.facebook.com/ManuelVilchisV" data-tabs="timeline"  data-height="610" data-small-header="false" data-adapt-contenedor-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/ManuelVilchisV" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/ManuelVilchisV">Manuel Vilchis Viveros</a></blockquote>
                </div>
            </article>
            <article>
                <div class="fb-page" data-href="https://www.facebook.com/AyuntamientoZinacantepecOficial" data-tabs="timeline" data-width="" data-height="610" data-small-header="false" data-adapt-contenedor-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/AyuntamientoZinacantepecOficial" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/AyuntamientoZinacantepecOficial">Ayuntamiento de Zinacantepec 2022-2024</a></blockquote>
                </div>
            </article>
        </div>
    </main>

    <script src="/scripts/app.js"></script>
    <script src="./swiperjs/swiper-bundle.min.js"></script>
    
    <script src="/scripts/swiper.js"></script>  
    <script>
        ScrollReveal().reveal('.effect',{interval:150});
    </script>
    <script src="./scripts/anime.min.js"></script>  
    <script src="/scripts/animate.js"></script>
    <?php include 'Components/Footer.php';?>
</body>
</html>