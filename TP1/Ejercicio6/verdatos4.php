<?php

$nombre = $_GET["nombre"];
$apellido = $_GET["apellido"];
$edad = $_GET["edad"];
$direccion = $_GET["direccion"];
$deporte = $_GET["deporte"];

if ($deporte == "futbol"){
    echo "Hola, yo soy ", "<b>$nombre</b>", ", ", "<b>$apellido</b>", ", ", "tengo ", "<b>$edad</b>", " años y vivo en ", "<b>$direccion</b>", " y me gusta el futbol";
} else if ($deporte == "basquet"){
    echo "Hola, yo soy ", "<b>$nombre</b>", ", ", "<b>$apellido</b>", ", ", "tengo ", "<b>$edad</b>", " años y vivo en ", "<b>$direccion</b>", " y me gusta el basquet";
} else if ($deporte == "tenis"){
    echo "Hola, yo soy ", "<b>$nombre</b>", ", ", "<b>$apellido</b>", ", ", "tengo ", "<b>$edad</b>", " años y vivo en ", "<b>$direccion</b>", " y me gusta el tenis";
}

?>