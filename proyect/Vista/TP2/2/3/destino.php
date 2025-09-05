<?php
// Incluir funciones
include_once('../../../../Utils/funciones.php'); // Ajustar ruta según corresponda

// Obtener los datos (funciona tanto POST como GET)
$datos = datasubmited();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 Destino</title>
    <link rel="stylesheet" href="styleDestino.css">
    <link rel="stylesheet" href="./../../../Frameworks/bootstrap.min.css">
</head>
<body class="d-flex flex-column min-vh-100">
     <!-- Navbar -->
  <?php include_once('../../../structure/header.php'); ?>
  
  <div class="container">
      <h1 class="titulo">Datos recibidos</h1>
      <?php
      if (!empty($datos)) {
          $nombre = $datos['nombre_form'] ?? '';
          $apellido = $datos['apellido_form'] ?? '';
          $edad = $datos['edad_form'] ?? '';
          $direccion = $datos['direccion_form'] ?? '';

          $cadena = "Hola, yo soy $nombre $apellido, tengo $edad años y vivo en $direccion.";
          echo "<div class='resultado'><p>$cadena</p></div>";
      } else {
          echo "<p class='error'>No se encontraron datos</p>";
      }
      ?>
      <a href="Inicio.php" class="volver">⬅ Volver al formulario</a>
  </div>

  <!-- footer -->
  <?php include_once('../../../structure/footer.php'); ?>
</body>
</html>
