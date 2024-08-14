<?php
    //READ
    include "includes/header.php";
    include "Funciones/functionSELECT.php";
    $RutaImag = "Avisos/";
    //Llamado de la funcion la cual envia argumentos
    $registrosNoticias = obtenerRegistros($conn, 'Avisos', $idUsuario);
?>
    <div class="card-header">
    <div class="row">
        <div class="col-md-9">
            <h3 class="card-title fw-semibold">
                Avisos
            </h3>
        </div>
        <div class="col-md-3">
            <a href="crear_aviso.php" type="button" class="btn btn-primary btn-xl pull-right w-100 fw-semibold shadow text-light">
                <i class="fa fa-plus"></i> 
                Ingresar Nuevo Aviso
            </a>
        </div>
    </div>
</div>
<!-- /.card-header -->
<div class="card-body">
    <table id="tblRegistros" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Título</th>
                <th>Fecha creación</th>
                <th>Imagen</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($registrosNoticias as $fila){
            ?>
                <tr>
                    <td>
                        <?=$fila->titulo?>
                    </td>
                    <td>
                        <?=$fila->fecha?>
                    </td>
                    <td>
                        <a href="<?=$RutaImag?><?=$fila->nombImag?>" class="link-success fw-bold">
                            <i class="bi bi-image">
                                <?=$fila->nombImag?>
                            </i>
                        </a>
                    </td>
                    <td>
                        <a href="editar_noticia.php?id=<?=$fila->id?>" class="btn btn-warning">
                            <i class="fas fa-edit"></i>
                            Editar
                        </a>
                        <a href="borrar_aviso.php?id=<?=$fila->id?>" class="btn btn-danger">
                            <i class="fas fa-trash-alt"></i>
                            Borrar
                        </a>
                    </td>
                </tr>
            <?php
                }
            ?>
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