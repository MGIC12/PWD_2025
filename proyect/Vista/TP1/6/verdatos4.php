<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="../../Frameworks/bootstrap.min.css">
</head>

<body class="d-flex flex-column min-vh-100">
    
<?php
// Navbar
  include_once('../../structure/header.php');
?>
<div>
  <a href="http://localhost/PWD_2025/proyect/Vista/TP1/6/Ejercicio6.php">
    <button class="btn btn-primary w-25" data-bs-theme="dark">← Volver a la página anterior</button>
  </a>
</div>
<div class="container text-center mt-3">
  <h2 class="text-center fw-bold mb-3">Datos ingresados:</h2>
<?php

include_once("../../../Utils/funciones.php");
$datos = datasubmited();
  if (!empty($datos)) {
    $nombre = $datos["nombre"];
    $apellido = $datos["apellido"];
    $edad = $datos["edad"];
    $direccion = $datos["direccion"];
    $futbol = isset($datos['futbol']) ? $datos['futbol'] : '';
    $basquetbol = isset($datos['basquetbol']) ? $datos['basquetbol'] : '';
    $tenis = isset($datos['tenis']) ? $datos['tenis'] : '';
    $voley = isset($datos['voley']) ? $datos['voley'] : '';
    $mostrarContenido = true;
  } else {
    $mostrarContenido = false;
  }

if (!$mostrarContenido) {
  $rta = "No se han ingresado datos";
  exit($rta);
} else {
  $cantidad_deportes = 0;
  if ($futbol != '') $cantidad_deportes++;
  if ($basquetbol != '') $cantidad_deportes++;
  if ($tenis != '') $cantidad_deportes++;
  if ($voley != '') $cantidad_deportes++;
  $rta = "$nombre $apellido tiene $edad años y vive en $direccion. Practica $cantidad_deportes deportes.";
}
echo $rta;


?>
</div>
<!-- footer -->
   
    <?php
    include_once('../../structure/footer.php');
    ?>

</body>

</html>