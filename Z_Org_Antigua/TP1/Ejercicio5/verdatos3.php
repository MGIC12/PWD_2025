<?php

$nombre = $_GET["nombre"];
$apellido = $_GET["apellido"];
$edad = $_GET["edad"];
$direccion = $_GET["direccion"];
$estudios = $_GET["estudios"];
$sexo = $_GET["sexo"];

if ($estudios == "S"){
    echo "Hola, yo soy ", "<b>$nombre</b>", ", ", "<b>$apellido</b>", ", ", "tengo ", "<b>$edad</b>", " años y vivo en ", "<b>$direccion</b>", " y tengo estudios secundarios";
} else if ($estudios == "P"){
    echo "Hola, yo soy ", "<b>$nombre</b>", ", ", "<b>$apellido</b>", ", ", "tengo ", "<b>$edad</b>", " años y vivo en ", "<b>$direccion</b>", " y tengo estudios primarios";
} else if ($estudios == "N"){
    echo "Hola, yo soy ", "<b>$nombre</b>", ", ", "<b>$apellido</b>", ", ", "tengo ", "<b>$edad</b>", " años y vivo en ", "<b>$direccion</b>", " y no tengo estudios";
}

if ($sexo == "M"){
    echo " y soy hombre";
} else if ($sexo == "F"){
    echo " y soy mujer";
}

?>