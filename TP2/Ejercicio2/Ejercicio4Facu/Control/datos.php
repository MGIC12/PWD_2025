<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Datos</title>
    <link href="../../../../Frameworks/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Resultado</h1>
        <a href="../Vista/formulario.php" class="btn btn-secondary">← Volver</a>
    </div>
    <hr>

    <?php
    if ($_GET) {
        $nombre = htmlspecialchars($_GET['nombre']);
        $apellido = htmlspecialchars($_GET['apellido']);
        $edad = (int)($_GET['edad']);
        $direccion = htmlspecialchars($_GET['direccion']);

        echo "<div class='card p-3 mb-3'>";
        echo "<p>Hola, yo soy <b>$nombre $apellido</b>, tengo <b>$edad</b> años y vivo en <b>$direccion</b>.</p>";
        if ($edad >= 18) {
            echo "<p class='text-success fw-bold'>Soy Mayor de Edad</p>";
        } else {
            echo "<p class='text-warning fw-bold'>Soy Menor de Edad</p>";
        }
        echo "</div>";
    } else {
        echo "<div class='alert alert-danger'>No se recibieron datos.</div>";
    }
    ?>
</body>
</html>
