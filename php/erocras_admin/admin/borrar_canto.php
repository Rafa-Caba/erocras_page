<?php

session_start();

require 'config.php';
require '../functions.php';

comprobarSesion();

$conn = conexion($bd_config);
if (!$conn) {
    header('Location: index.php');
}

$id = limpiarDatos($_GET['id']);

if (!$id) {
    header('Location: ' . RUTA_ERO . '/erocras_admin/admin');
}

$stmt = $conn->prepare('DELETE FROM cantos WHERE id = :id');
$stmt->execute(array(':id' => $id));

header('Location: ' . RUTA_ERO . 'erocras_admin/admin/cantos.php');