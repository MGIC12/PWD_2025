<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
    <link rel="stylesheet" href="../../Frameworks/bootstrap.min.css">
</head>
<body class="d-flex flex-column min-vh-100">

  <!-- Navbar -->
  <?php
  include_once('../../structure/header.php');
  ?>
  
    <h1 class="text-center m-3 fw-bold">TP1 - Ejercicio 5</h1>
    <div class="container shadow-lg">
    <form action="verdatos3.php" method="get" class="row m-3">
        <div class="col-md-4">
            <label for="nombre" class="form-label">Nombre: </label>
            <input type="text" name="nombre" id="nombre" class="form-control mb-3" required>
        </div>
        
        <div class="col-md-4">
            <label for="apellido" class="form-label">Apellido: </label>
            <input type="text" name="apellido" id="apellido" class="form-control mb-3" required>
        </div>
        
        <div class="col-md-2">
            <label for="edad" class="form-label">Edad: </label>
            <input type="number" name="edad" id="edad" class="form-control mb-3" required>
        </div>

        <div class="col-md-12">
            <label for="direccion" class="form-label">Dirección: </label>
            <input type="text" name="direccion" id="direccion" class="form-control mb-3" required>
        </div>

        <div class="col-md-6 mb-3">
        <label for="estudios" class="form-label">Estudios: </label>
            <div class="form-check">
                <input type="radio" name="estudios" id="estudiosN" value="N" class="form-check-input"> No tengo estudios
            </div>
            <div class="form-check">
                <input type="radio" name="estudios" id="estudiosP" value="P" class="form-check-input"> Tengo estudios primarios
            </div>
            <div class="form-check">
                <input type="radio" name="estudios" id="estudiosS" value="S" class="form-check-input"> Tengo estudios secundarios
            </div>
        </div>    

        <div class="col-md-6 mb-3">
            <label for="sexo" class="form-label">Sexo: </label>
            <div class="form-check">
            <input type="radio" name="sexo" id="sexoM" value="M" class="form-check-input"> Masculino
            </div>
            <div class="form-check">
            <input type="radio" name="sexo" id="sexoF" value="F" class="form-check-input"> Femenino 
            </div>
        </div>

        <div class="col-md-12 mb-3">
            <input type="submit" value="Enviar" class="btn btn-primary">
        </div>
    </form>
    </div>
    <!-- footer -->
   
    <?php
    include_once('../../structure/footer.php');
    ?>

</body>
</html>