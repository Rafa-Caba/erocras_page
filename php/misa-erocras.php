<?php

require 'erocras_admin/admin/config.php';
require 'erocras_admin/functions.php';

// Cconexion con las BD
$conn = conn_mysqli($bd_config);

// Datos de cantos en BD
$cantos = leer_cantos_db($conn);

require 'views/misa-erocras.view.php';