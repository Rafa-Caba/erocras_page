<?php

session_start();

require 'admin/config.php';
require 'functions.php';

comprobarSesion();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $code = (int)limpiarDatos($_POST['code']);

    print_r($code);

    if (isset($code) && $code === CODIGO_LOGIN) {
        header('Location: ' . RUTA_ERO . 'erocras_admin/admin/');
    } else {
        header('Location: login.php');
    }
}

require 'views/codigo_login.view.php';