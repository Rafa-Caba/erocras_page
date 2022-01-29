<?php

session_start();

require 'config.php';
require '../functions.php';

comprobarSesion();

$conn = conexion($bd_config);
if (!$conn) {
    header('Location: ../login.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {
    $check = @getimagesize($_FILES['thumb']['tmp_name']);

    $titulo = limpiarDatos($_POST['titulo']);
    $imagen = limpiarDatos($_FILES['thumb']['name']);

    if ($check !== false) {
        $thumb = $_FILES['thumb']['tmp_name'];
        $archivo_subido = '../../' . CARPETA_IMAGES . $_FILES['thumb']['name'];

        move_uploaded_file($thumb, $archivo_subido);

        $stmt = $conn->prepare(
            'INSERT INTO imagenes_erocras (id, imagen_nombre, titulo_imagen) VALUES (null, :imagen_nombre, :titulo_imagen)'
        );

        $stmt->execute(array(
            ':imagen_nombre' => $imagen,
            ':titulo_imagen' => $titulo
        ));

        header('Location: ' . RUTA_ERO . 'admin/galeria.php');

    } else {
        $error = "El archivo no es una imagen o el archivo es muy pesado";
    }
}

require '../views/nuevo_foto.view.php';