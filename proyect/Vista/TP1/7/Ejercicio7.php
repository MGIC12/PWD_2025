<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
    <link rel="stylesheet" href="../../../Frameworks/bootstrap.min.css">
</head>
<body class="d-flex flex-column min-vh-100">

  <!-- Navbar -->
  <?php
  include_once('../../structure/header.php');
  ?>
  
    <h1>TP1 - Ejercicio 7</h1>
    <hr><br>
    <form action="calculadora.php" method="get">
        <label for="num1">Número 1: </label>
        <input type="number" name="num1" id="num1" required>
        <br><br>
        <label for="num2">Número 2: </label>
        <input type="number" name="num2" id="num2" required>
        <br><br>
        <select name="operacion" id="operacion">
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
        </select>
        <br><br>
        <input type="submit" value="Enviar">
    </form>

    <!-- footer -->
   
    <?php
    include_once('../../structure/footer.php');
    ?>

</body>
</html>