<div class="nav__secondary punchline">
    <div class="contenedor__barra">
        <img class="barra" src="/img/logo/BARRA.png" alt="">
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
<nav class="nav__priv">
    <div class="contenedor__principal">
        <ul>
            <li class="effect">
                <a class="priva" href="/Transparencia/Aviso/aviso_privacidad.php">
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