<main class="contenedor">
    <div class="contenedor-centrar">
        <article class="Noticias-Grid">
            <?php
            include($_SERVER['DOCUMENT_ROOT'].'../../htdocs/IntranetV3/conexion_sqlserver.php');
                $query = "SELECT * FROM noticias LIMIT 3;";
                $stmt = $conn->query($query);
                $registros = $stmt->fetchAll(PDO::FETCH_OBJ);
                $RutaImag = "../../IntranetV3/imagenes/";

                foreach ($registros as $fila):
                    $titulo = $fila->titulo;
                    $descripcion = $fila->descripcion;
                    $imagen = $fila->nomb_imag;
                
                    // Limitar la descripción a 160 caracteres
                    if (mb_strlen($descripcion) > 150) {
                        $descripcion = mb_substr($descripcion, 0, 160) . '...';
                    }
            ?>
            <div class="card-contenido">
                <div class="img__not">
                    <img src="<?=$RutaImag?><?=$fila->nomb_imag?>" alt="Not1">
                </div>
                <div class="card__Not">
                    <a href="#" class="titulo">
                        <span>
                            <?=$fila->titulo?>
                        </span>
                    </a>
                    <p class="text-contenido">
                        <?=$fila->descripcion?>
                    </p>
                    <a href="" class="action">
                        Más
                    </a>
                    </div>
                </div>
                <?php
                endforeach;
                ?>
            </article>
        </div>
    </main>