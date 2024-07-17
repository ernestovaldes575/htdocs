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
?>
<div class="row">
    <div class="col-sm-12">
        <h4 class="bg-success text-white">mensaje</h4>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <h4 class="bg-danger text-white">Error</h4>
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
                <button type="submit" name="borrarNota" class="btn btn-primary"><i class="fas fa-cog"></i> Borrar Nota</button>
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