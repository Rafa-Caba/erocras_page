<?php

session_start();

require 'config.php';
require '../functions.php';

$conn = conexion($bd_config);

comprobarSesion();

if (!$conn) {
    header('Location: index.php');
}

$cantos = obtener_cantos($conn);

require '../views/cantos.view.php';