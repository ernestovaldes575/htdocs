<?php 
    include "includes/header.php";
    include "Funciones/functionSELECT.php";
    $RutaImag = 'Avisos/';

    if(isset($_GET["id"])){
        $idAviso = $_GET['id'];
    }
    //Obtenemos los datos de nuetros avisos
    $query = "SELECT * FROM Avisos WHERE id=:id";
    $stmt = $conn->prepare($query);

    $stmt->bindParam(":id", $idAviso, PDO::PARAM_INT);
    $stmt->execute();
    $aviso = $stmt->fetch(PDO::FETCH_OBJ);

    //?Eliminar Archivo de la carpeta Avisos
    unlink('Avisos/'.$aviso->nombImag);

    if (isset($_POST["borrarAviso"])){
            //Funcion para Borrar Registro
            $resultado = eliminarRegistros($conn, 'Avisos', $idAviso);
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
                Editar una nota
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
                    value="<?php if($aviso) echo $aviso->titulo;?>">
                </div>
                <div class="mb-3">
                    <label for="imagen" class="form-label fw-semibold">Imagen:</label>
                    <a href="<?=$RutaImag?><?php if($aviso) echo $aviso->nombImag;?>" 
                        class="fw-semibold d-block">
                        <i class="bi bi-card-image"></i>
                        <?php if($aviso) echo $aviso->nombImag;?>
                    </a>
                    <!-- <input type="file" id="imagen" accept="image/jpeg, image/png" class="form-control" name="imagen" readonly value="<?php //if($aviso) echo $aviso->nombImag;?>"> -->
                </div>
                <div class="d-flex justify-content-end gap-2">
                    <button type="submit" name="borrarAviso" class="btn btn-danger shadow fw-semibold">
                        <i class="bi bi-trash"></i>
                        Borrar Noticia
                    </button>
                    <a href="lista_aviso.php" class="btn btn-secondary shadow fw-semibold">
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