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
        <a href="http://localhost/PWD_2025/TP2/Ejercicio2/Ejercicio4Facu/Vista/formulario.php" class="btn btn-secondary">← Volver</a>
    </div>
    <hr>

    <div class="card p-3 mb-3">
        <p>Hola, yo soy <b><?= $nombre . ' ' . $apellido ?></b>, 
           tengo <b><?= $edad ?></b> años y vivo en <b><?= $direccion ?></b>.
        </p>

        <?php if ($edad >= 18): ?>
            <p class="text-success fw-bold">Soy Mayor de Edad</p>
        <?php else: ?>
            <p class="text-warning fw-bold">Soy Menor de Edad</p>
        <?php endif; ?>
    </div>
</body>
</html>
