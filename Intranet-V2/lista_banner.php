<?php
include "includes/header.php";
include "Funciones/functionSELECT.php";
$RutaImag = "Banner/";
//Llamado de la funcion la cual envia argumentos
$registrosBanner = obtenerRegistros($conn, 'banner', $idUsuario);
?>


<div class="card shadow mx-auto">
    <div class="card-header d-flex align-items-center justify-content-between">
        Banner
        <a href="crear_noticia.php" type="button"
            class="btn btn-primary btn-xl pull-right fw-semibold shadow text-light">
            <i class="fa fa-plus"></i>
            Ingresar nueva noticia
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped caption-top table-bordered">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Fecha</th>
                        <th>Imagen</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($registrosBanner as $fila): ?>
                        <tr>
                            <td>
                                <?= $fila->titulo ?>
                            </td>
                            <td>
                                <?= $fila->fecha ?>
                            </td>
                            <td>
                                <a href="<?= $RutaImag ?><?= $fila->nombImag ?>" class="link-success fw-bold">
                                    <i class="bi bi-image">
                                        <?= $fila->nombImag ?>
                                    </i>
                                </a>
                            </td>
                            <td>
                                <a href="Construccion.php" class="btn btn-warning">
                                    <i class="fas fa-edit"></i>
                                    Editar
                                </a>
                                <a href="borrar_banner.php?id=<?= $fila->id ?>" class="btn btn-danger">
                                    <i class="fas fa-trash-alt"></i>
                                    Borrar
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
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

</body>

</html>