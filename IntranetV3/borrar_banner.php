<?php 
    include "includes/header.php";
    include "Funciones/functionSELECT.php";
    $RutaImag = 'Banner/';

    if(isset($_GET["id"])){
        $idBanner = $_GET['id'];
    }
    //Obtenemos los datos de nuetros avisos
    $query = "SELECT * FROM banner WHERE id=:id";
    $stmt = $conn->prepare($query);

    $stmt->bindParam(":id", $idBanner, PDO::PARAM_INT);
    $stmt->execute();
    $banner = $stmt->fetch(PDO::FETCH_OBJ);

    //?Eliminar Archivo de la carpeta Avisos
    unlink('Banner/'.$banner->nombImag);

    if (isset($_POST["borrarBannner"])){
            //Funcion para Borrar Registro
            $resultado = eliminarRegistros($conn, 'banner', $idBanner);
            if ($resultado){
                $mensaje = "Registro de nota borrado correctamente";
            } else {
                $error = "Error, no se pudo borrar la nota";
            }
    }
?>
<div class="row">
    <div class="col-sm-12">
        <?php if (isset($mensaje)) : ?>
            <div class="alert alert-warning alert-dismissible bg-warning shadow" role="alert">
                <i class="bi bi-info-circle-fill"></i>
                <strong><?=$mensaje;?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
    </div>
</div>
<!-- Alertas -->
<div class="row">
    <div class="col-sm-12">
        <?php if (isset($error)) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong><?php echo $error; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
    </div>
</div>
<div class="card-header">
    <div class="row">
        <div class="col-md-9">
            <h3 class="card-title fw-semibold">
                Borrar un Banner
            </h3>
        </div>
    </div>
</div>
<!-- Alertas -->
<div class="card-body">
    <div class="row">
        <div class="col-12">
            <form role="form" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
                <div class="mb-3">
                    <label for="titulo" class="form-label fw-semibold">Título:</label>
                    <input type="text" name="titulo" 
                    class="form-control" readonly
                    value="<?php if($banner) echo $banner->titulo;?>">
                </div>
                <div class="mb-3">
                    <label for="imagen" class="form-label fw-semibold">Imagen:</label>
                    <a href="<?=$RutaImag?><?php if($banner) echo $banner->nombImag;?>" 
                        class="fw-semibold d-block">
                        <i class="bi bi-card-image"></i>
                        <?php if($banner) echo $banner->nombImag;?>
                    </a>
                    <!-- <input type="file" id="imagen" accept="image/jpeg, image/png" class="form-control" name="imagen" readonly value="<?php //if($aviso) echo $aviso->nombImag;?>"> -->
                </div>
                <div class="d-flex justify-content-end gap-2">
                    <button type="submit" name="borrarBanner" class="btn btn-danger shadow fw-semibold">
                        <i class="bi bi-trash"></i>
                        Borrar Banner
                    </button>
                    <a href="lista_banner.php" class="btn btn-secondary shadow fw-semibold">
                        <i class="bi bi-box-arrow-left"></i>
                        Regresar
                    </a>
                </div>
                
        </div>
        </form>
    </div>
</div>
</div>
<!-- /.card-body -->


<?php include "includes/footer.php" ?>

<!-- page script -->
<script>
    $(function() {
        $('#tblRegistros').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>