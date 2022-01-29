<?php require 'header.php'; ?>

    <section class="center col-12 col-md-8 d-flex flex-column align-items-center order-0 order-md-1">
        <article class="p-4 container col-md-8">
            <div class="form-canto">
                <h2 class="titulo">Editar Canto</h2>
                <form enctype="multipart/form-data" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="formulario">
                    <input class="form-control mb-3" type="hidden" value="<?php echo $canto['id']; ?>" name="id">
                    <input class="form-control mb-3" type="text" name="titulo" value="<?php echo $canto['titulo']; ?>">
                    <textarea class="form-control mb-3" rows="7" name="canto_texto"><?php echo $canto['canto_texto']; ?></textarea>
                    <input class="form-control mb-3" type="text" name="compositor" value="<?php echo $canto['compositor']; ?>">
                    <input class="form-control mb-3" type="text" name="tipo_de_canto" value="<?php echo $canto['tipo_de_canto']; ?>">

                    <input class="btn btn-primary" type="submit" value="Modificar Canto">
                    <a class="btn btn-primary" href="single_canto.php?id=<?php echo $canto['id']; ?>">Volver</a>
                </form>
            </div>
        </article>
    </section>

<?php require 'footer.php'; ?>