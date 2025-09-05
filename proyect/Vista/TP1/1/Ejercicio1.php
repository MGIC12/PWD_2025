<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../Frameworks/bootstrap.min.css">
  <title>Ejercicio 1</title>
</head>

<body class="d-flex flex-column min-vh-100">

  <!-- Navbar -->
  <?php
  include_once('../../structure/header.php');
  ?>
  <br>
  <h1 class="text-center">TP1 - Ejercicio 1</h1>
  <hr>
  <br>
  <div class="container shadow-lg">
  <form action="./vernumero.php" method="post" class="m-3">
    <label for="num" class="form-label fw-bold">Ingrese un número: </label>
    <input type="number" name="num" id="num" class="form-control" required>
    <input type="submit" class="btn btn-outline-success mt-3" value="Enviar">
  </form>
  </div>
  <!-- footer -->
   
    <?php
    include_once('../../structure/footer.php');
    ?>
   
</body>
</html>