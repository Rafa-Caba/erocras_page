<?php 

session_start();

require 'admin/config.php';
require 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = limpiarDatos($_POST['usuario']);
    $password = limpiarDatos($_POST['password']);

    $conn = conexion($bd_config);

    $datos = find_usuario($usuario, $password, $conn);

    if ($datos) {
        $_SESSION['admin'] = $datos[0];
        header('Location: codigo_login.php');
    }
}

require 'views/login.view.php';