<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
    <link rel="stylesheet" href="../../Frameworks/bootstrap.min.css">
</head>
<body class="d-flex flex-column min-vh-100">

  <!-- Navbar -->
  <?php
  include_once('../../structure/header.php');
  ?>
  
    <h1 class="text-center m-3 fw-bold">TP1 - Ejercicio 7</h1>
    <div class="container shadow-lg">
        <form action="calculadora.php" method="get" class="m-3">
            <label for="num1" class="form-label">Número 1: </label>
            <input type="number" name="num1" id="num1" class="form-control mb-3" required>
            
            <label for="num2" class="form-label">Número 2: </label>
            <input type="number" name="num2" id="num2" class="form-control mb-3" required>
            
            <label for="operacion" class="form-label">Operación: </label>
            <select name="operacion" id="operacion" class="form-select mb-3" required>
                <option value="sumar">Sumar</option>
                <option value="restar">Restar</option>
                <option value="multiplicar">Multiplicar</option>
            </select>
            
            <input type="submit" value="Enviar" class="btn btn-primary mb-3">
        </form>
    </div>
    <!-- footer -->
   
    <?php
    include_once('../../structure/footer.php');
    ?>

</body>
</html>