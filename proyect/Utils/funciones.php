<?php
function datasubmited() {
    $datos = [];

    // Procesar POST
    if (!empty($_POST)) {
        foreach ($_POST as $key => $value) {
            if (is_array($value)) {
                // Si es array (ej: checkboxes), sanitizamos cada elemento
                $datos[$key] = array_map(function($item) {
                    return htmlspecialchars(trim($item));
                }, $value);
            } else {
                $datos[$key] = htmlspecialchars(trim($value));
            }
        }
    }

    // Procesar GET (igual que POST, pero no excluyente)
    if (!empty($_GET)) {
        foreach ($_GET as $key => $value) {
            if (is_array($value)) {
                $datos[$key] = array_map(function($item) {
                    return htmlspecialchars(trim($item));
                }, $value);
            } else {
                $datos[$key] = htmlspecialchars(trim($value));
            }
        }
    }

    // Procesar FILES (se guardan tal cual, sin sanitizar)
    if (!empty($_FILES)) {
        foreach ($_FILES as $key => $file) {
            $datos[$key] = $file;
        }
    }

    return $datos;
}
?>
