<?php 
    include "includes/header.php";    
    include "Funciones/functionSELECT.php";
    // Funciones que recibe argumentos.
    $registroNotas = obtenerRegistros($conn, 'notas', $idUsuario);
?>

<div class="card-header">
    <div class="row">
        <div class="col-md-9">
            <h3 class="card-title">Noticias</h3>
        </div>
        <div class="col-md-3">
            <a href="crear_nota.php" class="btn btn-primary btn-xl w-100 fw-semibold shadow text-light">
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
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($registroNotas as $fila): ?> 
                <tr>
                    <td><?=$fila->id;?></td>
                    <td><?=$fila->titulo;?></td>
                    <td>
                        <?=strlen($fila->descripcion) > 160 ? substr($fila->descripcion, 0, 160) . '...' : $fila->descripcion;?>
                    </td>
                    <td>
                        <?=$fila->fecha;?>
                    </td>
                    <td>
                        <a href="editar_nota.php?id=<?=$fila->id;?>" 
                        class="btn btn-warning">
                        <i class="bi bi-pencil-fill"></i>
                            Editar
                        </a>
                        <a href="borrar_nota.php?id=<?=$fila->id;?>" 
                        class="btn btn-danger">
                            <i class="bi bi-trash-fill"></i>
                            Borrar
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include "includes/footer.php" ?>

<!-- JavaScript for DataTables -->
<script>
    $(document).ready(function() {
        $('#tblRegistros').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.11.5/i18n/Spanish.json"
            }
        });
    });
</script>
