<?php require 'header.php'; ?>

    <section class="center col-12 col-md-8 d-flex flex-column align-items-center order-0 order-md-1">
        <article class="container col-md-8 p-4">
            <div class="form-canto">
                <h2 class="titulo mb-4">Nuevo Imagen</h2>
                <form enctype="multipart/form-data" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="d-grid gap-2">
                    <input class="form-control" type="text" name="titulo" placeholder="Titulo de la Image">
                    <input class="form-control" type="file" name="thumb">

                    <Button  class="btn btn-primary" type="submit">Guardar Imagen</Button>
                    <a href="galeria.php" class="btn btn-info">Cancelar</a>
                </form>
            </div>
        </article>
    </section>

<?php require 'footer.php'; ?>