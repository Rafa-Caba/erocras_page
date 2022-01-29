<?php

// Conexion a la base de datos
function conexion($bd_config) {
    try {
        $conn = new PDO('mysql:hoost=' . $bd_config['host'] . ';dbname=' . $bd_config['basedatos'], $bd_config['usuario'], $bd_config['pass']);
        return $conn;
    } catch (PDOException $e) {
        return false;
    }
}

// Conexion a la base de datos por MYSQLI
function conn_mysqli($bd_config) {
    try {
        $conn = new mysqli($bd_config['host'], $bd_config['usuario'], $bd_config['pass'], $bd_config['basedatos']);
        return $conn;
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

// Obtener usuario para la sesion
function find_usuario($usuario, $pass, $conn) {    
    $stmt = $conn->prepare('SELECT * FROM usuarios WHERE usuario = :usuario LIMIT 1');
    $stmt->execute(array(':usuario' => $usuario));
    $resultado = $stmt->fetch();

    $erocras_admin = [];

    array_push($erocras_admin, $resultado['usuario']);
    array_push($erocras_admin, $resultado['pass']);

    if ($erocras_admin[0] == strtolower($usuario) && $erocras_admin[1] == hash('sha512', $pass)) {
        return $erocras_admin;
    }
}

// Limpiar datos para evitar injectiones
function limpiarDatos($datos) {
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}

// Obtener todos los cantos de la base de datos
function obtener_cantos($conn){
	$sentencia = $conn->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM cantos ORDER BY tipo_de_canto DESC");

	$sentencia->execute();
	return $sentencia->fetchAll();
}

// Obtener el canto en base a su id
function obtener_canto_por_id($conn, $id) {
    $resultado = $conn->query("SELECT * FROM cantos WHERE id = $id LIMIT 1");
    $resultado = $resultado->fetchAll();
    return ($resultado) ? $resultado : false;
}

// Obtener el id del canto
function canto_id($id) {
    return (int)limpiarDatos($id);
}

// Comprobar si hay session iniciada
function comprobarSesion() {
    if (!isset($_SESSION['admin'])) {
        header('Location: ' . RUTA_ERO . 'login.php');
    }
}

// Obtener contador de visita y actualizarlo y devuelve el num de visitas
function contar_visitas($conn) {
    $total_visitas = $conn->query("SELECT numero_visitas FROM visitas");
    $total_visitas = $total_visitas->fetchAll();

    $num_visitas = $total_visitas[0]['numero_visitas'];
    // Aumenta el numero de visitas
    $num_visitas++;

    $stmt = $conn->prepare(
        'UPDATE visitas SET numero_visitas = :numero_visitas'
    );

    $stmt->execute(array(
        ':numero_visitas' => $num_visitas
    ));

    return $num_visitas;
}

// Leer cantos de la BD
function leer_cantos_db($conn) {
    if ($conn->connect_errno) {
        $respuesta = ['error' => true];
    } else {
        $conn->set_charset("utf8");
        $stmt = $conn->prepare("SELECT * FROM cantos");
        $stmt->execute();
        $resultados = $stmt->get_result();
    
        $respuesta = [];
    
        while ($fila = $resultados->fetch_assoc()) {
            $canto = [
                'id'                => $fila['id'],
                'titulo'            => $fila['titulo'],
                'canto_texto'       => $fila['canto_texto'],
                'compositor'        => $fila['compositor'],
                'tipo_de_canto'     => $fila['tipo_de_canto'],
            ];
            
            array_push($respuesta, $canto);
        }

        return $respuesta;
    }
}

// leer imagenes de la BD
function leer_imagenes_db($conn) {
    if ($conn->connect_errno) {
        $respuesta = ['error' => true];
    } else {
        $conn->set_charset("utf8");
        $stmt = $conn->prepare("SELECT * FROM imagenes_erocras");
        $stmt->execute();
        $resultados = $stmt->get_result();
    
        $respuesta = [];
    
        while ($fila = $resultados->fetch_assoc()) {
            $imagen = [
                'id'             => $fila['id'],
                'imagen_nombre'  => $fila['imagen_nombre'],
                'titulo_imagen'  => $fila['titulo_imagen']
            ];
            
            array_push($respuesta, $imagen);
        }

        return $respuesta;
    }
}