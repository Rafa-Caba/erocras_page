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
                            <div class="titulo text-center text-md-start"><h1>Ero Cras - Admin</h1></div>
                            <div class="contador_visitas">
                                <p class="titulo text-center fs-2 text-md-end">¡Hola <?php echo $usuario_actual; ?>!</p>
                            </div>
                        </div>
                        <nav class="navbar w-100 d-flex">
                            <ul class="nav w-100 nav-pills nav-fill">
                                <li class="nav-item">
                                <a class="nav-link text-black" href="../../index.php">Ero Cras Inicio</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link text-black" href="../../miembros.php">Miembros</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link text-black" href="../../misa-erocras.php">Misa Ero Cras</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link text-black" href="../../nosotros.php">Nosotros</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link text-black" href="../../contact.php">Contacto</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </header>

                <main class="main row d-flex">
                    <section class="sidebar col-12 col-md-2 d-none d-md-block d-flex flex-column align-items-center order-1 order-md-0">
                        <div class="mt-4 mb-4">
                            <img src="../../images/jesusito.jpg" class="img-fluid" alt="...">
                        </div>
                    </section>

                    <section class=" col-12 col-md-8 d-flex flex-column align-items-center order-0 order-md-1 my-3">
                        <div class="galeria w-100 d-flex flex-column justify-content-center py-3 px-3 px-md-5 mt-1">
                            <p class="m-3 text-center fs-1 fw-bold">Panel de Control</p>

                            <div class="panel-titulo d-flex justify-content-center mb-3">
                                <a href="cantos.php" class="btn btn-primary py-1 px-3 me-2">Cantos</a>
                                <a href="galeria.php" class="btn btn-primary py-1 px-3 me-2">Galeria</a>
                                <a href="cerrar.php" class="btn btn-primary py-1 px-3">Cerrar Sesion</a>
                            </div>
                        </div>
                    </section>

<?php require 'footer.php'; ?>