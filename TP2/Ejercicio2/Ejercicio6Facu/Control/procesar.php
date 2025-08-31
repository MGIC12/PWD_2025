<?php

if ($_POST) {
    $datos = [
        'nombre' => htmlspecialchars($_POST['nombre']),
        'apellido' => htmlspecialchars($_POST['apellido']),
        'edad' => (int)$_POST['edad'],
        'direccion' => htmlspecialchars($_POST['direccion']),
        'estudios' => $_POST['estudios'] ?? "No especificado",
        'sexo' => $_POST['sexo'] ?? "No especificado",
        'deportes' => $_POST['deportes'] ?? []
    ];
} else {
    $error = "No se recibieron datos.";
}

include '../Vista/datosProcesados.php';
