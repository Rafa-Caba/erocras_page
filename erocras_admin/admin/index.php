<?php

session_start();

require 'config.php';
require '../functions.php';

$conn = conexion($bd_config);

if (!$conn) {
    header('Location: login.php');
}

comprobarSesion();
$usuario_actual = ucfirst($_SESSION['admin']);

require '../views/admin_index.view.php';