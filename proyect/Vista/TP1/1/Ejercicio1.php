<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../../../Frameworks/bootstrap.min.css">
  <title>Ejercicio 1</title>
</head>

<body class="d-flex flex-column min-vh-100">

  <!-- Navbar -->
  <?php
  include_once('../../structure/header.php');
  ?>
  <br>
  <h1>TP1 - Ejercicio 1</h1>
  <hr>
  <br>
  <form action="./vernumero.php" method="post">
    <label for="num">Ingrese un número: </label>
    <input type="number" name="num" id="num">
    <br><br>
    <input type="submit" value="Enviar">
  </form>
  
  <!-- footer -->
   
    <?php
    include_once('../../structure/footer.php');
    ?>
   
</body>
</html>