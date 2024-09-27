<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $Titulo = "Programas y Servicios";
    include "EstrPagi/Ligas.php";
    ?>
</head>

<body>
    <?php include "EstrPagi/Navegacion.php"; ?>
    <section class="container-xl mt-5">
        <div class="row ">
            <div class="col-md-6 d-flex align-items-center justify-content-center col-11 mx-auto">
                <div class="">
                    <h2 class="fw-semibold text-uppercase">
                        Programas
                    </h2>
                </div>
            </div>
            <div class="col-md-6 bg-primary rounded-3 shadow col-11 mx-auto">
                <div>
                    <p class="fs-5 text-light p-md-3 p-0 fw-semibold">
                        Mexicanas que hicieron historia es un programa educativo dirigido a personas de edad adolescentes que permite darles a conocer datos relevantes de mujeres influyentes, examinando carreras y vida personal.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="container-xl mt-5 mb-5">
        <div class="row">
            <div class="col-md-6  bg-primary rounded-3 shadow col-11 mx-auto">
                <p class="fs-5 text-light p-md-3 p-0 fw-semibold">
                    Son cursos orientados al conocimientos y fortalecimiento de habilidades laborales desarrollando sus propias iniciativas y proyectos.
                </p>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-center col-11 mx-auto">
                <h2 class="fw-semibold text-uppercase text-center">
                    Servicios - Cursos para el autoempleo
                </h2>
            </div>
        </div>
    </section>
    <?php include 'componentes/footer.php' ?>
</body>

</html>