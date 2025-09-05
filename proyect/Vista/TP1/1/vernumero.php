<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../Frameworks/bootstrap.min.css">
  <title>Ver número</title>
</head>

<body class="d-flex flex-column min-vh-100">

  <!-- Navbar --><!-- Navbar -->
  <?php
  include_once('../../structure/header.php');
  ?>
  <h1 style="float: left">Resultado:</h1>
  <br><br>
  <a href="http://localhost/PWD_2025/Vista/TP1/1/Ejercicio1.php" style="float: right">← Volver a la página anterior</a>
  <br><br>
  <hr>

  <?php
  //Obtener los números ingresados
  $num = $_POST["num"];

  //Verificar si el primer número es positivo, negativo o cero
  if ($num > 0) {
    echo "El primer número ingresado es: <b>positivo</b> <br>";
  } else if ($num < 0) {
    echo "El primer número ingresado es: <b>negativo</b> <br>";
  } else if ($num == 0) {
    echo "El primer número ingresado es: <b>cero</b> <br>";
  }

  echo "El número ingresado fue: <b>$num</b> <br>";
  ?>

   <!-- footer -->
   
    <?php
    include_once('../../structure/footer.php');
    ?>
   
</body>

</html>