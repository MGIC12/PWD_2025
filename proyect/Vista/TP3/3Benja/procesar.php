<?php
include_once './../../../Control/TP3/3Benja/validador.php';
include_once "./../../../Utils/funciones.php";

$datos   = datasubmited();                  // Datos del formulario (GET/POST)
$archivo = $_FILES['validacionArchivo'] ?? null; // Archivo si fue enviado

if (!empty($datos) || !empty($archivo)) {
    $validador = new Validador();
    // Validaciones de texto
    $titulo        = $validador->validarTitulo($datos['titulo']        ?? '');
    $actores       = $validador->validarActores($datos['actores']      ?? '');
    $director      = $validador->validarDirector($datos['director']    ?? '');
    $guion         = $validador->validarGuion($datos['guion']          ?? '');
    $produccion    = $validador->validarProduccion($datos['produccion']?? '');
    $anio          = $validador->validarAnio($datos['anio']            ?? '');
    $nacionalidad  = $validador->validarNacionalidad($datos['nacionalidad'] ?? '');
    $genero        = $validador->validarGenero($datos['genero']        ?? '');
    $duracion      = $validador->validarDuracion($datos['duracion']    ?? '');
    $restriccion   = $validador->validarRestriccionEdad($datos['restriccionEdad'] ?? '');
    $sinopsis      = $validador->validarSinopsis($datos['sinopsis']    ?? '');
    // Validación de archivo
    if ($archivo && $archivo['error'] === UPLOAD_ERR_OK) {
        $validador->validarArchivo($archivo);
    } else {
        $validador->setErrores("No se subió ningún archivo o hubo un error en la carga.");
    }
    $mostrarContenido = true;
} else {
    $mostrarContenido = false;
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
<?php if ($mostrarContenido): ?> 
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
        $destino = "../Uploads/" . basename($_FILES['validacionArchivo']['name']);
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
<?php else: ?>
        <div class="alert alert-warning p-4 m-4" role="alert">
            <h4>⚠️ Error: no se recibieron datos.</h4>
            <a href="inicio.php" class="btn btn-outline-dark">Volver al formulario</a>
        </div>
<?php endif; ?>

<!-- footer -->
   
    <?php
    include_once('../../structure/footer.php');
    ?>

</body>
</html>
