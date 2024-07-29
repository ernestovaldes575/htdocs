<?php
    include "includes/header.php";
    if(isset($_GET["id"])){
        $idNota = $_GET['id'];
        echo("ID:$idNota");
    }
    //?Obtenemos los datos de las noticias por su ID
    $query = "SELECT * FROM noticias WHERE id=:id";
    $stmt = $conn->prepare($query);

    $stmt->bindParam(":id", $idNota, PDO::PARAM_INT);
    $stmt->execute();
    $noticia = $stmt->fetch(PDO::FETCH_OBJ);
    
    if(isset($_POST["editarNoticia"])){
        
    $titulo = $_POST["titulo"];
    $descripcion = $_POST["descripcion"];
    //Obtener el nombre original del Archivo
    $imagen = $_FILES["imagen"]["name"];
    //Obtener la ruta temporal del archivo en el servidor
    $imagenTmp = $_FILES["imagen"]["tmp_name"];
    //Obtener el codigo de error de la subida del archivo
    $errorArchivo = $_FILES["imagen"]["error"];
    
    // Validar si está vacío
    if(empty($titulo) || empty($descripcion) || empty($imagen)){
        $error = "¡Error, algunos datos son obligatorios!";
    }else{
        // Verificar errores de subida de archivos
        if($errorArchivo != UPLOAD_ERR_OK) {
            $error = "Error en la subida del archivo: ".$errorArchivo;
        }else{
            //Mover el archivo subido a una carpeta en el servidor
            //Asegúrate de que esta carpeta exista y tenga permisos adecuados
            $carpetaDestino = "ImagenNoticias/"; 
            if(!file_exists($carpetaDestino)){
                mkdir($carpetaDestino, 0777, true);
            }
            $rutaImagen = $carpetaDestino . basename($imagen);
            
            if (move_uploaded_file($imagenTmp, $rutaImagen)) {
                // Cuando la validación es correcta
                $query =   "UPDATE  noticias SET titulo=:titulo,descripcion=:descripcion,      
                            nomb_imag=:nomb_imag WHERE id=:id";
                $stmt = $conn->prepare($query);

                $stmt->bindParam(":titulo", $titulo, PDO::PARAM_STR);
                $stmt->bindParam(":descripcion", $descripcion, PDO::PARAM_STR);
                $stmt->bindParam(":nomb_imag", $imagen, PDO::PARAM_STR);
                $stmt->bindParam(":id", $idNota, PDO::PARAM_INT);
                
                $resultado = $stmt->execute();
                if($resultado){
                    $mensaje = "Registro de nota creado correctamente";
                }else{
                    $error = "Error, no se pudo crear la nota";
                }
            }
        }
    }
}
?>
<div class="row">
    <div class="col-sm-12">
        <?php if (isset($mensaje)) : ?>
            <div class="alert alert-success alert-dismissible fade show bg-success" role="alert">
                <i class="bi bi-check-lg"></i>
                <strong><?php echo $mensaje; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
    </div>
</div>

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
            <h3 class="fw-bold card-title">Editar una nota</h3>
        </div>
    </div>
</div>
<!-- /.card-header -->
<div class="card-body shadow">
    <div class="row">
        <div class="col-12">
            <form role="form" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título:</label>
                    <input type="text" name="titulo" class="form-control" 
                    value="<?php if ($noticia) echo $noticia->titulo; ?>">
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción:</label>
                    <textarea class="form-control" name="descripcion" rows="3">
                    <?php if($noticia) echo $noticia->descripcion; ?>
                    </textarea>
                </div>
                <div class="mb-3">
                    <label for="imagen" class="form-label">Imagen:</label>
                    <input type="file" id="imagen" accept="image/jpeg, image/png" class="form-control" 
                    name="imagen" 
                    value="<?php if ($noticia) echo $noticia->nomb_imag;?>">
                </div>
                <div class="d-flex justify-content-end gap-2">
                    <button type="submit" name="editarNoticia" class="btn btn-primary fw-semibold shadow">
                        <i class="bi bi-pencil-fill"></i>
                        Editar Nota
                    </button>
                    <a href="lista_noticia.php" class="btn btn-secondary fw-semibold shadow">
                        <i class="bi bi-box-arrow-right"></i>
                        Regresar
                    </a>
                </div>
            </form>
        </div>
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