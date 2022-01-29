<?php require 'header.php'; ?>

    <section class="col-12 col-md-8 d-flex flex-column align-items-center order-0 order-md-1 my-3">
        <div class="galeria w-100 d-flex flex-column justify-content-center px-3 px-md-5">
            <div class="d-flex flex-column align-items-center w-100 my-3">
                <p class="fw-bold m-0 fs-1">Cantos Ero Cras</p>
                <div class="botones mb-3">
                    <a href="index.php" class="btn btn-primary px-3 m-2">Inicio</a>
                    <a href="nuevo.php" class="btn btn-primary me-2">Nuevo Canto</a>
                </div>
            </div>
            
            <div class="cantos-contenedor mb-3">
                <div class="accordion" id="accordionCantos">

                    <!-- Canto Entrada -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Entrada
                        </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionCantos">
                            <div class="accordion-body">
   
                                <!-- Agregamos a inner acordeon para el tipo de canto -->
                                <?php foreach ($cantos as $canto): ?>

                                    <?php if ($canto['tipo_de_canto'] == 'Entrada') : ?>
                                        <div class="accordion" id="accordionEntrada">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header text-center" id="heading<?php echo $canto['id']; ?>">
                                                <button class="accordion-button fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $canto['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $canto['id']; ?>">
                                                    <?php echo $canto['titulo']; ?>
                                                </button>
                                                </h2>
                                                <div id="collapse<?php echo $canto['id']; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $canto['id']; ?>" data-bs-parent="#accordionCanto">
                                                <div class="accordion-body">
                                                    <p><a class="canto-single-link fw-bolder fs-4 text-decoration-none" href="single_canto.php?id=<?php echo $canto['id']; ?>">- <?php echo $canto['titulo']; ?> -</a></p>
                                                    <p class="text-start"><?php echo nl2br($canto['canto_texto']); ?></p>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                <?php endforeach; ?>
                                
                            </div>
                        </div>
                    </div>
                    <!-- Canto Kyie -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Kyrie
                        </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionCantos">
                            <div class="accordion-body">

                                                            
                                <!-- Agregamos a inner acordeon para el tipo de canto -->
                                <?php foreach ($cantos as $canto): ?>

                                    <?php if ($canto['tipo_de_canto'] == 'Kyrie') : ?>
                                        <div class="accordion" id="accordionEntrada">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header text-center" id="heading<?php echo $canto['id']; ?>">
                                                <button class="accordion-button fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $canto['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $canto['id']; ?>">
                                                    <?php echo $canto['titulo']; ?>
                                                </button>
                                                </h2>
                                                <div id="collapse<?php echo $canto['id']; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $canto['id']; ?>" data-bs-parent="#accordionCanto">
                                                <div class="accordion-body">
                                                    <p><a class="canto-single-link fw-bolder fs-4 text-decoration-none" href="single_canto.php?id=<?php echo $canto['id']; ?>">- <?php echo $canto['titulo']; ?> -</a></p>
                                                    <p class="text-start"><?php echo nl2br($canto['canto_texto']); ?></p>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                <?php endforeach; ?>
                                
                            </div>
                        </div>
                    </div>
                    <!-- Canto Gloria -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Gloria
                        </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionCantos">
                            <div class="accordion-body">
                                
                                <!-- Agregamos a inner acordeon para el tipo de canto -->
                                <?php foreach ($cantos as $canto): ?>
                
                                    <?php if ($canto['tipo_de_canto'] == 'Gloria') : ?>
                                        <div class="accordion" id="accordionEntrada">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header text-center" id="heading<?php echo $canto['id']; ?>">
                                                <button class="accordion-button fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $canto['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $canto['id']; ?>">
                                                    <?php echo $canto['titulo']; ?>
                                                </button>
                                                </h2>
                                                <div id="collapse<?php echo $canto['id']; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $canto['id']; ?>" data-bs-parent="#accordionCanto">
                                                <div class="accordion-body">
                                                    <p><a class="canto-single-link fw-bolder fs-4 text-decoration-none" href="single_canto.php?id=<?php echo $canto['id']; ?>">- <?php echo $canto['titulo']; ?> -</a></p>
                                                    <p class="text-start"><?php echo nl2br($canto['canto_texto']); ?></p>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                <?php endforeach; ?>
                
                            </div>
                        </div>
                    </div>

                    <!-- Canto Aleluya -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                            Aleluya
                        </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionCantos">
                            <div class="accordion-body">
                                
                                <!-- Agregamos a inner acordeon para el tipo de canto -->
                                <?php foreach ($cantos as $canto): ?>
 
                                    <?php if ($canto['tipo_de_canto'] == 'Aleluya') : ?>
                                        <div class="accordion" id="accordionEntrada">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header text-center" id="heading<?php echo $canto['id']; ?>">
                                                <button class="accordion-button fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $canto['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $canto['id']; ?>">
                                                    <?php echo $canto['titulo']; ?>
                                                </button>
                                                </h2>
                                                <div id="collapse<?php echo $canto['id']; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $canto['id']; ?>" data-bs-parent="#accordionCanto">
                                                <div class="accordion-body">
                                                    <p><a class="canto-single-link fw-bolder fs-4 text-decoration-none" href="single_canto.php?id=<?php echo $canto['id']; ?>">- <?php echo $canto['titulo']; ?> -</a></p>
                                                    <p class="text-start"><?php echo nl2br($canto['canto_texto']); ?></p>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                
                                <?php endforeach; ?>
                
                            </div>
                        </div>
                    </div>

                    <!-- Canto Dones -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Presentación de Dones
                        </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionCantos">
                            <div class="accordion-body">

                                <!-- Agregamos a inner acordeon para el tipo de canto -->
                                <?php foreach ($cantos as $canto): ?>
 
                                    <?php if ($canto['tipo_de_canto'] == 'Presentacion de Dones') : ?>
                                        <div class="accordion" id="accordionEntrada">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header text-center" id="heading<?php echo $canto['id']; ?>">
                                                <button class="accordion-button fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $canto['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $canto['id']; ?>">
                                                    <?php echo $canto['titulo']; ?>
                                                </button>
                                                </h2>
                                                <div id="collapse<?php echo $canto['id']; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $canto['id']; ?>" data-bs-parent="#accordionCanto">
                                                <div class="accordion-body">
                                                    <p><a class="canto-single-link fw-bolder fs-4 text-decoration-none" href="single_canto.php?id=<?php echo $canto['id']; ?>">- <?php echo $canto['titulo']; ?> -</a></p>
                                                    <p class="text-start"><?php echo nl2br($canto['canto_texto']); ?></p>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                
                                <?php endforeach; ?>

                            </div>
                        </div>
                    </div>

                    <!-- Canto Santo -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Santo
                        </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionCantos">
                            <div class="accordion-body">

                                <!-- Agregamos a inner acordeon para el tipo de canto -->
                                <?php foreach ($cantos as $canto): ?>
 
                                    <?php if ($canto['tipo_de_canto'] == 'Santo') : ?>
                                        <div class="accordion" id="accordionEntrada">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header text-center" id="heading<?php echo $canto['id']; ?>">
                                                <button class="accordion-button fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $canto['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $canto['id']; ?>">
                                                    <?php echo $canto['titulo']; ?>
                                                </button>
                                                </h2>
                                                <div id="collapse<?php echo $canto['id']; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $canto['id']; ?>" data-bs-parent="#accordionCanto">
                                                <div class="accordion-body">
                                                    <p><a class="canto-single-link fw-bolder fs-4 text-decoration-none" href="single_canto.php?id=<?php echo $canto['id']; ?>">- <?php echo $canto['titulo']; ?> -</a></p>
                                                    <p class="text-start"><?php echo nl2br($canto['canto_texto']); ?></p>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                
                                <?php endforeach; ?>

                            </div>
                        </div>
                    </div>

                    <!-- Canto Cordero -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                            Cordero de Dios
                        </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionCantos">
                            <div class="accordion-body">

                                <!-- Agregamos a inner acordeon para el tipo de canto -->
                                <?php foreach ($cantos as $canto): ?>
 
                                    <?php if ($canto['tipo_de_canto'] == 'Cordero de Dios') : ?>
                                        <div class="accordion" id="accordionEntrada">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header text-center" id="heading<?php echo $canto['id']; ?>">
                                                <button class="accordion-button fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $canto['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $canto['id']; ?>">
                                                    <?php echo $canto['titulo']; ?>
                                                </button>
                                                </h2>
                                                <div id="collapse<?php echo $canto['id']; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $canto['id']; ?>" data-bs-parent="#accordionCanto">
                                                <div class="accordion-body">
                                                    <p><a class="canto-single-link fw-bolder fs-4 text-decoration-none" href="single_canto.php?id=<?php echo $canto['id']; ?>">- <?php echo $canto['titulo']; ?> -</a></p>
                                                    <p class="text-start"><?php echo nl2br($canto['canto_texto']); ?></p>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                
                                <?php endforeach; ?>

                            </div>
                        </div>
                    </div>

                    <!-- Canto Comunion -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEight">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            Comunión
                        </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionCantos">
                            <div class="accordion-body">

                                <!-- Agregamos a inner acordeon para el tipo de canto -->
                                <?php foreach ($cantos as $canto): ?>
 
                                    <?php if ($canto['tipo_de_canto'] == 'Comunion') : ?>
                                        <div class="accordion" id="accordionEntrada">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header text-center" id="heading<?php echo $canto['id']; ?>">
                                                <button class="accordion-button fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $canto['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $canto['id']; ?>">
                                                    <?php echo $canto['titulo']; ?>
                                                </button>
                                                </h2>
                                                <div id="collapse<?php echo $canto['id']; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $canto['id']; ?>" data-bs-parent="#accordionCanto">
                                                <div class="accordion-body">
                                                    <p><a class="canto-single-link fw-bolder fs-4 text-decoration-none" href="single_canto.php?id=<?php echo $canto['id']; ?>">- <?php echo $canto['titulo']; ?> -</a></p>
                                                    <p class="text-start"><?php echo nl2br($canto['canto_texto']); ?></p>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                
                                <?php endforeach; ?>

                            </div>
                        </div>
                    </div>

                    <!-- Canto Salida -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingNine">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                            Salida
                        </button>
                        </h2>
                        <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionCantos">
                            <div class="accordion-body">

                                <!-- Agregamos a inner acordeon para el tipo de canto -->
                                <?php foreach ($cantos as $canto): ?>
 
                                    <?php if ($canto['tipo_de_canto'] == 'Salida') : ?>
                                        <div class="accordion" id="accordionEntrada">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header text-center" id="heading<?php echo $canto['id']; ?>">
                                                <button class="accordion-button fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $canto['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $canto['id']; ?>">
                                                    <?php echo $canto['titulo']; ?>
                                                </button>
                                                </h2>
                                                <div id="collapse<?php echo $canto['id']; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $canto['id']; ?>" data-bs-parent="#accordionCanto">
                                                <div class="accordion-body">
                                                    <p><a class="canto-single-link fw-bolder fs-4 text-decoration-none" href="single_canto.php?id=<?php echo $canto['id']; ?>">- <?php echo $canto['titulo']; ?> -</a></p>
                                                    <p class="text-start"><?php echo nl2br($canto['canto_texto']); ?></p>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                
                                <?php endforeach; ?>

                            </div>
                        </div>
                    </div>
                        
                </div>
            </div>

        </div>
    </section>

<?php require 'footer.php'; ?>