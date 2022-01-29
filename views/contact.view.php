<?php require 'header.php'; ?>

    <section class="center col-12 col-md-8 d-flex flex-column align-items-center order-0 order-md-1">
        <p class="text-center fs-2">Contacto</p>

        <div class="form mb-3 w-75">
            <form action="">
                <div class="mb-3">
                    <label class="form-label" for="correo">Correo Electrónico</label>
                    <input type="text" class="form-control" id="correo" aria-describedby="ayuda-correo">
                    <div id="ayuda-correo" class="form-text">
                        Te enviaremos un mensaje de confirmación
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="mensaje">Mensaje</label>
                    <textarea class="form-control" name="mensaje" id="mensaje"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Enviar mensaje</button>
            </form>
        </div>
    </section>

<?php require 'footer.php'; ?>