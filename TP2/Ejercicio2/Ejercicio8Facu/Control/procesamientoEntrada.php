<?php
// Inicializamos variables
$edad = null;
$estudiante = null;
$precio = null;
$clase = null;
$error = null;

// Verificamos que se hayan enviado datos
if ($_GET && isset($_GET['edad'], $_GET['estudiante'])) {
    $edad = intval($_GET['edad']);
    $estudiante = $_GET['estudiante'];

    // Lógica de precios
    if ($estudiante === "si" || $edad < 12) {
        $precio = 160;
        $clase = 'alert-success';
    } else if ($estudiante === "si" && $edad >= 12) {
        $precio = 180;
        $clase = 'alert-success';
    } else {
        $precio = 300;
        $clase = 'alert-info';
    }
} else {
    $error = "No se recibieron datos.";
}

// Incluimos la Vista para mostrar los resultados
include_once '../Vista/resultadoEntrada.php';
