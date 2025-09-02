<?php
    include_once "../../../Control/TP3/1Benja/validador.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $validador = new Validador();
        // Este script procesa la carga de un archivo enviado por el usuario.
        // Utiliza la clase Validador para verificar el archivo y muestra mensajes según el resultado.
        $validador->validarArchivo($_FILES['archivo']);
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
    <!-- Abrimos sentencia if con " : " para mas adelante cerrarlo -->
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
    <!-- Abrimos sentacia else con " : " para mas adelante cerrarlo -->
        <?php 
            // Construyo la ruta final donde se guardará el archivo subido.
            // "../../uploads/" → carpeta destino (dos niveles arriba + carpeta uploads).
            // basename($_FILES['archivo']['name']) → obtiene solo el nombre del archivo original
            // (por seguridad, elimina rutas que el usuario pudiera intentar colar).
            $destino = "../../../Uploads/" . basename($_FILES['archivo']['name']);

            // Intento mover el archivo desde la carpeta temporal al destino final.
            // $_FILES['archivo']['tmp_name'] → ruta del archivo en la carpeta temporal (creada automáticamente por PHP).
            // $destino → ruta final definida en la línea anterior.
            // move_uploaded_file devuelve true si logró moverlo, false si falló.
            if (move_uploaded_file($_FILES['archivo']['tmp_name'], $destino)):
        ?>
            <div class="alert alert-success p-4 m-4" role="alert">
                <h4 class="text-primary">✅ El archivo fue cargado con éxito</h4>
                <p><a href="<?= $destino ?>" target="_blank" class="btn btn-link">Ver archivo</a></p>
                <a href="inicio.php" class="btn btn-outline-dark">Cargar otro archivo</a>
            </div>
        <?php else: ?>
            <div class="alert alert-warning p-4 m-4" role="alert">
                <h4>⚠️ Error al guardar el archivo en el servidor.</h4>
                <a href="inicio.php" class="btn btn-outline-dark">Volver al formulario</a>
            </div>
        <?php endif; ?>
    <?php endif; ?>
    <!-- Cerramos sentencia if (Linea 21) y sentencia else (Linea 30) con "endif;"  -->
    <!-- se utiliza la sentencia if...else...endif; en lugar de las llaves {} para delimitar bloques de código PHP dentro de HTML. Esto mejora la legibilidad del código al integrarlo con HTML. -->
</body>
</html>

<!-- if ($validador->hayErrores()) {
    echo "<h3>❌ Errores encontrados:</h3>";
    foreach ($validador->getErrores() as $error) {
        echo "<p style='color:red;'>$error</p>";
    }
    echo "<a href='../../Vista/1/inicio.php'>Volver</a>";
} else {
    $destino = "../../uploads/" . basename($_FILES['archivo']['name']);
    if (move_uploaded_file($_FILES['archivo']['tmp_name'], $destino)) {
        echo "<h3>✅ Archivo cargado con éxito</h3>";
        echo "<p><a href='$destino' target='_blank'>Ver archivo</a></p>";
    } else {
        echo "<p style='color:red;'>Error al guardar el archivo en el servidor.</p>";
    }
} -->
