<?php include "includes/header.php";    
    $band = false;
    //Mostrar Registros
    $query =    "SELECT descripcion, fecha, usuario_id, id, titulo
                FROM notas WHERE usuario_id='$idUsuario'";
    if($band) echo"$query";
    
    //Ejecuta la consulta y obtiene el conjunto de resultados.
    $stmt = $conn->query($query);
    
    //Recuperamos todos los registros como un objeto
    $registros = $stmt->fetchAll(PDO::FETCH_OBJ);
    if($band)var_dump($registros);
?>
<div class="card-header">
    <div class="row">
        <div class="col-md-9">
            <h3 class="card-title">Lista de notas</h3>
        </div>
        <div class="col-md-3">
            <a href="crear_nota.php" type="button" class="btn btn-primary btn-xl pull-right w-100 fw-semibold shadow">
                <i class="fa fa-plus"></i> 
                Ingresar nueva nota
            </a>
        </div>
    </div>
</div>
<!-- /.card-header -->
<div class="card-body">
    <table id="tblRegistros" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Título</th>
                <th>Descripción</th>
                <th>Fecha creación</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($registros as $fila) : 
            ?>
                <tr>
                    <td>
                        <?=$fila->id;?>
                    </td>
                    <td>
                        <?=$fila->titulo;?>
                    </td>
                    <td>
                        <?=$fila->descripcion;?>
                    </td>
                    <td>
                        <?=$fila->fecha;?>
                    </td>
                    <td>
                        <a href="editar_nota.php?id=<?php echo $fila->id; ?>" class="btn btn-warning">
                            <i class="fas fa-edit"></i>
                            Editar
                        </a>
                        <a href="borrar_nota.php?id=<?php echo $fila->id; ?>" class="btn btn-danger">
                            <i class="fas fa-trash-alt"></i>
                            Borrar
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include "includes/footer.php" ?>

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