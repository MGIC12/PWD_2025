<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver número</title>
    <!-- Bootstrap CSS -->
    <link href="./../../../../Frameworks/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Resultado</h1>
        <a href="inicio.php" class="btn btn-secondary">← Volver</a>
    </div>
    <hr>

    <div class="card">
        <div class="card-body">
            <?php
            // Obtener el número ingresado
            $num = $_POST["num"];

            // Verificar si el número es positivo, negativo o cero
            if ($num > 0) {
                echo "<p>El número ingresado es: <b class='text-success'>positivo</b></p>";
            } else if ($num < 0) {
                echo "<p>El número ingresado es: <b class='text-danger'>negativo</b></p>";
            } else {
                echo "<p>El número ingresado es: <b class='text-warning'>cero</b></p>";
            }

            echo "<p>El número ingresado fue: <b>$num</b></p>";
            ?>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="../../../../Frameworks/bootstrap.min.js"></script>
</body>
</html>
