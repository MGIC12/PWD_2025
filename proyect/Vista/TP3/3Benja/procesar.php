<?php 
    include_once './../../../Control/TP3/3Benja/validador.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $validador = new Validador();

        $titulo        = $validador->validarTitulo($_POST['titulo'] ?? '');
        $actores       = $validador->validarActores($_POST['actores'] ?? '');
        $director      = $validador->validarDirector($_POST['director'] ?? '');
        $guion         = $validador->validarGuion($_POST['guion'] ?? '');
        $produccion    = $validador->validarProduccion($_POST['produccion'] ?? '');
        $anio          = $validador->validarAnio($_POST['anio'] ?? '');
        $nacionalidad  = $validador->validarNacionalidad($_POST['nacionalidad'] ?? '');
        $genero        = $validador->validarGenero($_POST['genero'] ?? '');
        $duracion      = $validador->validarDuracion($_POST['duracion'] ?? '');
        $restriccion   = $validador->validarRestriccionEdad($_POST['restriccionEdad'] ?? '');
        $sinopsis      = $validador->validarSinopsis($_POST['sinopsis'] ?? '');
        if (isset($_FILES['validacionArchivo']) && $_FILES['validacionArchivo']['error'] === UPLOAD_ERR_OK) {
    $validador->validarArchivo($_FILES['validacionArchivo']);
} else {
    $validador->setErrores("No se subió ningún archivo o hubo un error en la carga.");
}

    } else {
        die("No se recibieron datos");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../Frameworks/bootstrap.min.css">
</head>
<body class="d-flex flex-column min-vh-100">
 <!-- Navbar -->
  <?php
  include_once('../../structure/header.php');
  ?>
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
    <?php
        $destino = "../../../Uploads/" . basename($_FILES['validacionArchivo']['name']);
        if (move_uploaded_file($_FILES['validacionArchivo']['tmp_name'], $destino)):
            $extension = strtolower(pathinfo($destino, PATHINFO_EXTENSION));
    ?>
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

        <?php if ($extension === "txt"): ?>
            <h5>Contenido del archivo:</h5>
            <textarea class="form-control mb-3" rows="6"><?= htmlspecialchars(file_get_contents($destino)) ?></textarea>
        <?php elseif (in_array($extension, ["jpg","jpeg","png","gif"])): ?>
            <h5>Imagen subida:</h5>
            <img src="<?= htmlspecialchars($destino) ?>" alt="Imagen subida" class="img-fluid rounded shadow">
        <?php endif; ?>
        <div>
            <br>
        <a href="inicio.php" class="btn btn-outline-dark">Volver al formulario</a>
        </div>
    </div>
    <?php endif; ?>
<?php endif; ?>

<!-- footer -->
   
    <?php
    include_once('../../structure/footer.php');
    ?>

</body>
</html>
