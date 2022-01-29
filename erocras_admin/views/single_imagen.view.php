<?php require 'header.php'; ?>

    <section class="col-12 col-md-8 d-flex flex-column align-items-center order-0 order-md-1 my-3">
        <div class="galeria d-flex flex-column px-3 align-items-center">
            <div class="contenedor b-flex justify-content-center pt-3 mb-3">
                <h2 class="titulo">Imagen: <?php echo (!empty($imagen['titulo_imagen'])) ? $imagen['titulo_imagen'] : $imagen['imagen_nombre']; ?></h2>
            </div>
            <div class="contenedor w-75">
                <div class="imagen d-flex flex-column mb-3">
                    <img class="img-fluid" src="../../images/<?php echo $imagen['imagen_nombre']; ?>" alt="<?php echo $imagen['titulo_imagen']; ?>">
                    <div class="imagen_options d-flex justify-content-center mt-3">
                        <a href="galeria.php" class="btn btn-primary fs-4 mt-3 me-3">Regresar</a>
                        <a class="btn btn-primary mt-3 fs-4 px-4" href="borrar_imagen.php?id=<?php echo $imagen['id']; ?>">Borrar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php require 'footer.php'; ?>