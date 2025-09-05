<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>

    <link rel="stylesheet" href="../../Frameworks/bootstrap.min.css">
</head>
<body class="d-flex flex-column min-vh-100">

<!-- Navbar -->
  <?php
  include_once('../../structure/header.php');
  ?>
  
    <h1 class="text-center m-3 fw-bold">TP1 - Ejercicio 3</h1>
    <div class="container shadow-lg">
    <form action="verdatos.php" method="post" class="m-3">
        <label for="nombre" class="form-label">Nombre: </label>
        <input type="text" name="nombre" id="nombre" class="form-control mb-3" required>
        <label for="apellido" class="form-label">Apellido: </label>
        <input type="text" name="apellido" id="apellido" class="form-control mb-3" required>
        <label for="edad" class="form-label">Edad: </label>
        <input type="number" name="edad" id="edad" class="form-control mb-3" required>
        <label for="direccion" class="form-label">Dirección: </label>
        <input type="text" name="direccion" id="direccion" class="form-control mb-3" required>
        <input type="submit" value="Enviar" class="btn btn-primary mb-3">
    </form>
    </div>
    <!-- footer -->
   
    <?php
    include_once('../../structure/footer.php');
    ?>
</body>
</html>