<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 - Horas cursadas</title>

    <link rel="stylesheet" href="../../Frameworks/bootstrap.min.css">
</head>

<body class="d-flex flex-column min-vh-100">
<?php
// Navbar
include_once('../../structure/header.php');
?>
    <div>
    <a href="http://localhost/PWD_2025/proyect/Vista/TP1/2/Ejercicio2.php">
      <button class="btn btn-primary w-25" data-bs-theme="dark">← Volver a la página anterior</button>
    </a>
  </div>
  <div class="container text-center mt-3">
<?php

include_once("../../../Utils/funciones.php");
$datos = datasubmited();
  if (!empty($datos)) {
    //Obtener los números ingresados
    $horasPWDL = $datos["horasL"];
    $horasPWDM = $datos["horasM"];
    $horasPWDMi = $datos["horasMi"];
    $horasPWDJ = $datos["horasJ"];
    $horasPWDV = $datos["horasV"];
    $mostrarContenido = true;
  } else {
    $mostrarContenido = false;
  }

if (!$mostrarContenido) {
    $rta = "No se han ingresado datos";
    exit($rta);
  } else {
$horasPWD = array($horasPWDL, $horasPWDM, $horasPWDMi, $horasPWDJ, $horasPWDV);
$dias = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes"];

$horasPWDarray = "<h1>Horas cursadas por día:</h1><hr><br>";
for ($i = 0; $i < count($horasPWD); $i++){
    $horasPWDarray .= $dias[$i] . ": " . $horasPWD[$i] . " horas <br>";
}

$horasTotal = $horasPWDL + $horasPWDM + $horasPWDMi + $horasPWDJ + $horasPWDV;
$rta = $horasPWDarray . "<br>";
$rta .= "El total de horas cursadas por semana es de: " . $horasTotal." horas";
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