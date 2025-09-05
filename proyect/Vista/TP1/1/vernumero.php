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
  <div>
    <a href="http://localhost/PWD_2025/proyect/Vista/TP1/1/Ejercicio1.php">
      <button class="btn btn-primary w-25" data-bs-theme="dark">← Volver a la página anterior</button>
    </a>
  </div>
  <h1 class="text-center">Resultado:</h1>
<div class="container text-center mt-3">
  <?php
  include_once("../../../Utils/funciones.php");
  $datos = datasubmited();
  if (!empty($datos)) {
    //Obtener los números ingresados
    $num = $datos["num"];
    $mostrarContenido = true;
  } else {
    $mostrarContenido = false;
  }

  if (!$mostrarContenido) {
    $rta = "No se han ingresado datos";
    exit($rta);
  } else {
  //Verificar si el primer número es positivo, negativo o cero
  if ($num > 0) {
    $rta = "El primer número ingresado es: <b>positivo</b> <br>";
  } else if ($num < 0) {
    $rta = "El primer número ingresado es: <b>negativo</b> <br>";
  } else if ($num == 0) {
    $rta = "El primer número ingresado es: <b>cero</b> <br>";
  }

    $rta .= "El número ingresado fue: <b>$num</b> <br>";
    echo $rta;
  }
  ?>
</div>
   <!-- footer -->
   
    <?php
    include_once('../../structure/footer.php');
    ?>
   
</body>

</html>