<!DOCTYPE html>
<html lang="es">

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
  <a href="http://localhost/PWD_2025/proyect/Vista/TP1/5/Ejercicio5.php">
    <button class="btn btn-primary w-25" data-bs-theme="dark">← Volver a la página anterior</button>
  </a>
</div>
<div class="container text-center mt-3">
  <h2 class="text-center fw-bold mb-3">Datos ingresados:</h2>
<?php

include_once("../../../Utils/funciones.php");

//Obtener los datos
$datos = datasubmited();
  if (!empty($datos)) {
    $nombre = $datos["nombre"];
    $apellido = $datos["apellido"];
    $edad = $datos["edad"];
    $direccion = $datos["direccion"];
    $estudios = $datos["estudios"];
    $sexo = $datos["sexo"];
    $mostrarContenido = true;
  } else {
    $mostrarContenido = false;
  }

  if (!$mostrarContenido) {
    $rta = "No se han ingresado datos";
    exit($rta);
  } else if ($estudios == "S"){
    $rta = "Hola, yo soy ".$nombre. " ".$apellido. ", tengo ". $edad. " años y vivo en ". $direccion. " y tengo estudios secundarios";
    
} else if ($estudios == "P"){
    $rta = "Hola, yo soy ".$nombre. " ". $apellido.", tengo ". $edad. " años y vivo en ". $direccion. " y tengo estudios primarios";
    
} else if ($estudios == "N"){
    $rta = "Hola, yo soy ".$nombre. " ". $apellido. ", tengo ". $edad. " años y vivo en ". $direccion. " y no tengo estudios";
   
}

if ($sexo == "M"){
    $rta .= " y soy hombre";
    echo $rta;
} else if ($sexo == "F"){
    $rta .= " y soy mujer";
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