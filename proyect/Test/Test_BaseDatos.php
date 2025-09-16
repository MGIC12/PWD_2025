<?php

include_once("../Modelo/conector/BaseDatos.php");

$base = new BaseDatos();
$base->Iniciar();

if ($base->Iniciar()) {
    echo "Conectado";
}

?>