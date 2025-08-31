<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados Formulario</title>
    <link href="../../../../Frameworks/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Resultados</h1>
        <a href="http://localhost/PWD_2025/TP2/Ejercicio2/Ejercicio6Facu/Vista/inicio.php" class="btn btn-secondary">← Volver</a>
    </div>
    <hr>

    <?php
    if (isset($error)) {
        echo '<div class="alert alert-danger">' . $error . '</div>';
    } else {
        $claseEdad = ($datos['edad'] >= 18) ? 'bg-success text-white' : 'bg-warning text-dark';
    ?>
        <div class="card p-3 mb-3 <?= $claseEdad ?>">
            <h5 class="card-title">Datos Personales</h5>
            <p><b>Nombre:</b> <?= $datos['nombre'] ?> <?= $datos['apellido'] ?></p>
            <p><b>Edad:</b> <?= $datos['edad'] ?> años</p>
            <p><b>Dirección:</b> <?= $datos['direccion'] ?></p>
            <p class="fw-bold"><?= ($datos['edad'] >= 18) ? 'Mayor de Edad' : 'Menor de Edad' ?></p>
        </div>

        <div class="card p-3 mb-3">
            <h5 class="card-title">Información Adicional</h5>
            <p><b>Nivel de Estudios:</b> <?= $datos['estudios'] ?></p>
            <p><b>Sexo:</b> <?= $datos['sexo'] ?></p>
        </div>

        <div class="card p-3 mb-3">
            <h5 class="card-title">Deportes que practica</h5>
            <?php if (!empty($datos['deportes'])) { ?>
                <div class="d-flex flex-wrap gap-2">
                    <?php foreach ($datos['deportes'] as $dep) { ?>
                        <span class="badge bg-primary"><?= htmlspecialchars($dep) ?></span>
                    <?php } ?>
                </div>
            <?php } else { ?>
                <p>No practica deportes.</p>
            <?php } ?>
        </div>
    <?php } ?>

</body>

</html>