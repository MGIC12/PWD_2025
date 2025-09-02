<?php
if ($_GET) {

    $nombre = trim($_GET['nombre']);
    $apellido = trim($_GET['apellido']);
    $edad = $_GET['edad'];
    $direccion = trim($_GET['direccion']);

    $errores = [];

    // Validar nombre y apellido (solo letras y espacios)
    if (!preg_match("/^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/", $nombre)) {
        $errores[] = "El nombre solo puede contener letras y espacios.";
    }

    if (!preg_match("/^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/", $apellido)) {
        $errores[] = "El apellido solo puede contener letras y espacios.";
    }

    // Validar edad (solo números, entre 0 y 999)
    if (!ctype_digit($edad) || $edad <= 0 || $edad > 999) {
        $errores[] = "La edad debe ser un número positivo de hasta 3 dígitos.";
    } else {
        $edad = (int)$edad; // conversión segura
    }


    // Validar dirección (mínimo 3 caracteres)
    if (strlen($direccion) < 3) {
        $errores[] = "La dirección es demasiado corta.";
    }

    if (empty($errores)) {

        $nombre = htmlspecialchars($nombre);
        $apellido = htmlspecialchars($apellido);
        $direccion = htmlspecialchars($direccion);

        // Paso los datos a la vista
        include "../Vista/datosProcesados.php";
    } else {
        // Redirigir al formulario si no hay datos
        header("Location: ../Vista/formulario.php");
        exit; // siempre poner exit después de header
    }
}

?>
