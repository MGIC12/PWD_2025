<?php
include_once('../../../../Utils/funciones.php');

$datos = datasubmited();

$num = $datos['num'] ?? null;
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver número</title>
    <!-- Bootstrap CSS -->
    <link href="./../../../Frameworks/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100">
    <!-- Navbar -->
    <?php
    include_once('../../../structure/header.php');
    ?>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Resultado</h1>
        <a href="inicio.php" class="btn btn-secondary">← Volver</a>
    </div>
    <hr>

    <div class="card">
        <div class="card-body">
            <?php
            if ($num !== null) {
                if ($num > 0) {
                    echo "<p>El número ingresado es: <b class='text-success'>positivo</b></p>";
                } elseif ($num < 0) {
                    echo "<p>El número ingresado es: <b class='text-danger'>negativo</b></p>";
                } else {
                    echo "<p>El número ingresado es: <b class='text-warning'>cero</b></p>";
                }

                echo "<p>El número ingresado fue: <b>$num</b></p>";
            } else {
                echo "<p class='text-danger'>No se recibió ningún número.</p>";
            }
            ?>
        </div>
    </div>

    <!-- footer -->

    <?php
    include_once('../../../structure/footer.php');
    ?>

</body>

</html>