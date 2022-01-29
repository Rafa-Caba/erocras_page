<?php

session_start();

require 'config.php';
require '../functions.php';

comprobarSesion();

$conn = conexion($bd_config);
if (!$conn) {
    header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = limpiarDatos($_POST['titulo']);
    $canto_texto = $_POST['canto_texto'];
    $compositor = limpiarDatos($_POST['compositor']);
    $tipo_de_canto = limpiarDatos($_POST['tipo_de_canto']);
    $id = limpiarDatos($_POST['id']);

    $stmt = $conn->prepare(
        'UPDATE cantos SET titulo = :titulo, canto_texto = :canto_texto,
        compositor = :compositor, tipo_de_canto = :tipo_de_canto WHERE id = :id'
    );

    $stmt->execute(array(
        ':titulo' => $titulo,
        ':canto_texto' => $canto_texto,
        ':compositor' => $compositor,
        ':tipo_de_canto' => $tipo_de_canto,
        ':id' => $id
    ));

    header('Location: ' . RUTA_ERO . 'erocras_admin/admin/single_canto.php?id=' . $id);

} else {
    $canto_id = canto_id($_GET['id']);

    if (empty($canto_id)) {
        header('Location: ' . RUTA_ERO . '/erocras_admin/admin');
    }

    $canto = obtener_canto_por_id($conn, $canto_id);

    if (!$canto) {
        header('Location: ' . RUTA_ERO . '/erocras_admin/admin');
    }

    $canto = $canto[0];
}

require '../views/editar_canto.view.php';