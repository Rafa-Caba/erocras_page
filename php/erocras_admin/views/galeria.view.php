<?php require 'header.php'; ?>

    <section class="col-12 col-md-8 d-flex flex-column align-items-center order-0 order-md-1 py-3 mb-4">
        <div class="galeria d-flex flex-column px-3 align-items-center">
            <div class="botones-titulo d-flex flex-column align-items-center w-100 my-3">
                <h2 class="mt-3">Galeria Ero Cras</h2>
                <div class="botones mb-3">
                    <a href="index.php" class="btn btn-primary me-2">Inicio</a>
                    <a href="nuevo_foto.php" class="btn btn-primary me-2">Nueva Imagen</a>
                </div>
            </div>

            <div class="galeria w-100 mt-3 d-flex flex-fill flex-column flex-md-row flex-wrap align-items-center justify-content-around">
                <div class="container d-flex flex-fill flex-column flex-md-row flex-wrap align-items-center justify-content-around">
                    <?php foreach ($imagenes as $imagen) : ?>

                        <div class="col-10 col-md-3 flex-fill align-items-center mx-3 mb-3 justify-content-around">
                            <a href="single_imagen.php?id=<?php echo $imagen['id']; ?>">
                                <img class="img-fluid mb-1" src="../../../images/<?php echo $imagen['imagen_nombre']; ?>" alt="<?php echo $imagen['titulo_imagen']; ?>">
                            </a>
                            <p class="fw-bolder"><?php echo $imagen['titulo_imagen']; ?></p>
                        </div>

                    <?php endforeach;?>
                </div>
            </div>
            <div class="mb-3">
                <?php if ($pagina_actual > 1) : ?>
                    <a href="galeria.php?p=<?php echo $pagina_actual - 1; ?>" class="izquierda"><i class="fa fa-long-arrow-left"></i> Pagina Anterior</a>
                <?php endif; ?>

                <?php if ($total_paginas != $pagina_actual) : ?>
                    <a href="galeria.php?p=<?php echo $pagina_actual + 1; ?>" class="derecha">Pagina Siguiente <i class="fa fa-long-arrow-right"></i></a>
                <?php endif; ?>
            </div>
        </div>
    </section>

<?php require 'footer.php'; ?>