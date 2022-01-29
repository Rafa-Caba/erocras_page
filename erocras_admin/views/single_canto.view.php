<?php require 'header.php'; ?>

    <section class="center col-12 col-md-8 d-flex flex-column align-items-center order-0 order-md-1">
        <div class="canto p-3 w-100 text-center my-3">
            <div>
                <h2 class="titulo"><?php echo $canto['titulo']; ?></h2>
                <p class="fst-italic"><?php echo $canto['tipo_de_canto']; ?></p>
                <p class="d-block d-md-none text-start mb-3 lh-base fs-6"><?php echo nl2br($canto['canto_texto']); ?></p>
                <p class="d-none d-md-block text-start mb-3 ms-5 lh-base fs-6 fs-3"><?php echo nl2br($canto['canto_texto']); ?></p>
                <p class="fst-italic mb-3 fw-bolder"><?php echo $canto['compositor']; ?></p>

                <div class="m-0">
                    <a class="btn btn-primary" href="editar_canto.php?id=<?php echo $canto['id']; ?>">Editar</a>
                    <a class="btn btn-primary" href="cantos.php">Volver</a>
                    <a class="btn btn-primary" href="borrar_canto.php?id=<?php echo $canto['id']; ?>">Borrar</a>
                </div>  
            </div> 
        </div>
    </section>

<?php require 'footer.php'; ?>