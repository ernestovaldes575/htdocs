<nav class="navbar navbar-expand-lg fixed-top shadow">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="/PaginaWeb/img/LOGO-PRINCIPAL.webp" 
                class="escudo_mur img-fluid" 
                alt="Logo" 
                style="width: 3em;">
        </a>
        <button class="navbar-toggler border-0 text-light fs-1" 
                type="button" 
                data-bs-toggle="offcanvas" 
                data-bs-target="#offcanvasNavbar" 
                aria-controls="offcanvasNavbar" 
                aria-label="Toggle navigation">
                <i class="bi bi-list"></i>
        </button>
        <!-- Sidebar -->
        <div class="sidebar offcanvas offcanvas-end d-flex"
                tabindex="-1" id="offcanvasNavbar" 
                aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title fw-semibold text-light" id="offcanvasNavbarLabel">
                    Zinacantepec
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                    <ul class="navbar-nav d-flex justify-content-center 
                            flex-grow-1 pe-3" 
                    style="font-size: .9em">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/" aria-current="page">
                            Inicio
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tramites y Servicios
                        </a>
                        <ul class="dropdown-menu shadow">
                            <li class="nav-item">
                                <a class="dropdown-item" 
                                    href="https://sfpya.edomexico.gob.mx/predial/index.jsp">
                                    Pago Predial
                                </a>
                            </li>
                            <li>

                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Transparencia
                        </a>
                        <ul class="dropdown-menu shadow">
                            <li>
                                <a class="dropdown-item" href="#">
                                    Action
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle text-light" 
                            href="#" 
                            role="button" 
                            data-bs-toggle="dropdown" 
                            aria-expanded="false">
                            Gobierno
                        </a>
                        <ul class="dropdown-menu shadow">
                            <li>
                                <a class="dropdown-item text-wrap" href="/PaginaWeb/Gobierno/cabildo.php">
                                    Integrantes de Cabildo
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item text-wrap" href="/Gobierno/vivo.php">
                                    Sesiones de Cabildo
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item text-wrap" 
                                href="https://zinacantepec.gob.mx/vivo.php">
                                    Cabildo en vivo
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item text-wrap" href="/PaginaWeb/Gobierno/direciones.php">
                                    Direcciones
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item text-wrap" href="/Gobierno/normatividad.php">
                                    Normatividad
                                </a>
                            </li>  
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item text-wrap" 
                                    href="javascript:window.open('/Gobierno/1ER%20INFORME%20ZINACANTEPEC%20MVV.pdf','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">
                                    Primer Informe de Gobierno
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">
                            Intranet
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">
                            Comunicación Social
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">
                            Turismo
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav justify-content-center 
                            flex-grow-1 gap-2 pe-3 flex-lg-row flex-sm-row" 
                    style="font-size: .9em">
                    <li class="nav-item">
                        <button class="bg-danger p-1 text-light rounded-2 border border-white shadow">
                            <i class="bi bi-droplet-half "></i>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="bg-danger p-1 btn-invert text-light rounded-2 border border-white shadow">
                            <i class="bi bi-palette"></i>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button onclick="aumentarTexto()" 
                            class="bg-danger p-1 text-light rounded-2 border border-white shadow">
                            A+
                        </button>
                    </li>
                    <li class="nav-item">
                        <button onclick="disminuirTexto()" 
                            class="bg-danger p-1 text-light rounded-2 border border-white shadow">
                            A-
                        </button>
                    </li>
                </ul>
            </div>
        </div>
        <a href="/">
            <img src="/PaginaWeb/img/escudo.webp" 
                class="escudo d-none d-xl-block d-sm-none" 
                alt="Logo" 
                style="width: 3em;">
        </a>
    </div>
</nav>
<div class="nav__secondary punchline" style="margin-top: 5.2em;">
    <div class="contenedor__barra">
        <img class="barra" src="/PaginaWeb/img/BARRA.webp" alt="BARRA">
    </div>
</div>


<!-- <header class="header">
    <div class="contenedor__principal navegacion">
        <a href="/" class="a">
            <img src="/PaginaWeb/img/LOGO-PRINCIPAL.webp" class="escudo_mur" alt="Logo" style="width: 3em;">
        </a>
        <button class="button">
            <i style="font-size: 3em; margin-top:.2em;" class="bi bi-list"></i>
        </button>
        <nav class="nav">
            <ul class="ul">
                <li class="li">
                    <a class="a" href="/">
                        Inicio
                    </a>
                </li>
                <li class="li">
                    <div>
                        <a href="#">Tramites y Servicios</a>
                        <i class="bi bi-caret-down-fill"></i>
                    </div>
                    <div class="mini desplaza">
                        <a class="elemento3" href="https://sfpya.edomexico.gob.mx/predial/index.jsp" target="_blank">
                            Pago de Predial
                        </a>
                        <a class="elemento2" href="/MejoraRegulatoria/index.html">
                            Mejora Regulatoria
                        </a>
                    </div>
                </li>
                <li class="li">
                    <div>
                        <a href="#">Transparencia</a>
                        <i class="bi bi-caret-down-fill"></i>
                    </div>
                    <div class="mini desplaza">
                        <a class="elemento1" href="https://www.ipomex.org.mx/ipo3/lgt/indice/zinacantepec.web?token=03AFcWeA618lTkxcBiirzvrmUG458HNcbGhGIOAHOanTRlvIOjRsIw1G-QxGU4E6S9BwXiQ1iUCb_cW0KsgD5XtNjSYZx0gnFxoJ3GK27FcT9JRPWWED_HHmmzAvzl2aqOtLS56VcTQE9xJ790ULXf7twREjkyuyxK6Tqji0upAyo2lrm5IMw3a5rw2MZyV9rzf1A7Q7eDCwBbj5VRzi81yVDd8Im1zuj1AtuOfdAwd-KBZ9YIyqArg2Gt__lz-20_GfCdMQWwG-MJTp4ZasYgOwIFwQp1xDbBisphMFQ7Dp4EFLQ4UBuan3A10ZTkIJHADvV7JC-iPMadirgy1khug8H1d59pO8URPA9BIG-lH-PUJO5r8E-vde4RFw13DOMkropdErL_V1bl88Vg_9FK4Qmfo_J4UY2FycemJmauA4jV4TySXggj2uVot6WOgigER4y7aOxvhzeWYANxtH9OXE-RfxpreyraW--qR9T93bDCr2roJGyXI_-p2_VHxA3Z7bzhA0FD-9EgrKD72Uuc4rMMUCqwy1e3BcvroOY6UsQTQWbZJunDkqrm04kgkd-VtrDxhgqdQLG_wirK67h76G7-WLDZR627MO5hH1rZrgrCKL4a71PIjXc" target="_blank">
                            IPOMEX
                        </a>
                        <a class="elemento2" href="/Conac/CONAC/index.php">
                            CONAC
                        </a>
                        <a class="elemento3" href="/Conac/PAE/index.php">
                            Programa de Acción Específico (PAE)
                        </a>
                        <a class="elemento5" href="/Conac/SRFT/index.php">
                            Sistema de Recursos Federales Transferidos (SRFT)
                        </a>
                        <a class="elemento1" href="/Conac/Cuenta/index.php">
                            Cuenta Pública
                        </a>
                        <a class="elemento2" href="/PaginaWeb/aviso_privacidad.php">
                            Aviso de Privacidad
                        </a>
                        <a class="elemento3" href="javascript:window.open('/Transparencia/ACUSE%20CUENTA%20PUBLICA%202021.pdf','Acuse de Cuenta Publica','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">
                            Oficio de la entrega de la cuenta Pública 2021
                        </a>
                    </div>
                </li>
                <li class="li">
                    <div>
                        <a href="#">Gobierno</a>
                        <i class="bi bi-caret-down-fill"></i>
                    </div>
                    <div class="mini desplaza">
                        <a class="elemento5" href="/PaginaWeb/Gobierno/cabildo.php">
                            Integrantes de Cabildo
                        </a>
                        <a class="elemento4" href="/PaginaWeb/Gobierno/vcabildos.php">
                            Sesiones de Cabildo
                        </a>
                        <a class="elemento3" href="/Gobierno/vivo.php">
                            Cabildo en vivo
                        </a>
                        <a class="elemento2" href="/PaginaWeb/Gobierno/direciones.php">
                            Direcciones
                        </a>
                        <a class="elemento1" href="/Gobierno/normatividad.php">
                            Normatividad
                        </a>
                        <a class="elemento5" href="javascript:window.open('/Gobierno/1ER%20INFORME%20ZINACANTEPEC%20MVV.pdf','','width=600,height=400,left=50,top=50,resizable=yes,scrollbars=yes');void 0">
                            Primer Informe de Gobierno
                        </a>
                    </div>
                </li>
                <li class="li">
                    <a class="a" href="/Intranet/Intranet.php">
                        Intranet
                    </a>
                </li>
                <li class="li">
                    <a class="a" href="/ComSocial/noticias.php">
                        Comunicación Social
                    </a>
                </li>
                <li class="li">
                    <a class="a" href="">
                        Turismo
                    </a>
                </li>
            </ul>
        </nav>

        <div class="font-controls">
            <i class="bi bi-facebook"></i>
            <button class="btn-gray">
                <i class="bi bi-droplet-half"></i>
            </button>
            <button class="btn-invert">
                <i class="bi bi-palette"></i>
            </button>
            <button onclick="aumentarTexto()" class="font-control">
                A+
            </button>
            <button onclick="disminuirTexto()" class="font-control">
                A-
            </button>
        </div>
        <a href="" class="a">
            <img src="/PaginaWeb/img/escudo.webp" class="escudo animate" alt="Logo" style="width: 3em;">
        </a>
    </div>
</header> -->

