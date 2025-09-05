<?php
function datasubmited() {
    $datos = [];
    // Procesar POST
    if (!empty($_POST)) {
        foreach ($_POST as $key => $value) {
            $datos[$key] = htmlspecialchars(trim($value));
        }
    } elseif (!empty($_GET)) {
        foreach ($_GET as $key => $value) {
            $datos[$key] = htmlspecialchars(trim($value));
        }
    }
    // Procesar FILES
    if (!empty($_FILES)) {
        foreach ($_FILES as $key => $file) {
            $datos[$key] = $file; // acá no se sanitiza porque es un array con info del archivo
        }
    }
    return $datos;
}
?>