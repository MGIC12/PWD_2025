<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
    <link rel="stylesheet" href="../../Frameworks/bootstrap.min.css">
</head>
<body class="d-flex flex-column min-vh-100">

 <!-- Navbar -->
  <?php
  include_once('../../structure/header.php');
  ?>
  
    <h1 class="text-center m-3 fw-bold">TP1 - Ejercicio 6</h1>
    <div class="container shadow-lg">
        <form action="verdatos4.php" method="get" class="row m-3">
            
            <div class="col-md-4 mb-3">
                <label for="nombre" class="form-label">Nombre: </label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            
            <div class="col-md-4 mb-3">
                <label for="apellido" class="form-label">Apellido: </label>
                <input type="text" name="apellido" id="apellido" class="form-control" required>
            </div>
            
            <div class="col-md-2 mb-3">
                <label for="edad" class="form-label">Edad: </label>
                <input type="number" name="edad" id="edad" class="form-control" required>
            </div>

            <div class="col-md-12 mb-3">
                <label for="direccion" class="form-label">Dirección: </label>
                <input type="text" name="direccion" id="direccion" class="form-control" required>
            </div>

            <div class="col-md-12 mb-3">
                <label for="deporte" class="form-label">Deporte favorito: </label>
                <input type="checkbox" name="futbol" value="futbol" id="futbol" class="form-check-input"> Futbol
                <input type="checkbox" name="basquetbol" value="basquetbol" id="basquetbol" class="form-check-input"> Basquetbol
                <input type="checkbox" name="tenis" value="tenis" id="tenis" class="form-check-input"> Tenis
                <input type="checkbox" name="voley" value="voley" id="voley" class="form-check-input"> Voley
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