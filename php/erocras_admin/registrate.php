<?php 

session_start();

require 'admin/config.php';
require 'functions.php';

if (isset($_SESSION['usuario'])) {
    header('Location: index.php');
} 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    $errores = '';

    if (empty($usuario) or empty($password) or empty($password2)) {
        $errores .= '<li>Por rellena todos los datos correctamente</li>';
    } else {
        $conn = conexion($bd_config);

        $stmt = $conn->prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1');
        $stmt->execute(array(':usuario' => $usuario));
        $resultado = $stmt->fetch();

        if ($resultado != false) {
            $errores .= '<li>El nombre de usuario ya existe</li>';
        }

        // Hasheamos nuestra contraseña para protegerla un poco.
        $password = hash('sha512', $password);
        $password2 = hash('sha512', $password2);

        // Comprobamos que las contraseñas sean iguales.
        if ($password != $password2) {
            $errores .= '<li>Las contraseñas no coinciden</li>';
        }
    }

    // Comprobamos si hay errores, sino entonces agregamos el usuario y redirigimos.
    if ($errores == '') {
        $stmt = $conn->prepare("INSERT INTO usuarios (id, usuario, pass) VALUES (null, :usuario, :pass)");
        $stmt->execute(array(
            ':usuario' => $usuario, 
            ':pass' => $password
        ));
	    
        // Despues de registrar al usuario redirigimos para que inicie sesion.
        header('Location: login.php');
    }
}

require 'views/registrate.view.php';
