<?php include "includes/header.php" ?>
<?php
//Validamos si recibimos el ID
if (isset($_GET["id"])) {
    $idNota = $_GET['id'];
}
//Obtener los datos de la nota por su id
$query = "SELECT * FROM notas WHERE id=:id";
$stmt = $conn->prepare($query);

//!Pasamos las variables a bindParam para evitar inyecciones SQL
//?Llamado por Referencia
$stmt->bindParam(":id", $idNota, PDO::PARAM_INT);
$stmt->execute();
$nota = $stmt->fetch(PDO::FETCH_OBJ);

//?Actualizacion de los valores de la nota
if (isset($_POST["editarNota"])) {
    //Obtener Valores
    $titulo = $_POST["titulo"];
    $descripcion = $_POST["descripcion"];

    //Validamos si esta vacio
    if (empty($titulo) || empty($descripcion)) {
        $error = "Error, algunos campos obligatorios están vacios";
    } else {
        //Sí valida todos los campos
        $query = "UPDATE notas SET titulo=:titulo, descripcion=:descripcion WHERE id=:id";
        $stmt = $conn->prepare($query);

        $stmt->bindParam(":titulo", $titulo, PDO::PARAM_STR);
        $stmt->bindParam(":descripcion", $descripcion, PDO::PARAM_STR);
        $stmt->bindParam(":id", $idNota, PDO::PARAM_INT);

        $resultado = $stmt->execute();
        if ($resultado) {
            $mensaje = "Registro de nota editado correctamente";
        } else {
            $error = "Error, no se pudo editar la nota";
        }
    }
}
?>
<div class="row">
    <div class="col-sm-12">
        <?php if (isset($mensaje)) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
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
            <h3 class="card-title">Editar una nota</h3>
        </div>
    </div>
</div>
<!-- /.card-header -->
<div class="card-body">
    <div class="row">
        <div class="col-12">
            <form role="form" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título:</label>
                    <input type="text" name="titulo" class="form-control" value="<?php if ($nota) echo $nota->titulo; ?>">
                </div>
                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción:</label>
                    <textarea class="form-control" name="descripcion" rows="3">
                    <?php if ($nota) echo $nota->descripcion; ?>
                    </textarea>
                </div>
                <button type="submit" name="editarNota" class="btn btn-primary">
                    <i class="fas fa-cog"></i>
                    Editar Nota
                </button>
                <a href="lista_notas.php" class="btn btn-secondary">
                    <i class="bi bi-box-arrow-right"></i>
                    Regresar
                </a>
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