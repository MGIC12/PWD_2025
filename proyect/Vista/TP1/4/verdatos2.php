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
  <a href="http://localhost/PWD_2025/proyect/Vista/TP1/4/Ejercicio4.php">
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
    $mostrarContenido = true;
  } else {
    $mostrarContenido = false;
  }

  if (!$mostrarContenido) {
    $rta = "No se han ingresado datos";
    exit($rta);
  } else if ($edad >= 18){
    $rta = "Hola, yo soy ".$nombre. " ".$apellido. ", tengo ". $edad. " años y vivo en ". $direccion. " y soy mayor de edad";
    echo $rta;
} else if ($edad < 18 && $edad > 0){
    $rta = "Hola, yo soy ".$nombre. " ".$apellido. ", tengo ". $edad. " años y vivo en ". $direccion. " y soy menor de edad";
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