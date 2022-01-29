<?php

session_start();

require 'config.php';
require '../functions.php';

$conn = conexion($bd_config);

if (!$conn) {
    header('Location: index.php');
}

comprobarSesion();

$imagenes_por_pagina = 9;

$pagina_actual = (isset($_GET['p']) ? (int)$_GET['p'] : 1);
$inicio = ($pagina_actual > 1) ? $pagina_actual * $imagenes_por_pagina - $imagenes_por_pagina : 0;

$stmt = $conn->prepare(
    "SELECT SQL_CALC_FOUND_ROWS * FROM imagenes_erocras LIMIT $inicio, $imagenes_por_pagina"
);

$stmt->execute();
$imagenes = $stmt->fetchAll();

if (!$imagenes) {
    header('Location: index.php');
}

$stmt = $conn->prepare(
    "SELECT FOUND_ROWS() as total_filas"
);
$stmt->execute();
$total_imagenes = $stmt->fetch()['total_filas'];

$total_paginas = ceil($total_imagenes / $imagenes_por_pagina);

require '../views/galeria.view.php';