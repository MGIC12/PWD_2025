<?php

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];
$direccion = $_POST["direccion"];

echo "Hola, yo soy ", "<b>$nombre</b>", ", ", "<b>$apellido</b>", ", ", "tengo ", "<b>$edad</b>", " años y vivo en ", "<b>$direccion</b>";

?>