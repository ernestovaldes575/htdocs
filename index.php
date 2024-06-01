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
    <?php include 'EstrPagi/Modulo04.php'?>

    <main class="contenedor">
        <div class="contenedor-centrar">
            <div class="contenedor-titulo">
                <h2 class="titulo">
                    Sitios de Interes
                </h2>
            </div>
        </div>
    </main>
    <?php include 'EstrPagi/Modulo05.php'?>
    
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