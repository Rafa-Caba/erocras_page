<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../../font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../css/estilos.css">
        <title>Ero Cras Oficial - Admin</title>
    </head>
    <body>
        <div class="container">
            <header class="row">
                <div class="titulo-nav px-0 col-12 d-flex flex-column">
                    <div class="titulo mx-5 text-black d-flex flex-column flex-md-row justify-content-md-between align-items-md-center">
                        <div class="titulo text-center text-md-start mt-3">
                            <h1 class="d-none d-md-block">Ero Cras Oficial - Admin</h1>
                            <h1 class="d-block d-md-none">Ero Cras Oficial<br>Admin</h1>
                        </div>
                    </div>
                </div>
            </header>

            <main class="row">
                <section>
                    <div class="form-contenedor my-5 mx-auto col-12 col-md-8 d-flex align-items-center justify-content-center">
                        <article class="my-5 mx-auto w-50 d-flex flex-column align-items-center justify-content-center">
                            <h2 class="titulo">Iniciar Sesion</h2>
                            <form class="w-100 mt-4" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                                <input class="mb-3 form-control" type="text" name="usuario" placeholder="Usuario">
                                <input class="mb-3 form-control" name="password" placeholder="Contraseña">

                                <button type="submit" class="form-control btn btn-primary mb-3 px-4">Login</button>
                            </form>

                            <p>
                                ¿ No tienes cuenta ?
                                <a class="derecha" href="registrate.php">Regístrate</a>
                            </p>
                        </article>
                    </div>
                </section>
            </main>

            <footer class="footer row">
                <div class="footer my-2 d-flex flex-column flex-md-row justify-content-between">
                    <div class="copyright">
                        <p class="text-black-50">Creada por Rafael Cabanillas - 2022</p>
                    </div>
                    <div class="redes">
                        <ul class="nav w-100 order-1 d-flex justify-content-center">
                            <li class="nav-item">
                            <a class="nav-link" href="https://www.facebook.com/eroCrasCoro/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="https://instagram.com/ero.cras?utm_medium=copy_link"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="https://youtube.com/channel/UCjh7iTV-ddkSxaLi7A1FJgA"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="../contact.php"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>  
    </body>
</html>