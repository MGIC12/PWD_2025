<?php
$errores = [];
$datos = [];

if ($_GET) {
    $nombre = trim($_GET['nombre']);
    $apellido = trim($_GET['apellido']);
    $edad = $_GET['edad'];
    $direccion = trim($_GET['direccion']);

    // Validaciones
    if (!preg_match("/^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/", $nombre)) {
        $errores[] = "El nombre solo puede contener letras y espacios.";
    }

    if (!preg_match("/^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/", $apellido)) {
        $errores[] = "El apellido solo puede contener letras y espacios.";
    }

    if (!ctype_digit($edad) || $edad <= 0 || $edad > 999) {
        $errores[] = "La edad debe ser un número positivo de hasta 3 dígitos.";
    } else {
        $edad = (int)$edad;
    }

    if (strlen($direccion) < 3) {
        $errores[] = "La dirección es demasiado corta.";
    }

    // Guardar datos validados
    if (empty($errores)) {
        $datos = [
            'nombre' => htmlspecialchars($nombre),
            'apellido' => htmlspecialchars($apellido),
            'edad' => $edad,
            'direccion' => htmlspecialchars($direccion)
        ];
    }
} else {
    $errores[] = "No se recibieron datos.";
}

