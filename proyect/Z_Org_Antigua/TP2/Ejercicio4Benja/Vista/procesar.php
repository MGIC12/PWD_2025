<?php 
    include_once '../Control/validador.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $validador = new Validador();

        $titulo   = $validador->validarTitulo($_POST['titulo'] ?? '');
        $actores  = $validador->validarActores($_POST['actores'] ?? '');
        $director      = $validador->validarDirector($_POST['director'] ?? '');
        $guion         = $validador->validarGuion($_POST['guion'] ?? '');
        $produccion    = $validador->validarProduccion($_POST['produccion'] ?? '');
        $anio          = $validador->validarAnio($_POST['anio'] ?? '');
        $nacionalidad  = $validador->validarNacionalidad($_POST['nacionalidad'] ?? '');
        $genero        = $validador->validarGenero($_POST['genero'] ?? '');
        $duracion      = $validador->validarDuracion($_POST['duracion'] ?? '');
        $restriccion   = $validador->validarRestriccionEdad($_POST['restriccionEdad'] ?? '');
        $sinopsis      = $validador->validarSinopsis($_POST['sinopsis'] ?? '');
    } else {
        // Modificar esto del die, almacenar en una variable para no cortar la ejecucion
        die("No se recibieron datos");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>

<?php if ($validador->hayErrores()): ?>
    <div class="alert alert-danger p-4 m-4" role="alert">
        <h4>Se encontraron errores:</h4>
        <ul>
            <?php foreach ($validador->getErrores() as $error): ?>
                <li><?= htmlspecialchars($error) ?></li>
            <?php endforeach; ?>
        </ul>
        <a href="inicio.php" class="btn btn-outline-dark">Volver al formulario</a>
    </div>
<?php else: ?>
    <div class="alert alert-success p-4 m-4" role="alert">
        <h4 class="text-primary">La película introducida es</h4>
        <p>
            <strong>Título:</strong> <?= htmlspecialchars($titulo) ?><br>
            <strong>Actores:</strong> <?= htmlspecialchars($actores) ?><br>
            <strong>Director:</strong> <?= htmlspecialchars($director) ?><br>
            <strong>Guión:</strong> <?= htmlspecialchars($guion) ?><br>
            <strong>Producción:</strong> <?= htmlspecialchars($produccion) ?><br>
            <strong>Año:</strong> <?= htmlspecialchars($anio) ?><br>
            <strong>Nacionalidad:</strong> <?= htmlspecialchars($nacionalidad) ?><br>
            <strong>Género:</strong> <?= htmlspecialchars($genero) ?><br>
            <strong>Duración:</strong> <?= htmlspecialchars($duracion) ?><br>
            <strong>Restricciones de edad:</strong> <?= htmlspecialchars($restriccion) ?><br>
            <strong>Sinopsis:</strong> <?= htmlspecialchars($sinopsis) ?>
        </p>
        <a href="inicio.php" class="btn btn-outline-dark">Volver al formulario</a>
    </div>
<?php endif; ?>

</body>
</html>