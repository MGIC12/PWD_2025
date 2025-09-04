<?php
$error = false; // Control de errores
$errores = [];

if ($_POST) {
    // Sanitización inicial
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $edad = $_POST['edad'];
    $direccion = trim($_POST['direccion']);
    $estudios = $_POST['estudios'] ?? "No especificado";
    $sexo = $_POST['sexo'] ?? "No especificado";
    $deportes = $_POST['deportes'] ?? [];

    // Validar nombre y apellido (solo letras y espacios)
    $regexLetras = "/^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/";
    if (!preg_match($regexLetras, $nombre)) {
        $errores[] = "El nombre solo puede contener letras y espacios.";
    }
    if (!preg_match($regexLetras, $apellido)) {
        $errores[] = "El apellido solo puede contener letras y espacios.";
    }

    // Validar edad (número positivo hasta 999)
    if (!ctype_digit($edad) || $edad <= 0 || $edad > 999) {
        $errores[] = "La edad debe ser un número positivo de hasta 3 dígitos (1-999).";
    } else {
        $edad = (int)$edad;
    }

    // Validar dirección (mínimo 3 caracteres)
    if (strlen($direccion) < 3) {
        $errores[] = "La dirección es demasiado corta.";
    }

    // Validar nivel de estudios
    $opcionesEstudios = ["No tiene estudios", "Estudios primarios", "Estudios secundarios"];
    if (!in_array($estudios, $opcionesEstudios)) {
        $errores[] = "Nivel de estudios no válido.";
    }

    // Validar sexo
    $opcionesSexo = ["Masculino", "Femenino", "Otro"];
    if (!in_array($sexo, $opcionesSexo)) {
        $errores[] = "Sexo no válido.";
    }

    // Validar deportes (si vienen, deben estar en la lista)
    $opcionesDeportes = ["Fútbol", "Basket", "Tenis", "Voley"];
    if (!empty($deportes)) {
        foreach ($deportes as $dep) {
            if (!in_array($dep, $opcionesDeportes)) {
                $errores[] = "Deporte no válido detectado.";
                break;
            }
        }
    }

    // Escapar datos para la vista
    $datos = [
        'nombre' => htmlspecialchars($nombre),
        'apellido' => htmlspecialchars($apellido),
        'edad' => $edad,
        'direccion' => htmlspecialchars($direccion),
        'estudios' => htmlspecialchars($estudios),
        'sexo' => htmlspecialchars($sexo),
        'deportes' => array_map('htmlspecialchars', $deportes)
    ];

    if (!empty($errores)) {
        $error = "Hubo errores en los datos enviados.";
    }

} else {
    $error = "No se recibieron datos.";
}

// Incluir la vista
include '../../../../Vista/TP2/2/6/datosProcesados.php';


?>
