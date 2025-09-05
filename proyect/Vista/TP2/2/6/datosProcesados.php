<?php
include_once ('../../../../Utils/funciones.php');
include_once "../../../../Control/TP2/2/6/procesar.php";

$datos = datasubmited();
              
$archivo = $datos['validacionArchivo'] ?? null;

$bandera = false;

if (!empty($datos) || ($archivo && $archivo['error'] === UPLOAD_ERR_OK)) {
    $bandera = true;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados Formulario</title>
    <link href="../../../Frameworks/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Navbar -->
    <?php include_once('../../../structure/header.php'); ?>

    <div class="container d-flex justify-content-between align-items-center mb-3">
        <h1>Resultados</h1>
        <a href="inicio.php" class="btn btn-secondary">← Volver</a>
    </div>
    <hr>

    <?php if ($bandera): ?> 
        <?php $claseEdad = ($datos['edad'] >= 18) ? 'bg-success text-white' : 'bg-warning text-dark'; ?>

        <div class="container card p-3 mb-3 <?= $claseEdad ?>">
            <h5 class="card-title">Datos Personales</h5>
            <p><b>Nombre:</b> <?= $datos['nombre'] ?> <?= $datos['apellido'] ?></p>
            <p><b>Edad:</b> <?= $datos['edad'] ?> años</p>
            <p><b>Dirección:</b> <?= $datos['direccion'] ?></p>
            <p class="fw-bold"><?= ($datos['edad'] >= 18) ? 'Mayor de Edad' : 'Menor de Edad' ?></p>
        </div>

        <div class="container card p-3 mb-3">
            <h5 class="card-title">Información Adicional</h5>
            <p><b>Nivel de Estudios:</b> <?= $datos['estudios'] ?></p>
            <p><b>Sexo:</b> <?= $datos['sexo'] ?></p>
        </div>

        <div class="container card p-3 mb-3">
            <h5 class="card-title">Deportes que practica</h5>
            <?php if (!empty($datos['deportes'])): ?>
                <div class="d-flex flex-wrap gap-2">
                    <?php foreach ($datos['deportes'] as $dep): ?>
                        <span class="badge bg-primary"><?= $dep ?></span>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <p>No practica deportes.</p>
            <?php endif; ?>
        </div>
    <?php else: ?>
        <div class="alert alert-warning p-4 m-4" role="alert">
            <h4>⚠️ Error: no se recibieron datos.</h4>
            <a href="inicio.php" class="btn btn-outline-dark">Volver al formulario</a>
        </div>
    <?php endif; ?>

    <!-- footer -->
    <?php include_once('../../../structure/footer.php'); ?>

</body>
</html>
