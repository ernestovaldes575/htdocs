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
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tramites y Servicios
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
                                <a class="dropdown-item text-wrap" href="/Gobierno/vivo.php">
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
<div class="nav__secondary punchline">
    <div class="contenedor__barra">
        <img class="barra" src="/PaginaWeb/img/BARRA.webp" alt="BARRA">
    </div>
</div>
<div class="contenedor__layer tagline">
    <div class="swiper" id="swiper-1">
        <div class="swiper-wrapper">
            <?php
            include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConPagWeb.php');
                $BandInst = false; 
                $InstSql =  "SELECT PEjercicio, PMesRegi, PImagenPagi, CTDCarpeta ".
                            "FROM ptpagina ". 
                            "INNER JOIN pctipodocu ON CTDClave = PTipoDocu ".
                            "WHERE PAyuntamiento = '$ClavAyun' AND PTipoDocu = '01' AND PEstado = 'A'";
            if($BandInst) echo("1)<br>$InstSql<br>");
                            
            $RespSql = $ConeBase->prepare($InstSql);     
            $RespSql->execute();
            $ResuEjer = $RespSql->fetchAll();
            foreach($ResuEjer as $RegTab01){
                    $EjerTrab = $RegTab01[0];
                    $MesTraba = $RegTab01[1];
                    $ImagTrab = $RegTab01[2];
                    $CarpImag = $RegTab01[3];
                    $RutaArch = "/ExpeElectroni/$ClavAyun/$EjerTrab/$MesTraba/$CarpImag/$ImagTrab"; 
            if($BandInst) echo "2)<br>$RutaArch<br>";
            ?>
            <div class="swiper-slide">
                <img src="<?=$RutaArch?>" alt="Carrusel de Imagenes">
            </div>
            <?php
                }
            ?>
        </div>
    </div>
</div>
<nav class="contenedor priv">
    <div class="contenedor__principal">
        <ul>
            <li class="effect">
                <a class="priva" href="/PaginaWeb/aviso_privacidad.php">
                    <i class="bi bi-archive"></i>
                    Aviso de Privacidad
                </a>
            </li>
            <li class="effect">
                <a class="datos" href="Gobierno/normatividad.php">
                    <i class="bi bi-folder2-open"></i>
                    Normatividad
                </a>
            </li>                
            <li class="effect">
                <a class="trami" href="MejoraRegulatoria/index.html">
                    <i class="bi bi-gear-wide-connected"></i>
                    Mejora Regulatoria
                </a>
            </li>
            <li class="effect">
                <a class="super" href="/Supervisor/DepeList.php">
                    <i class="bi bi-eye-fill"></i>
                    Supervisores
                </a>
            </li>
            <li class="effect">
                <a class="traba" href="/Intranet/DesaEcono/Empresa/EmpresaList.php">
                    <i class="bi bi-person-workspace"></i>
                    Bolsa de Trabajo
                </a>
            </li>
            <li class="effect">
                <a class="datos" href="DatoAbiertos/datos.php">
                    <i class="bi bi-folder2-open"></i>
                    Datos Abiertos
                </a>
            </li>
        </ul>
    </div>
</nav> 