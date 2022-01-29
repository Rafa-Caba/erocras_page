<?php

session_start();

require 'config.php';
require '../functions.php';

comprobarSesion();

$conn = conexion($bd_config);
if (!$conn) {
    header('Location: ../login.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = limpiarDatos($_POST['titulo']);
    $canto_texto = $_POST['canto_texto'];
    $tipo_de_canto = limpiarDatos($_POST['tipo_de_canto']);
    $compositor = limpiarDatos($_POST['compositor']);

    $stmt = $conn->prepare(
        'INSERT INTO cantos (id, titulo, canto_texto, compositor, tipo_de_canto)
        VALUES (null, :titulo, :canto_texto, :compositor, :tipo_de_canto)'
    );

    $stmt->execute(array(
        ':titulo' => $titulo,
        ':canto_texto' => $canto_texto,
        ':compositor' => $compositor,
        ':tipo_de_canto' => $tipo_de_canto
    ));

    header('Location: ' . RUTA_ERO . 'erocras_admin/admin/cantos.php');
}

require '../views/nuevo.view.php';