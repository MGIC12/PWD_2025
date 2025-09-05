<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 - Resultado</title>
    <link rel="stylesheet" href="../../Frameworks/bootstrap.min.css">
</head>
<body class="d-flex flex-column min-vh-100">

  <!-- Navbar -->
  <?php
  include_once('../../structure/header.php');
  ?>
    <div>
        <a href="http://localhost/PWD_2025/proyect/Vista/TP1/7/Ejercicio7.php">
    <button class="btn btn-primary w-25" data-bs-theme="dark">← Volver a la página anterior</button>
        </a>
    </div>
<div class="container text-center mt-3">
  <h2 class="text-center fw-bold mb-3">Datos ingresados:</h2>
<?php

include_once("../../../Utils/funciones.php");

$datos = datasubmited();
  if (!empty($datos)) {
    //Obtener los números ingresados
    $nro1 = $datos["num1"];
    $nro2 = $datos["num2"];
    $operacion = $datos["operacion"];
    $mostrarContenido = true;
  } else {
    $mostrarContenido = false;
  }

echo "<h3>Operación elegida: </h3>".strtoupper($operacion)."<br>";
echo "<h4 class='mt-3'>El resultado de la operación es:</h4>";

if (!$mostrarContenido) {
  $rta = "No se han ingresado datos";
  exit($rta);
} else if ($operacion == "sumar") {
    $suma = $nro1 + $nro2;
    $rta = "<h3>$suma</h3>";
} else if ($operacion == "restar") {
    $resta = $nro1 - $nro2;
    $rta = "<h3>$resta</h3>";
} else if ($operacion == "multiplicar") {
    $multiplicacion = $nro1 * $nro2;
    $rta = "<h3>$multiplicacion</h3>";
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
