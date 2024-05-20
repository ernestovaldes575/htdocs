<?php 
    $ClavAyun = '105';
    $Title = "Zinacantepec";
    include 'Components/HeadHtml.php';
    include 'Components/menuPrin.php';
    include 'Components/menuSecu.php';
    
    include 'EstrPagi/DepeAuxi.php';
    include 'Components/RedesSociales.php';
?>
    <section class="contenedor--titulo">
        <div class="contenedor--titulo--posicion">
            <h2 class="contenedor--titulo--posicion--contenido animate">
                TRANSPARENCIA  
            </h2>
        </div>
    </section>
    
    <?php include 'EstrPagi/Transparencia.php'?>
    
    <!-- <section class="contenedor--titulo">
        <div class="contenedor--titulo--posicion">
            <h2 class="contenedor--titulo--posicion--contenido">
                Ultimas Noticias
            </h2>
        </div>
    </section> -->
    <?php 
        // include 'EstrPagi/Noticias.php'
    ?>

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

    <!-- <section class="contenedor--titulo">
        <div class="contenedor--titulo--posicion">
            <h2 class="contenedor--titulo--posicion--contenido">
                Redes Sociales
            </h2>
        </div>
    </section>-->
    <?php 
        // include 'EstrPagi/RedeSoci.php'
    ?>

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