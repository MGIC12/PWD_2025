<?php
    function datasubmited() {
    $datos = [];
    if (!empty($_POST)) {
        foreach ($_POST as $key => $value) {
            $datos[$key] = htmlspecialchars(trim($value));
        }
    } else if (!empty($_GET)) {
        foreach ($_GET as $key => $value) {
            $datos[$key] = htmlspecialchars(trim($value));
        }
    }
    return $datos;
    }
?>