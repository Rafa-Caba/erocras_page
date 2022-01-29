<?php require 'header.php'; ?>

    <section class="center col-12 col-md-8 d-flex flex-column align-items-center order-0 order-md-1">
        <div class="galeria w-100 m-3 p-4">
            <p class="fs-2 fw-bold">Cantos - Misa</p>

            <div class="menu-cantos w-100 d-flex flex-row flex-wrap justify-content-around">

                <div class="Entrada p-0 mb-3 me-1">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cantoEntrada">
                        Entrada
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="cantoEntrada" tabindex="-1" aria-labelledby="cantoEntradaLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="cantoEntradaLabel">Entrada</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    
                                <!-- Agregamos a inner acordeon para el tipo de canto -->
                                <?php foreach ($cantos as $canto): ?>

                                    <?php if ($canto['tipo_de_canto'] == 'Entrada') : ?>
                                        <div class="accordion" id="accordionEntrada">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header text-center" id="heading<?php echo $canto['id']; ?>">
                                                <button class="accordion-button collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $canto['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $canto['id']; ?>">
                                                    <?php echo $canto['titulo']; ?>
                                                </button>
                                                </h2>
                                                <div id="collapse<?php echo $canto['id']; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $canto['id']; ?>" data-bs-parent="#accordionCanto">
                                                <div class="accordion-body">
                                                    <p class="canto-single fw-bolder fs-4 lh-sm">- <?php echo $canto['titulo']; ?> -</a></p>
                                                    <p class="text-start"><?php echo nl2br($canto['canto_texto']); ?></p>

                                                    <p class="fst-italic fs-6"><?php echo $canto['tipo_de_canto']; ?> - <?php echo $canto['compositor']; ?></p>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                <?php endforeach; ?>

                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="Kyrie p-0 mb-3 me-1">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cantoKyrie">
                        Kyrie
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="cantoKyrie" tabindex="-1" aria-labelledby="cantoKyrieLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="cantoKyrieLabel">Kyrie</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Agregamos a inner acordeon para el tipo de canto -->
                                    <?php foreach ($cantos as $canto): ?>

                                        <?php if ($canto['tipo_de_canto'] == 'Kyrie') : ?>
                                            <div class="accordion" id="accordionKyrie">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header text-center" id="heading<?php echo $canto['id']; ?>">
                                                    <button class="accordion-button collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $canto['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $canto['id']; ?>">
                                                        <?php echo $canto['titulo']; ?>
                                                    </button>
                                                    </h2>
                                                    <div id="collapse<?php echo $canto['id']; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $canto['id']; ?>" data-bs-parent="#accordionCanto">
                                                    <div class="accordion-body">
                                                        <p class="canto-single fw-bolder fs-4 lh-sm">- <?php echo $canto['titulo']; ?> -</a></p>
                                                        <p class="text-start"><?php echo nl2br($canto['canto_texto']); ?></p>

                                                        <p class="fst-italic fs-6"><?php echo $canto['tipo_de_canto']; ?> - <?php echo $canto['compositor']; ?></p>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                    <?php endforeach; ?>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="Gloria p-0 mb-3 me-1">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cantoGloria">
                        Gloria
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="cantoGloria" tabindex="-1" aria-labelledby="cantoGloriaLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="cantoGloriaLabel">Gloria</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Agregamos a inner acordeon para el tipo de canto -->
                                    <?php foreach ($cantos as $canto): ?>

                                        <?php if ($canto['tipo_de_canto'] == 'Gloria') : ?>
                                            <div class="accordion" id="accordionGloria">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header text-center" id="heading<?php echo $canto['id']; ?>">
                                                    <button class="accordion-button collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $canto['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $canto['id']; ?>">
                                                        <?php echo $canto['titulo']; ?>
                                                    </button>
                                                    </h2>
                                                    <div id="collapse<?php echo $canto['id']; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $canto['id']; ?>" data-bs-parent="#accordionCanto">
                                                    <div class="accordion-body">
                                                        <p class="canto-single fw-bolder fs-4 lh-sm">- <?php echo $canto['titulo']; ?> -</a></p>
                                                        <p class="text-start"><?php echo nl2br($canto['canto_texto']); ?></p>

                                                        <p class="fst-italic fs-6"><?php echo $canto['tipo_de_canto']; ?> - <?php echo $canto['compositor']; ?></p>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                    <?php endforeach; ?>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="Aleluya p-0 mb-3 me-1">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cantoAleluya">
                        Aleluya
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="cantoAleluya" tabindex="-1" aria-labelledby="cantoAleluyaLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="cantoAleluyaLabel">Aleluya</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                   <!-- Agregamos a inner acordeon para el tipo de canto -->
                                   <?php foreach ($cantos as $canto): ?>

                                        <?php if ($canto['tipo_de_canto'] == 'Aleluya') : ?>
                                            <div class="accordion" id="accordionAleluya">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header text-center" id="heading<?php echo $canto['id']; ?>">
                                                    <button class="accordion-button collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $canto['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $canto['id']; ?>">
                                                        <?php echo $canto['titulo']; ?>
                                                    </button>
                                                    </h2>
                                                    <div id="collapse<?php echo $canto['id']; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $canto['id']; ?>" data-bs-parent="#accordionCanto">
                                                    <div class="accordion-body">
                                                        <p class="canto-single fw-bolder fs-4 lh-sm">- <?php echo $canto['titulo']; ?> -</a></p>
                                                        <p class="text-start"><?php echo nl2br($canto['canto_texto']); ?></p>

                                                        <p class="fst-italic fs-6"><?php echo $canto['tipo_de_canto']; ?> - <?php echo $canto['compositor']; ?></p>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                    <?php endforeach; ?>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="Presentacion_de_Dones p-0 mb-3 me-1">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cantoPresentacion_de_Dones">
                        Dones
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="cantoPresentacion_de_Dones" tabindex="-1" aria-labelledby="cantoPresentacion_de_DonesLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="cantoPresentacion_de_DonesLabel">Presentacion de Dones</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Agregamos a inner acordeon para el tipo de canto -->
                                    <?php foreach ($cantos as $canto): ?>

                                        <?php if ($canto['tipo_de_canto'] == 'Presentacion de Dones') : ?>
                                            <div class="accordion" id="accordionPresentacion_de_Dones">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header text-center" id="heading<?php echo $canto['id']; ?>">
                                                    <button class="accordion-button collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $canto['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $canto['id']; ?>">
                                                        <?php echo $canto['titulo']; ?>
                                                    </button>
                                                    </h2>
                                                    <div id="collapse<?php echo $canto['id']; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $canto['id']; ?>" data-bs-parent="#accordionCanto">
                                                    <div class="accordion-body">
                                                        <p class="canto-single fw-bolder fs-4 lh-sm">- <?php echo $canto['titulo']; ?> -</a></p>
                                                        <p class="text-start"><?php echo nl2br($canto['canto_texto']); ?></p>

                                                        <p class="fst-italic fs-6"><?php echo $canto['tipo_de_canto']; ?> - <?php echo $canto['compositor']; ?></p>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                    <?php endforeach; ?>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="Santo p-0 mb-3 me-1">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cantoSanto">
                        Santo
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="cantoSanto" tabindex="-1" aria-labelledby="cantoSantoLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="cantoSantoLabel">Santo</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Agregamos a inner acordeon para el tipo de canto -->
                                    <?php foreach ($cantos as $canto): ?>

                                        <?php if ($canto['tipo_de_canto'] == 'Santo') : ?>
                                            <div class="accordion" id="accordionSanto">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header text-center" id="heading<?php echo $canto['id']; ?>">
                                                    <button class="accordion-button collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $canto['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $canto['id']; ?>">
                                                        <?php echo $canto['titulo']; ?>
                                                    </button>
                                                    </h2>
                                                    <div id="collapse<?php echo $canto['id']; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $canto['id']; ?>" data-bs-parent="#accordionCanto">
                                                    <div class="accordion-body">
                                                        <p class="canto-single fw-bolder fs-4 lh-sm">- <?php echo $canto['titulo']; ?> -</a></p>
                                                        <p class="text-start"><?php echo nl2br($canto['canto_texto']); ?></p>

                                                        <p class="fst-italic fs-6"><?php echo $canto['tipo_de_canto']; ?> - <?php echo $canto['compositor']; ?></p>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                    <?php endforeach; ?>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="Cordero_de_Dios p-0 mb-3 me-1">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cantoCordero_de_Dios">
                        Cordero
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="cantoCordero_de_Dios" tabindex="-1" aria-labelledby="cantoCordero_de_DiosLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="cantoCordero_de_DiosLabel">Cordero de Dios</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                   <!-- Agregamos a inner acordeon para el tipo de canto -->
                                   <?php foreach ($cantos as $canto): ?>

                                        <?php if ($canto['tipo_de_canto'] == 'Cordero de Dios') : ?>
                                            <div class="accordion" id="accordionCordero_de_Dios">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header text-center" id="heading<?php echo $canto['id']; ?>">
                                                    <button class="accordion-button collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $canto['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $canto['id']; ?>">
                                                        <?php echo $canto['titulo']; ?>
                                                    </button>
                                                    </h2>
                                                    <div id="collapse<?php echo $canto['id']; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $canto['id']; ?>" data-bs-parent="#accordionCanto">
                                                    <div class="accordion-body">
                                                        <p class="canto-single fw-bolder fs-4 lh-sm">- <?php echo $canto['titulo']; ?> -</a></p>
                                                        <p class="text-start"><?php echo nl2br($canto['canto_texto']); ?></p>

                                                        <p class="fst-italic fs-6"><?php echo $canto['tipo_de_canto']; ?> - <?php echo $canto['compositor']; ?></p>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                    <?php endforeach; ?>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="Comunion p-0 mb-3 me-1">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cantoComunion">
                        Comunion
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="cantoComunion" tabindex="-1" aria-labelledby="cantoComunionLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="cantoComunionLabel">Comunion</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Agregamos a inner acordeon para el tipo de canto -->
                                    <?php foreach ($cantos as $canto): ?>

                                        <?php if ($canto['tipo_de_canto'] == 'Comunion') : ?>
                                            <div class="accordion" id="accordionComunion">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header text-center" id="heading<?php echo $canto['id']; ?>">
                                                    <button class="accordion-button collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $canto['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $canto['id']; ?>">
                                                        <?php echo $canto['titulo']; ?>
                                                    </button>
                                                    </h2>
                                                    <div id="collapse<?php echo $canto['id']; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $canto['id']; ?>" data-bs-parent="#accordionCanto">
                                                    <div class="accordion-body">
                                                        <p class="canto-single fw-bolder fs-4 lh-sm">- <?php echo $canto['titulo']; ?> -</a></p>
                                                        <p class="text-start"><?php echo nl2br($canto['canto_texto']); ?></p>

                                                        <p class="fst-italic fs-6"><?php echo $canto['tipo_de_canto']; ?> - <?php echo $canto['compositor']; ?></p>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                    <?php endforeach; ?>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="Salida p-0 mb-3">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cantoSalida">
                        Salida
                    </button>
                    
                    <!-- Modal -->
                    <div class="modal fade" id="cantoSalida" tabindex="-1" aria-labelledby="cantoSalidaLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="cantoSalidaLabel">Salida</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Agregamos a inner acordeon para el tipo de canto -->
                                    <?php foreach ($cantos as $canto): ?>

                                        <?php if ($canto['tipo_de_canto'] == 'Salida') : ?>
                                            <div class="accordion" id="accordionSalida">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header text-center" id="heading<?php echo $canto['id']; ?>">
                                                    <button class="accordion-button collapsed fs-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $canto['id']; ?>" aria-expanded="true" aria-controls="collapse<?php echo $canto['id']; ?>">
                                                        <?php echo $canto['titulo']; ?>
                                                    </button>
                                                    </h2>
                                                    <div id="collapse<?php echo $canto['id']; ?>" class="accordion-collapse collapse" aria-labelledby="heading<?php echo $canto['id']; ?>" data-bs-parent="#accordionCanto">
                                                    <div class="accordion-body">
                                                        <p class="canto-single fw-bolder fs-4 lh-sm">- <?php echo $canto['titulo']; ?> -</a></p>
                                                        <p class="text-start"><?php echo nl2br($canto['canto_texto']); ?></p>

                                                        <p class="fst-italic fs-6"><?php echo $canto['tipo_de_canto']; ?> - <?php echo $canto['compositor']; ?></p>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                    <?php endforeach; ?>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="cantos-imagen d-flex mb-3 mx-auto">
                <img class="img-fluid my-5 mx-auto" src="images/images_members/coro-dibujo.png" alt="Dibujo coro">
            </div>
        </div>
    </section>

<?php require 'footer.php'; ?>