<?php
//Create
include "includes/header.php";
if(isset($_POST["registrarBanner"])){
    // Obtener Valores
    $titulo = $_POST["titulo"];
    $imagen = $_FILES['imagen'];

    //Ruta para crear carpeta
    $carpetaImagenes = 'Banner/';

    //Valida si una carpeta existe
    if(!is_dir($carpetaImagenes)){  
        mkdir($carpetaImagenes,0777,true);
    }
    // exit;
    //Generar un nombre unico
    $nombreImagen = md5(uniqid(rand(),true)) .".jpg";

    //Subir la imagen
    move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . '/' . $nombreImagen);
    // exit;

    $query =    "INSERT INTO banner(titulo, fecha, nombImag, usuario_id)
                VALUES(:titulo, :fecha, :nombreImagen, :usuario_id)";
                    
                $fechaActual = date('Y-m-d');
                $stmt = $conn->prepare($query);
                $stmt->bindParam(":titulo", $titulo, PDO::PARAM_STR);
                $stmt->bindParam(":fecha", $fechaActual, PDO::PARAM_STR);
                $stmt->bindParam(":nombreImagen", $nombreImagen, PDO::PARAM_STR);
                $stmt->bindParam(":usuario_id", $idUsuario, PDO::PARAM_INT);
                
                $resultado = $stmt->execute();

                if($resultado){
                    $mensaje = "Registro de nota creado correctamente";
                }else{
                    $error = "Error, no se pudo crear la nota";
                }
            }
?>
    <div class="row">
        <div class="col-sm-12">
            <?php if(isset($mensaje)): ?>
                <div class="alert alert-success alert-dismissible fade show bg-success shadow" role="alert">
                    <i class="bi bi-check-lg"></i>
                    <strong><?php echo $mensaje;?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <?php if(isset($error)): ?>
                <div class="alert alert-danger alert-dismissible fade show bg-danger shadow" role="alert">
                    <i class="bi bi-exclamation-diamond-fill"></i>
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
                <h3 class="card-title fw-bold">
                    Crear nuevo Banner
                </h3>
            </div>
        </div>
    </div>
<!-- /.card-header -->
<div class="card-body shadow">
    <div class="row">
        <div class="col-12">
            <form role="form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título:</label>
                    <input type="text" id="titulo" name="titulo" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="imagen" class="form-label">Imagen:</label>
                    <input type="file" id="imagen" accept="image/jpeg, image/png" class="form-control" name="imagen">
                </div>
                <div class="d-flex justify-content-end gap-2">
                    <button type="submit" name="registrarBanner" class="btn btn-success fw-semibold shadow text-light">
                        <i class="bi bi-plus-lg"></i>
                        Crear Banner
                    </button>
                    <a href="lista_banner.php" class="btn btn-secondary fw-semibold shadow">
                        <i class="bi bi-box-arrow-left"></i>
                        Regresar
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /.card-body -->

<?php include "includes/footer.php"; ?>

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
