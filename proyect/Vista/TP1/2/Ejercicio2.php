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
  
  
    <h1 class="text-center m-3 fw-bold">TP1 - Ejercicio 2</h1>
    <div class="container shadow-lg">
      <form action="verhoras.php" method="get" class="row m-3">
        <div class="col-md-12">
          <h2 class="text-center">Horas de cursada PWD</h2>
        </div>
        <div class="col-md-6 mb-3">
          <label for="horas" class="form-label">Horas Lunes: </label>
          <input type="number" name="horasL" id="horasL" class="form-control" required>
        </div>
        <div class="col-md-6 mb-3">
          <label for="horas">Horas Martes: </label>
          <input type="number" name="horasM" id="horasM" class="form-control" required>
        </div>
        <div class="col-md-6 mb-3">
          <label for="horas">Horas Miércoles: </label>
          <input type="number" name="horasMi" id="horasMi" class="form-control" required>
        </div>
        <div class="col-md-6 mb-3">  
          <label for="horas">Horas Jueves: </label>
          <input type="number" name="horasJ" id="horasJ" class="form-control" required>
        </div>
        <div class="col-md-12 mb-3">
          <label for="horas">Horas Viernes: </label>
          <input type="number" name="horasV" id="horasV" class="form-control" required>
        </div>
        <div class="col-md-12 mb-3">
          <button type="submit" class="btn btn-primary mt-3">Obtener horas por día</button>
        </div>
        </form>
    </div>
      <!-- footer -->
   
    <?php
    include_once('../../structure/footer.php');
    ?>
</body>

</html>