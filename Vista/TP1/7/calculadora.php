<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 - Resultado</title>
    <link rel="stylesheet" href="../../../Frameworks/bootstrap.min.css">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
    <div class="container">
      <a class="navbar-brand fw-bold" href="./../../../index.php">PWD 2025</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link active" href="./../../../index.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="./../../../Vista/TP1/index.php">TP 1</a></li>
          <li class="nav-item"><a class="nav-link" href="./../../../Vista/TP2/index.php">TP 2</a></li>
          <li class="nav-item"><a class="nav-link" href="./../../../Vista/TP3/index.php">TP 3</a></li>
        </ul>
      </div>
    </div>
  </nav>
  
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
</body>
</html>
