<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <!-- Bootstrap CSS -->
    <link href="./../../../../Frameworks/bootstrap.min.css" rel="stylesheet">
</head>

<body class="">
      <!-- Navbar -->
  <?php
  include_once('../../../structure/header.php');
  ?>
  
    <div class="container mt-5 d-flex flex-column min-vh-100">
    <h1>TP1 - Ejercicio 2</h1>
    <hr>
    <h2>Horas de cursada PWD</h2>

    <form action="verHora.php" method="get" class="needs-validation" novalidate>
        <?php
        $dias = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes"];
        $ids = ["horasL", "horasM", "horasMi", "horasJ", "horasV"];
        for ($index = 0; $index < count($dias); $index++) {
        ?>
            <div class="mb-3">
                <label for="<?= $ids[$index] ?>" class="form-label">Horas <?= $dias[$index] ?>:</label>
                <input type="number" name="<?= $ids[$index] ?>" id="<?= $ids[$index] ?>" class="form-control" required min="0">
                <div class="invalid-feedback">
                    Por favor ingrese la cantidad de horas para <?= $dias[$index] ?>.
                </div>
            </div>
        <?php
        }
        ?>

        <button type="submit" class="btn btn-primary">Obtener horas por día</button>
    </form>
    </div>

    <!-- footer -->
   
    <?php
    include_once('../../../structure/footer.php');
    ?>


    <!-- Bootstrap JS y validación -->
    <script src="./../../../../Frameworks/bootstrap.min.js"></script>
    <script src="../scripts.js"></script>
</body>

</html>