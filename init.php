<?php
// Incluir la configuración base
include_once __DIR__ . "/configuracion.php";

// ====================
// =INCLUDES GENERALES=
// ====================

// Funciones globales (data_submitted, verEstructura, etc.)
include_once $ROOT . "project/utils/funciones.php";

// Modelos
include_once $ROOT . "project/Model/Persona.php";
include_once $ROOT . "project/Model/Auto.php";

// Controladores
include_once $ROOT . "project/Controller/AbmPersona.php";
include_once $ROOT . "project/Controller/AbmAuto.php";

// Validadores
// include_once $ROOT . "project/Controller/Validador.php";

// (se agrega todo lo que quieras tener disponible globalmente)
?>