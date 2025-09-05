<?php
require_once "./../../../Control/TP3/2Facu/validador.php"; 
$error = "";
$contenido = "";
include_once  "./../../../Utils/funciones.php";

$datos = datasubmited();
if (!empty($datos)) {
    $validador = new Validador();
    $validador->validarArchivo($_FILES['archivo']);

    if ($validador->hayErrores()) {
        $error = implode("<br>", $validador->getErrores());
    } else {

        $dir = "../Uploads/";

        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }

        $nombreUnico = uniqid() . "_" . basename($_FILES['archivo']['name']);
        $rutaFinal = $dir . $nombreUnico;

        if (move_uploaded_file($_FILES['archivo']['tmp_name'], $rutaFinal)) {
            $contenido = file_get_contents($rutaFinal);

        } else {
            $error = "No se pudo guardar el archivo en el servidor.";
        }
    }
    $mostrarContenido = true;  // flag
} else {
    $mostrarContenido = false;
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la carga</title>
    <link rel="stylesheet" href="../../Frameworks/bootstrap.min.css">
</head>

<body class="bg-light d-flex flex-column min-vh-100">
    <!-- Navbar -->
    <?php
    include_once('../../structure/header.php');
    ?>
<?php if ($mostrarContenido): ?> 
    <div class="container mt-5">

        <h2 class="mb-4">Resultado de la carga</h2>

        <?php if (!empty($error)): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
            <a href="./inicio.php" class="btn btn-secondary">Volver</a>
        <?php else: ?>
            <div class="alert alert-success">Archivo subido y validado correctamente.</div>

            <h5>Contenido del archivo:</h5>
            <textarea class="form-control" rows="12"><?php echo htmlspecialchars($contenido); ?></textarea>
            <br>
            <a href="./inicio.php" class="btn btn-primary">Subir otro archivo</a>
        <?php endif; ?>

    </div>
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

