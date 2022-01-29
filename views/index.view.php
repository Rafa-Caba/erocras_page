<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/estilos.css">
        <title>Ero Cras Oficial</title>
    </head>
    <body>
        <div class="container">
            <header class="row">
                <div class="titulo-nav px-0 col-12 d-flex flex-column">
                    <div class="titulo mx-5 text-black d-flex flex-column flex-md-row justify-content-md-between align-items-md-center">
                        <div class="titulo text-center text-md-start"><h1>Ero Cras Oficial</h1></div>
                    </div>

                    <nav class="navbar w-100 d-flex">
                        <ul class="nav w-100 nav-pills nav-fill">
                            <li class="nav-item">
                            <a class="nav-link text-black" href="index.php">Ero Cras Inicio</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link text-black" href="miembros.php">Miembros</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link text-black" href="misa-erocras.php">Misa Ero Cras</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link text-black" href="nosotros.php">Nosotros</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link text-black" href="contact.php">Contacto</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </header>
            

            <main class="main row d-flex">
                <section class="sidebar col-12 col-md-2 d-flex flex-column align-items-center order-2 order-md-0">
                    <div class="col-9 my-5">
                        <img src="images/jesusito.jpg" class="img-fluid" alt="Jesusito">
                    </div>
                </section>

                <section class="center col-12 col-md-8 d-flex flex-column align-items-center order-0 order-md-1">
                    <div class="meaning w-100 d-flex flex-column align-items-center">
                        <h2 class="d-none d-md-block">Ero Cras:</h2>
                        <div class="d-flex flex-wrap flex-lg-nowrap flex-column flex-md-row justify-content-evenly align-items-center">
                            <p  class="border-end border-start border-2">Sabiduría</p>
                            <p  class="border-end border-start border-2">Adonai</p>
                            <p  class="border-end border-start border-2">Renuevo del tronco de Jesé</p>
                            <p  class="border-end border-start border-2">Llave de David</p>
                            <p  class="border-end border-start border-2">Sol - Resplandor de eterna Luz</p>
                            <p  class="border-end border-start border-2">Rey de las naciones</p>
                            <p  class="border-end border-start border-2">Emmanuel</p>
                        </div>
                    </div>
                    <div class="images-carousel">
                        <div class="carousel slide carousel-fade" id="mi-carousel" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="carousel-caption">
                                        <h5><?php echo $imagenes[0]['titulo_imagen']; ?></h5>
                                    </div>
                                    <img class="img-fluid" src="images/<?php echo $imagenes[0]['imagen_nombre']; ?>" alt="">
                                </div>
                                <div class="carousel-item">
                                    <div class="carousel-caption">
                                        <h5><?php echo $imagenes[1]['titulo_imagen']; ?></h5>
                                    </div>
                                    <img class="img-fluid" src="images/<?php echo $imagenes[1]['imagen_nombre']; ?>" alt="">
                                </div>
                                <div class="carousel-item">
                                    <div class="carousel-caption">
                                        <h5><?php echo $imagenes[2]['titulo_imagen']; ?></h5>
                                    </div>
                                    <img class="img-fluid" src="images/<?php echo $imagenes[2]['imagen_nombre']; ?>" alt="">
                                </div>
                                <div class="carousel-item active">
                                    <div class="carousel-caption">
                                        <h5><?php echo $imagenes[3]['titulo_imagen']; ?></h5>
                                    </div>
                                    <img class="img-fluid" src="images/<?php echo $imagenes[3]['imagen_nombre']; ?>" alt="">
                                </div>
                                <div class="carousel-item">
                                    <div class="carousel-caption">
                                        <h5><?php echo $imagenes[4]['titulo_imagen']; ?></h5>
                                    </div>
                                    <img class="img-fluid" src="images/<?php echo $imagenes[4]['imagen_nombre']; ?>" alt="">
                                </div>
                                <div class="carousel-item">
                                    <div class="carousel-caption">
                                        <h5><?php echo $imagenes[5]['titulo_imagen']; ?></h5>
                                    </div>
                                    <img class="img-fluid" src="images/<?php echo $imagenes[5]['imagen_nombre']; ?>" alt="">
                                </div>
                            </div>

                            <button class="carousel-control-prev" 
                                type="button" 
                                data-bs-target="#mi-carousel"
                                data-bs-slide="prev"    
                            >
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Anterior</span>
                            </button>

                            <button class="carousel-control-next" 
                                type="button" 
                                data-bs-target="#mi-carousel"
                                data-bs-slide="next"    
                            >
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Siguiente</span>
                            </button>

                            <div class="carousel-indicators">
                                <button type="button"
                                    class="active"
                                    data-bs-target="#mi-carousel"
                                    data-bs-slide-to="0"
                                    aria-label="Slide 1"
                                ></button>

                                <button type="button"
                                    data-bs-target="#mi-carousel"
                                    data-bs-slide-to="1"
                                    aria-label="Slide 2"
                                ></button>

                                <button type="button"
                                    data-bs-target="#mi-carousel"
                                    data-bs-slide-to="2"
                                    aria-label="Slide 3"
                                ></button>
                                <button type="button"
                                    class="active"
                                    data-bs-target="#mi-carousel"
                                    data-bs-slide-to="3"
                                    aria-label="Slide 4"
                                ></button>

                                <button type="button"
                                    data-bs-target="#mi-carousel"
                                    data-bs-slide-to="4"
                                    aria-label="Slide 5"
                                ></button>

                                <button type="button"
                                    data-bs-target="#mi-carousel"
                                    data-bs-slide-to="5"
                                    aria-label="Slide 6"
                                ></button>
                            </div>
                        </div>
                    </div>
                </section>

<?php require 'footer.php'; ?>