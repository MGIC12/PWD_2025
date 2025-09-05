<?php
// Cargar el procesamiento de datos
include '../../../../Control/TP2/2/4/datos.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Datos</title>
    <link href="../../../Frameworks/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">

    <?php include_once('../../../structure/header.php'); ?>

    <div class="container d-flex justify-content-between align-items-center mb-3 mt-5">
        <h1>Resultado</h1>
        <a href="formulario.php" class="btn btn-secondary">← Volver</a>
    </div>
    <hr>

    <div class="container card p-3 mb-3 mt-5 d-flex flex-column">
        <?php if (!empty($errores)): ?>
            <div class="alert alert-danger">
                <?php foreach ($errores as $err) echo "<p>$err</p>"; ?>
            </div>
        <?php elseif (!empty($datos)): ?>
            <p>Hola, yo soy <b><?= $datos['nombre'] . ' ' . $datos['apellido'] ?></b>, 
               tengo <b><?= $datos['edad'] ?></b> años y vivo en <b><?= $datos['direccion'] ?></b>.
            </p>

            <?php if ($datos['edad'] >= 18): ?>
                <p class="text-success fw-bold">Soy Mayor de Edad</p>
            <?php else: ?>
                <p class="text-warning fw-bold">Soy Menor de Edad</p>
            <?php endif; ?>
        <?php endif; ?>
    </div>

    <?php include_once('../../../structure/footer.php'); ?>
</body>
</html>

