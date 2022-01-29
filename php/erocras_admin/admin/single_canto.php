<?php 

session_start();

require 'config.php';
require '../functions.php';

$conn = conexion($bd_config);

comprobarSesion();

$canto_id = canto_id($_GET['id']);

if (!$conn) {
    header('Location: index.php');
}

if (empty($canto_id)) {
    header('Location: index.php');
}

$canto = obtener_canto_por_id($conn, $canto_id);

if (!$canto) {
    header('Location: index.php');
}

$canto = $canto[0];

require '../views/single_canto.view.php';
