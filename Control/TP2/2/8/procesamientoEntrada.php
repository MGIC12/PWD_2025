<?php

$edad = null;
$estudiante = null;
$precio = null;
$clase = null;
$error = null;

if ($_GET && isset($_GET['edad'], $_GET['estudiante'])) {
    $edad = $_GET['edad'];
    $estudiante = $_GET['estudiante'];

    // Validar edad
    if (!ctype_digit($edad) || $edad <= 0) {
        $error = "Ingrese una edad válida (número positivo).";
    } else {
        $edad = (int)$edad;
    }

    // Validar estudiante
    if ($estudiante !== "si" && $estudiante !== "no") {
        $error = "Opción de estudiante no válida.";
    }

    // Lógica de precios solo si no hay error
    if (!$error) {
        if ($estudiante === "si" || $edad < 12) {
            $precio = 160;
            $clase = 'alert-success';
        } else {
            $precio = 300;
            $clase = 'alert-info';
        }
    }

} else {
    $error = "No se recibieron datos.";
}

include_once '../Vista/resultadoEntrada.php';

?>