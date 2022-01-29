<?php

session_start();

require 'config.php';
require '../functions.php';

$conn = conexion($bd_config);

if (!$conn) {
    header('Location: galeria.php');
}

$id = isset($_GET['id']) ? (int)$_GET['id'] : false;

if (!$id) {
    header('Location: galeria.php');
}

$stmt = $conn->prepare('SELECT * FROM imagenes_erocras WHERE id = :id');
$stmt->execute(array(':id' => $id));

$imagen = $stmt->fetch();

if (!$imagen) {
    header('Location: galeria.php');
}


require '../views/single_imagen.view.php';