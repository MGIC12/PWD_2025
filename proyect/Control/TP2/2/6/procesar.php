<?php
$error = false;
$errores = [];

if ($_POST) {
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $edad = $_POST['edad'];
    $direccion = trim($_POST['direccion']);
    $estudios = $_POST['estudios'] ?? "No especificado";
    $sexo = $_POST['sexo'] ?? "No especificado";
    $deportes = $_POST['deportes'] ?? [];

    $regexLetras = "/^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/";

    if (!preg_match($regexLetras, $nombre)) $errores[] = "El nombre solo puede contener letras y espacios.";
    if (!preg_match($regexLetras, $apellido)) $errores[] = "El apellido solo puede contener letras y espacios.";

    if (!ctype_digit($edad) || $edad <= 0 || $edad > 999) $errores[] = "La edad debe ser un número positivo de hasta 3 dígitos.";
    else $edad = (int)$edad;

    if (strlen($direccion) < 3) $errores[] = "La dirección es demasiado corta.";

    $opcionesEstudios = ["No tiene estudios", "Estudios primarios", "Estudios secundarios"];
    if (!in_array($estudios, $opcionesEstudios)) $errores[] = "Nivel de estudios no válido.";

    $opcionesSexo = ["Masculino", "Femenino", "Otro"];
    if (!in_array($sexo, $opcionesSexo)) $errores[] = "Sexo no válido.";

    $opcionesDeportes = ["Fútbol", "Basket", "Tenis", "Voley"];
    foreach ($deportes as $dep) {
        if (!in_array($dep, $opcionesDeportes)) {
            $errores[] = "Deporte no válido detectado.";
            break;
        }
    }

    $datos = [
        'nombre' => htmlspecialchars($nombre),
        'apellido' => htmlspecialchars($apellido),
        'edad' => $edad,
        'direccion' => htmlspecialchars($direccion),
        'estudios' => htmlspecialchars($estudios),
        'sexo' => htmlspecialchars($sexo),
        'deportes' => array_map('htmlspecialchars', $deportes)
    ];

    if (!empty($errores)) $error = "Hubo errores en los datos enviados.";
} else {
    $error = "No se recibieron datos.";
}
