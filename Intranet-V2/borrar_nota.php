<?php include "includes/header.php" ?>
    <?php
        //Validamos si recibimos el ID
        if(isset($_GET["id"])){
            $idNota = $_GET['id'];
        }
        //Obtener los datos de la nota por su id
        $query = "SELECT * FROM notas WHERE id=:id";
        $stmt = $conn->prepare($query);

        //Pasamos las variables a bindParam para evitar inyecciones SQL
        //Llamado por Referencia
        $stmt->bindParam(":id", $idNota, PDO::PARAM_INT);
        $stmt->execute();
        
        $nota = $stmt->fetch(PDO::FETCH_OBJ);

        //?Actualizacion de los valores de la nota
    if (isset($_POST["borrarNota"])) {
            //Sí valida todos los campos
            //Consulta
            $query = "DELETE FROM notas WHERE id=:id";

            //Prepara la consulta
            $stmt = $conn->prepare($query);
            $stmt->bindParam(":id", $idNota, PDO::PARAM_INT);

            //Ejecuta la consulta   
            $resultado = $stmt->execute();
            
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
                    <label for="titulo" class="form-label">Título:</label>
                    <input type="text" name="titulo" 
                    class="form-control" readonly
                    value="<?php if($nota) echo $nota->titulo;?>">
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">
                        Descripción:
                    </label>
                    <textarea class="form-control" name="descripcion" rows="3" readonly>
                    <?php if($nota) echo $nota->descripcion;?>
                    </textarea>
                </div>
                <div class="d-flex justify-content-end gap-2">
                    <button type="submit" name="borrarNota" class="btn btn-danger shadow fw-semibold">
                        <i class="bi bi-trash"></i>
                        Borrar Nota
                    </button>
                    <a href="lista_notas.php" class="btn btn-secondary shadow fw-semibold">
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