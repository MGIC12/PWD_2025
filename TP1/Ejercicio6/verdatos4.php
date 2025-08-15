<?php

$nombre = $_GET["nombre"];
$apellido = $_GET["apellido"];
$edad = $_GET["edad"];
$direccion = $_GET["direccion"];
$futbol = isset($_GET['futbol']) ? $_GET['futbol'] : '';
$basquetbol = isset($_GET['basquetbol']) ? $_GET['basquetbol'] : '';
$tenis = isset($_GET['tenis']) ? $_GET['tenis'] : '';
$voley = isset($_GET['voley']) ? $_GET['voley'] : '';

$cantidad_deportes = 0;
if ($futbol != '') $cantidad_deportes++;
if ($basquetbol != '') $cantidad_deportes++;
if ($tenis != '') $cantidad_deportes++;
if ($voley != '') $cantidad_deportes++;

echo "$nombre $apellido tiene $edad años y vive en $direccion. Practica $cantidad_deportes deportes.";
?>