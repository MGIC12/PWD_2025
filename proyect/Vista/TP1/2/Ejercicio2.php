<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="../../Frameworks/bootstrap.min.css">
</head>

<body class="d-flex flex-column min-vh-100">

  <!-- Navbar --><!-- Navbar -->
  <?php
  include_once('../../structure/header.php');
  ?>
  
  
    <h1>TP1 - Ejercicio 2</h1>
    <hr>
    <h2>Horas de cursada PWD</h2>
    <form action="verhoras.php" method="get">
        <label for="horas">Horas Lunes: </label>
        <input type="number" name="horasL" id="horasL">
        <br><br>
        <label for="horas">Horas Martes: </label>
        <input type="number" name="horasM" id="horasM">
        <br><br>
        <label for="horas">Horas Miércoles: </label>
        <input type="number" name="horasMi" id="horasMi">
        <br><br>
        <label for="horas">Horas Jueves: </label>
        <input type="number" name="horasJ" id="horasJ">
        <br><br>
        <label for="horas">Horas Viernes: </label>
        <input type="number" name="horasV" id="horasV">
        <br><br>
        <button type="submit">Obtener horas por día</button>
    </form>

      <!-- footer -->
   
    <?php
    include_once('../../structure/footer.php');
    ?>
</body>

</html>