<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $Titulo = 'Directores';
        include 'Components/Encabezado.php'
    ?>
</head>
<body>
    <?php include($_SERVER['DOCUMENT_ROOT'].'/Intranet/Conexion/ConBasComSoc.php');?>
    
    <div class="container">
        <img src="https://www.zinacantepec.gob.mx/cabildo/CABILDO-01.png" alt="Imagen Presidente" class="img-fluid">
    </div>
    <div class="container mt-5">
        <main class="d-flex justify-content-center">
            <h2 class="text-uppercase fs-2 fw-bold">
                Direcciones
            </h2>
        </main>
    </div>

    <div class="container">
        <div class="row">
            <?php
                $InstSql =  "SELECT CNombre, CCargo, CTelefono, CCorreo, CImagen, CFondo ".
                                    "FROM stdire ". 
                                    "WHERE CTipo = 'D' ".
                                    "ORDER BY CNumero ASC";
                $RespSql = $ConeBase->prepare($InstSql);
                $RespSql->execute();
                $ResuDire = $RespSql->fetchAll();
                foreach($ResuDire as $RegTab01):
                        $ResuNomb = $RegTab01[0];
                        $ResuCarg = $RegTab01[1];
                        $ResuTele = $RegTab01[2];
                        $ResuCorr = $RegTab01[3];
                        $ResuImag = $RegTab01[4];
                        $ResuFond = $RegTab01[5];
                        $RutaImag = '/Gobierno/Directorio/';
            ?>
            <div class="col-md-4 d-flex justify-content-center">
                <div class="card shadow mb-5 border-solid" style="width: 22rem;">
                    <img src="<?=$RutaImag?><?=$ResuImag?>" class="img-fluid" alt="Imagen-Cabildo">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-center text-lg"><?=$ResuNomb?></h5>
                        <h5 class="card-title fw-semibold text-center text-base"><?=$ResuCarg?></h5>
                        <p class="card-text text-center">
                        <i class="bi bi-telephone-fill"></i>
                        <?=$ResuTele?>
                        </p>
                        <p class="card-text text-center">
                        <i class="bi bi-envelope-at-fill"></i>
                        <?=$ResuCorr?>
                        </p>
                    </div>
                </div>
            </div>
        <?php
            endforeach;
        ?>
    </div>
    </div>

    <div class="container">
        <div class="row">
                <?php
                    $InstSql =  "SELECT CNombre, CCargo, CTelefono, CCorreo, CImagen, CFondo ".
                                "FROM stdire ". 
                                "WHERE CTipo = 'I' ".
                                "ORDER BY CNumero ASC";
                    $RespSql = $ConeBase->prepare($InstSql);
                    $RespSql->execute();
                    $ResuDire = $RespSql->fetchAll();
                    foreach($ResuDire as $RegTab02){ 
                            $ResuNomb = $RegTab02[0];
                            $ResuCarg = $RegTab02[1];
                            $ResuTele = $RegTab02[2];
                            $ResuCorr = $RegTab02[3];
                            $ResuImag = $RegTab02[4];
                            $ResuFond = $RegTab02[5];
                            $RutaImag = '/Gobierno/Directorio/';
                ?>
                <div class="col-md-6 d-flex justify-content-center">
                    <div class="card shadow mb-5" style="width: 22rem;">
                        <img src="<?=$RutaImag?><?=$ResuImag?>" class="img-fluid" alt="Imagen-Cabildo">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-center text-lg">
                                <?=$ResuNomb?>
                            </h5>
                            <h5 class="card-title fw-semibold text-center text-base">
                                <?=$ResuCarg?>
                            </h5>
                            <p class="card-text text-center">
                                <i class="bi bi-telephone-fill"></i>
                                <?=$ResuTele?>
                            </p>
                            <p class="card-text text-center">
                                <i class="bi bi-envelope-at-fill"></i>
                                <?=$ResuCorr?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php }?>
            </div>
        </div> 

    <div class="container">
        <div class="row">
            <?php
                $InstSql =  "SELECT CNombre, CCargo, CTelefono, CCorreo, CImagen, CFondo ".
                            "FROM stdire ". 
                            "WHERE CTipo = 'O' ".
                            "ORDER BY CNumero ASC";
                $RespSql = $ConeBase->prepare($InstSql);
                $RespSql->execute();
                $ResuDire = $RespSql->fetchAll();
                foreach($ResuDire as $RegTab01){ 
                        $ResuNomb = $RegTab01[0];
                        $ResuCarg = $RegTab01[1];
                        $ResuTele = $RegTab01[2];
                        $ResuCorr = $RegTab01[3];
                        $ResuImag = $RegTab01[4];
                        $ResuFond = $RegTab01[5];
                        $RutaImag = '/Gobierno/Directorio/';
            ?>
            <div class="col-md-4 d-flex justify-content-center">
                <div class="card shadow mb-5" style="width: 20rem;">
                    <img src="<?=$RutaImag?><?=$ResuImag?>" class="img-fluid" alt="Imagen-Cabildo">
                    <div class="card-body">
                        <h5 class="card-title fw-bold text-center text-lg">
                            <?=$ResuNomb?>
                        </h5>
                        <h5 class="card-title fw-semibold text-center text-base">
                            <?=$ResuCarg?>
                        </h5>
                        <p class="card-text text-center">
                            <i class="bi bi-telephone-fill"></i>
                            <?=$ResuTele?>
                        </p>
                        <p class="card-text text-center">
                            <i class="bi bi-envelope-at-fill"></i>
                            <?=$ResuCorr?>
                        </p>
                    </div>
                </div>
            </div>
        <?php }?>
        </div>
    </div>
    <?php include '../Components/Footer.php'?>
    <script src="../scripts/app.js"></script>
</body>
</html>