<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $Titulo = "Integrantes de Cabildo";
        include 'Components/Encabezado.php'
    ?>
</head>
<body>
    <main class="contenedor-layer">
        <img src="/img/layer/1.png" alt="">
    </main>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasComSoc.php');?>
    <div class="container">
        <img src="https://www.zinacantepec.gob.mx/cabildo/CABILDO-01.png" alt="">
    </div>
    <main class="container mt-5">
        <div class="d-flex justify-content-center">
            <h2 class="fs-2 text-uppercase fw-bold">Integrantes de Cabildo</h2>
        </div>
    </main>

            <div class="container d-flex justify-content-center mt-5">
                <?php
                    $BandInst = false;
                    $InstSql =  "SELECT CImagen ". 
                                "FROM   stcabidire ". 
                                "WHERE  CTipo = 'S' AND ". 
                                "CNombre LIKE '%Dulce%'";
                            if($BandInst) echo "1)$InstSql<br>";
                    $RespSql = $ConeBase->prepare($InstSql);
                    $RespSql->execute();
                    $ResuImag = $RespSql->fetchAll();
                            foreach($ResuImag as $RegTab01){
                                    $ImagSind = $RegTab01[0];
                                    $RutaImag = '/ExpeElectroni/105/PaguWeb/2022/Cabildo/';
                            if($BandInst) echo "2)$ImagSind<br>";
                ?>
                <div class="d-flex justify-content-center">
                    <div class="card shadow mb-5" style="width: 22rem;">
                        <img src="<?=$RutaImag?><?=$ImagSind?>" class="card-img-top" alt="Imagen-Cabildo">
                        <div class="card-body">
                            <h2 class="card-title fw-bold text-center text-lg">
                                Dulce María Bastida Alvarez
                            </h2>
                            <h3 class="card-title fw-semibold text-center text-base">
                                Sindico Municipal
                            </h3>
                            <p class="card-text text-center">
                                <i class="bi bi-telephone-fill"></i>
                                7229177206
                            </p>
                            <p class="card-text text-center">
                                <i class="bi bi-geo-alt-fill"></i>
                                Constitucion 101, Centro, 51350 San Miguel Zinacantepec, Méx.
                            </p>
                        </div>
                    </div>
                </div>
                <?php }?>
        </div>

    <main class="container mt-5">
        <div class="row">
            <?php
                $BandInst = false;
                $InstSql =  "SELECT CNombre, CCargo, CTelefono, CDireccion, ".
                                    "CImagen, CAYDescripcion, Colonia, CodiPost, CFondo ". 
                            "FROM stcabidire ".
                            "INNER JOIN acceso.acayuntamiento ON CAyuntamiento = CAYClave ".
                            "WHERE CCabiDir = 'C' ". 
                            "AND CTipo = 'R' ".
                            "ORDER BY CNumero ASC";
                if($BandInst) echo "1)$InstSql<br>";
                $RespSql = $ConeBase->prepare($InstSql);
                $RespSql->execute();
                $ResuCabi = $RespSql->fetchAll();
            
                foreach($ResuCabi as $RegTab02){
                        $ResuNomb = $RegTab02[0];
                        $ResuCarg = $RegTab02[1];
                        $ResuTele = $RegTab02[2];
                        $ResuDire = $RegTab02[3];
                        $ImagRegi = $RegTab02[4];
                        $DescAyun = $RegTab02[5];
                        $ColoAyun = $RegTab02[6];
                        $CodiAyun = $RegTab02[7];
                        $ClasFond = $RegTab02[8];
                        $LigaRegi = '/ExpeElectroni/105/PaguWeb/2022/Cabildo/';
                        if($BandInst) echo "2)$LigaRegi<br>";
            ?> 
            <div class="col-md-4 d-flex justify-content-center">
                <div class="card shadow mb-5" style="width: 22rem;">
                    <img src="<?=$LigaRegi?><?=$ImagRegi?>" class="card-img-top" alt="Imagen-Cabildo">
                    <div class="card-body">
                        <h2 class="card-title fw-bold text-center text-lg"><?=$ResuNomb?></h2>
                        <h3 class="card-title fw-semibold text-center text-base"><?=$ResuCarg?></h3>
                        <p class="card-text text-center">
                        <i class="bi bi-telephone-fill"></i>
                        <?=$ResuTele?>
                        </p>
                        <p class="card-text text-center">
                            <i class="bi bi-geo-alt-fill"></i>
                                <?=$ResuDire?> <?=$DescAyun?>, Méx 
                                <?=$ColoAyun?>,<?=$CodiAyun?>
                        </p>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
    </main>


    <script src="/scripts/app.js"></script>
    <script>ScrollReveal().reveal('.effect',{interval:150});</script>
    <?php include '../Components/Footer.php'?>  

</body>
</html>