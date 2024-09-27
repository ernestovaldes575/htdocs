<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $Titulo = 'Mujer';
    include 'EstrPagi/Ligas.php';
    ?>
</head>

<body>
    <?php include 'EstrPagi/Navegacion.php'; ?>

    <header class="container-xl mt-4">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-uppercase mb-3 text-center titulo-mujer fw-semibold">
                    Dirección <span id="type-it" class="text-purple"></span>
                </h2>
            </div>
        </div>
    </header>

    <!-- <header class="container-xl mt-4 header">
        <div class="row">
            <div class="col-md-12 text-center">
                <img src="img/LOGO.png" alt="" width="300" height="120" class="img-fluid shadow border rounded">
            </div>
        </div>
    </header> -->

    <div class="container my-5">
        <div class="row justify-content-center ">
            <!-- Misión -->
            <div class="col-md-4 col-11 text-center mb-4 Objet d-flex">
                <div class="card border-0 shadow rounded-0 flex-fill d-flex flex-column cardBottom ">
                    <div class="circle-icon bg-orange mx-auto mb-3 text-light fs-4">
                        <i class="bi bi-rocket-takeoff-fill"></i>
                    </div>
                    <div class="card-body bg-orange text-white p-4 flex-grow-1">
                        <h3 class="fw-bold">
                            Misión
                        </h3>
                        <p>
                            Garantizar a las mexiquenses el acceso igualitario a oportunidades en todos los ámbitos, así como la erradicación de la violencia contra las mujeres, el empoderamiento de niñas, adolescentes y mujeres y el ejercicio pleno de sus derechos.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Misión -->

            <!-- Objetivo -->
            <div class="col-md-4 col-11 text-center mb-4 Objet d-flex">
                <div class="card border-0 rounded-0 shadow-lg flex-fill d-flex flex-column cardRight">
                    <div class="circle-icon bg-purple mx-auto mb-3 text-light fs-4">
                        <i class="bi bi-bullseye"></i>
                    </div>
                    <div class="card-body bg-purple text-white p-4 flex-grow-1">
                        <h3 class="fw-bold">
                            Objetivo
                        </h3>
                        <p>
                            Institucionalizar una política transversal con perspectiva de género en la administración pública municipal y construir mecanismos para la prevención, atención de la violencia contra las mujeres.
                            Impulsar y orientar la planeación, el presupuesto y evaluación de las políticas públicas a favor de la igualdad y equidad de género en el municipio de Zinacantepec.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Objetivo -->

            <!-- Visión -->
            <div class="col-md-4 col-11 text-center mb-4 Objet d-flex">
                <div class="card border-0 rounded-0 shadow-lg flex-fill d-flex flex-column cardBottom">
                    <div class="circle-icon bg-green text-light mx-auto mb-3 text-light fs-4">
                        <i class="bi bi-lightning-fill"></i>
                    </div>
                    <div class="card-body bg-green text-white p-4 flex-grow-1">
                        <h3 class="fw-bold">
                            Visión
                        </h3>
                        <p>
                            Promover una vida libre de violencia, garantizando el ejercicio y el goce de sus derechos humanos y libertades fundamentales en igualdad, a través de la promoción de los derechos, asegurando el pleno desarrollo de las mujeres.
                        </p>
                    </div>
                </div>
            </div>
            <!-- Visión -->
        </div>

    </div>


    <section class="container-xl mt-5">
        <div class="row row-gap-4">
            <div class="col-md-4 col-11 mx-auto bg-primary p-0 rightCard">
                <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/Captura de pantalla 2024-09-05 110957.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/Captura de pantalla 2024-09-05 111021.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/Captura de pantalla 2024-09-05 111036.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-8 col-11 mx-auto card border-0 p-0  shadow-lg leftCard">
                <div class="circle-icon bg-green text-light mx-auto mb-3 text-light fs-4">
                    <i class="bi bi-search"></i>
                </div>
                <div class="card-body bg-green text-light">
                    <h2 class="fs-4 text-center">
                        Marco Jurídico
                    </h2>
                    <p class="fs-5 text-center">
                        El objetivo es brindar información acerca de las Leyes en México para eliminar la violencia contra la Mujer y promover la Igualdad de Género.
                    </p>
                </div>
            </div>

        </div>
    </section>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="scripts/scroll.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        var typed = new Typed('#type-it', {
            strings: ['de la Mujer', '- Zinacantepec'],
            typeSpeed: 100,
            loop: true,
            fadeOutClass: 'typed-fade-out',
            fadeOutDelay: 100,
            cursorChar: '_',

        });
    </script>
    <script>
        ScrollReveal().reveal('.header', {
            origin: 'top',
            delay: 200,
            scale: 0.5,
            easing: 'ease-in-out'
        });
        ScrollReveal().reveal('.cardBottom', {
            origin: 'bottom',
            delay: 300,
            scale: 0.2,
            easing: 'ease-in-out'
        });
        ScrollReveal().reveal('.cardRight', {
            origin: 'top',
            delay: 300,
            scale: 0.2,
            easing: 'ease-in-out'
        });

        ScrollReveal().reveal('.leftCard', {
            origin: 'left',
            delay: 100,
            scale: 0.2
        });
        ScrollReveal().reveal('.rightCard', {
            origin: 'right',
            delay: 100,
            scale: 0.2
        });
    </script>
    <?php include 'componentes/footer.php' ?>

</html>