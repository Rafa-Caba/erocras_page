<?php require 'header.php'; ?>

    <section class="center col-12 col-md-8 d-flex flex-column align-items-center order-0 order-md-1">
        <article class="container col-md-8 p-4">
            <div class="form-canto">
                <h2 class="titulo mb-4">Nuevo Canto</h2>
                <form enctype="multipart/form-data" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="d-grid gap-3">
                    <input class="form-control"  type="text" name="titulo" placeholder="Titulo del Canto">
                    <textarea class="form-control" rows="10" name="canto_texto" placeholder="Texto del Canto"></textarea>
                    <input class="form-control"  type="text" name="tipo_de_canto" placeholder="Tipo de canto">
                    <input class="form-control"  type="text" name="compositor" placeholder="Compositor">

                    <Button  class="btn btn-primary form-control" type="submit">Guardar Canto</Button>
                    <a href="cantos.php" class="btn btn-info">Cancelar</a>
                </form>
            </div>
        </article>
    </section>

<?php require 'footer.php'; ?>