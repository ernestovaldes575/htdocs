<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $ClavAyun = '105';
        $Titulo = "Zinacantepec";
        include 'PaginaWeb/EstrPagi/Encabezados/LigasHTML.php';
    ?>
</head>
<body>
    <?php
        include 'PaginaWeb/EstrPagi/MenuNav.php';
        include 'PaginaWeb/EstrPagi/RedesSociales.php';
    ?>
    <?php include 'PaginaWeb/EstrPagi/Modulo01.php';?>

    <main class="contenedor">
        <div class="contenedor-centrar">
            <div class="contenedor-titulo">
                <h2 class="titulo reveal-left">
                    Transparencia
                </h2>
            </div>
        </div>
    </main>
    <?php include 'PaginaWeb/EstrPagi/Modulo02.php';?>
    
    <main class="contenedor">
        <div class="contenedor-centrar">
            <div class="contenedor-titulo">
                <h2 class="titulo reveal-right">
                    Ultimas Noticias
                </h2>
            </div>
        </div>
    </main> 
    <?php include 'PaginaWeb/EstrPagi/Modulo03.php';?>

    <!-- Avisos -->
    <main class="contenedor">
        <div class="contenedor-centrar">
            <div class="contenedor-titulo">
                <h2 class="titulo reveal-left">
                    Avisos
                </h2>
            </div>
        </div>
    </main> 
    <?php include 'PaginaWeb/EstrPagi/Modulo04.php'?>

    <main class="contenedor">
        <div class="contenedor-centrar">
            <div class="contenedor-titulo">
                <h2 class="titulo reveal-right">
                    Sitios de Interes
                </h2>
            </div>
        </div>
    </main>
    <?php include 'PaginaWeb/EstrPagi/Modulo05.php'?>
    
    <main class="contenedor">
        <div class="contenedor-centrar">
            <div class="contenedor-titulo">
                <h2 class="titulo reveal-left">
                    Redes Sociales
                </h2>   
            </div>
        </div>
    </main>
    <?php include 'PaginaWeb/EstrPagi/Modulo06.php'?>
    <script src="/PaginaWeb/scripts/app.js"></script>
    <script src="/PaginaWeb/swiperjs/swiper-bundle.min.js"></script>
    <script src="/PaginaWeb/scripts/swiper.js"></script>
    <script src="/PaginaWeb/scripts/anime.min.js"></script>
    <script src="/PaginaWeb/scripts/animate.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="/PaginaWeb/scripts/main.js"></script>
    <script>
        ScrollReveal().reveal('.effect',{interval:130});
        // ScrollReveal().reveal('.image',{interval:130});
        ScrollReveal('.image-right', {origin:'right',reset:false});
    </script>
    <?php include 'PaginaWeb/EstrPagi/Encabezados/Footer.php';?>
</body>
</html>