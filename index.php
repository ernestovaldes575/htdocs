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
                <h2 class="titulo">
                    Transparencia
                </h2>
            </div>
        </div>
    </main>
    <?php include 'PaginaWeb/EstrPagi/Modulo02.php';?>
    
    <main class="contenedor">
        <div class="contenedor-centrar">
            <div class="contenedor-titulo">
                <h2 class="titulo">
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
                <h2 class="titulo">
                    Avisos
                </h2>
            </div>
        </div>
    </main> 
    <?php include 'PaginaWeb/EstrPagi/Modulo04.php'?>

    <main class="contenedor">
        <div class="contenedor-centrar">
            <div class="contenedor-titulo">
                <h2 class="titulo">
                    Sitios de Interes
                </h2>
            </div>
        </div>
    </main>
    <?php include 'PaginaWeb/EstrPagi/Modulo05.php'?>
    
    <main class="contenedor">
        <div class="contenedor-centrar">
            <div class="contenedor-titulo">
                <h2 class="titulo">
                    Redes Sociales
                </h2>   
            </div>
        </div>
    </main>
    <?php include 'PaginaWeb/EstrPagi/Modulo06.php'?>

    <script src="/scripts/app.js"></script>
    <script src="/swiperjs/swiper-bundle.min.js"></script>
    
    <script src="/scripts/swiper.js"></script>  
    <script>
        ScrollReveal().reveal('.effect',{interval:130});
    </script>
    <script src="./scripts/anime.min.js"></script>  
    <script src="/scripts/animate.js"></script>

    <?php include 'PaginaWeb/EstrPagi/Encabezados/Footer.php';?>
</body>
</html>