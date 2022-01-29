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
                <section class="center col-12 d-flex flex-column justify-content-center align-content-center order-0 order-md-1">
                    
                    <div class="form-contenedor container col-md-8 py-5 my-5 mx-auto d-flex flex-column align-items-center justify-content-center">
                        <p class="text-center fs-1">Registrate</p>

                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="container col-md-5" name="login">
                            <div class="d-flex align-items-center justify-content-center mb-3">
                                <i class="icono me-2 fs-2 fa fa-user"></i><input type="text" name="usuario" class="form-control" placeholder="Usuario">
                            </div>     
                            <div class="d-flex align-items-center justify-content-center mb-3">
                                <i class="icono me-2 fs-2 fa fa-lock"></i><input type="password" name="password" class="form-control" placeholder="Contraseña">
                            </div>   
                            <div class="d-flex align-items-center justify-content-center mb-3">
                                <i class="icono me-2 fs-2 fa fa-lock"></i><input type="password" name="password2" class="form-control" placeholder="Repetir contraseña">
                                <i class="submit-btn icono ms-2 fs-2 fa fa-arrow-right" onclick="login.submit()"></i>
                            </div>  
                            
                            <?php if (!empty($errores)) : ?>
                                <div class="error">
                                    <ul>
                                        <?php echo $errores; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        </form>

                        <p class="d-flex flex-column">
                            ¿ Ya tienes cuenta ?
                            <a class="derecha" href="login.php">Iniciar Sesión</a>
                        </p>
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