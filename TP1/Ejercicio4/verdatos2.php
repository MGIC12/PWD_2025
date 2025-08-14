<?php

$nombre = $_GET["nombre"];
$apellido = $_GET["apellido"];
$edad = $_GET["edad"];
$direccion = $_GET["direccion"];

if ($edad >= 18){
    echo "Hola, yo soy ", "<b>$nombre</b>", ", ", "<b>$apellido</b>", ", ", "tengo ", "<b>$edad</b>", " años y vivo en ", "<b>$direccion</b>", " y soy mayor de edad";
} else {
    echo "Hola, yo soy ", "<b>$nombre</b>", ", ", "<b>$apellido</b>", ", ", "tengo ", "<b>$edad</b>", " años y vivo en ", "<b>$direccion</b>", " y soy menor de edad";
}

?>