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
  
    <h1>TP1 - Ejercicio 7</h1>
    <hr>
<?php
$nro1 = $_GET["num1"];
$nro2 = $_GET["num2"];
$operacion = $_GET["operacion"];

echo "Operación elegida: ".strtoupper($operacion);

echo "<h3>El resultado de la operación es:</h3>";

if ($operacion == "sumar") {
    $suma = $nro1 + $nro2;
    echo "<h3>$suma</h3>";
} else if ($operacion == "restar") {
    $resta = $nro1 - $nro2;
    echo "<h3>$resta</h3>";
} else if ($operacion == "multiplicar") {
    $multiplicacion = $nro1 * $nro2;
    echo "<h3>$multiplicacion</h3>";
}

?>
<!-- footer -->
   
    <?php
    include_once('../../structure/footer.php');
    ?>

</body>
</html>
