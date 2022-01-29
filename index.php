<?php

require 'erocras_admin/admin/config.php';
require 'erocras_admin/functions.php';

// Conexion con la BD
$conn = conn_mysqli($bd_config);

// Datos de imagenes en BD
$imagenes = leer_imagenes_db($conn);

// Incrementando el numero de visitas
//$num_visitas = contar_visitas(conexion($bd_config));

require 'views/index.view.php';