<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado - Ejercicio 8</title>
  <link rel="stylesheet" href="../../Frameworks/bootstrap.min.css">
</head>
<body class="bg-light d-flex flex-column min-vh-100">

  <!-- Navbar -->
  <?php
  include_once('../../structure/header.php');
  ?>

  <!-- Resultado -->
  <main class="container my-5">
    <div class="card shadow-lg p-4 text-center">
      <?php
      include_once './../../../Control/TP1/8/C_Cine.php';
            include_once "./../../../Utils/funciones.php";
      $datos = datasubmited();

      if (!empty($datos)) {
          $nombre = $_POST['nombre'];
          $apellido = $_POST['apellido'];
          $edad = $_POST['edad'];
          $estudiante = $_POST['estudios'];
          
          echo "<h2 class='text-primary fw-bold mb-4'>Bienvenido $nombre $apellido</h2>";
          
          $objC_Cine = new C_Cine();
          $precio = $objC_Cine->calcular_precio_entrada($_POST);

          echo "<p class='lead'>El precio de su entrada es de: <span class='fw-bold text-success'>$$precio</span></p>";
          echo '<a href="Inicio.php" class="btn btn-outline-primary mt-3 shadow">Volver al formulario</a>';
      } else {
          echo "<p class='text-danger fw-bold'>⚠️ No se recibieron datos</p>";
          echo '<a href="Inicio.php" class="btn btn-outline-primary mt-3 shadow">Volver al formulario</a>';
      }
      ?>
    </div>
  </main>

<!-- footer -->
  <?php
  include_once('../../structure/footer.php');
  ?>
  <script src="./../../../Frameworks/bootstrap.bundle.min.js"></script>
</body>
</html>
