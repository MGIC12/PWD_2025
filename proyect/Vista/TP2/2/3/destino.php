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
  <link rel="stylesheet" href="./../../../Frameworks/bootstrap.min.css">
</head>
<body class="d-flex flex-column min-vh-100">
  <!-- Navbar -->
  <?php include_once('../../../structure/header.php'); ?>

  <div class="container mt-5">
    <div class="card shadow p-4">
      <h2 class="mb-4 text-center">Datos recibidos</h2>
      <?php
      if (!empty($datos)) {
          $nombre = $datos['nombre_form'] ?? '';
          $apellido = $datos['apellido_form'] ?? '';
          $edad = $datos['edad_form'] ?? '';
          $direccion = $datos['direccion_form'] ?? '';

          $cadena = "Hola, yo soy $nombre $apellido, tengo $edad años y vivo en $direccion.";
          echo "<div class='alert alert-success text-center'>$cadena</div>";
      } else {
          echo "<div class='alert alert-danger text-center'>No se encontraron datos</div>";
      }
      ?>
      <div class="text-center mt-3">
        <a href="Inicio.php" class="btn btn-primary">⬅ Volver al formulario</a>
      </div>
    </div>
  </div>

  <!-- footer -->
  <?php include_once('../../../structure/footer.php'); ?>

  <script src="./../../../Frameworks/bootstrap.min.js"></script>
</body>
</html>
