<?php

include_once('../../../../Utils/funciones.php');

$datos = datasubmited();

// Bandera para mostrar contenido
$mostrarContenido = !empty($datos);

$nivelEstudios = $datos['estudios'] ?? null;
$sexo = $datos['sexo'] ?? null;

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="../../../Frameworks/bootstrap.min.css">
    <link rel="stylesheet" href="resultado.css">
</head>

<body class="d-flex flex-column min-vh-100">
    <!-- Navbar -->
    <?php include_once('../../../structure/header.php'); ?>

    <div class="resultado-container">
        <h1>Resultado del formulario</h1>

        <?php if ($mostrarContenido): ?>
            <?php
            // Mensajes de nivel de estudios
            switch ($nivelEstudios) {
                case '1':
                    echo "<p>📘 Usted no tiene estudios</p>";
                    break;
                case '2':
                    echo "<p>📗 Usted tiene estudios primarios</p>";
                    break;
                case '3':
                    echo "<p>📙 Usted tiene estudios secundarios</p>";
                    break;
                default:
                    echo "<p>❓ Nivel de estudios no reconocido</p>";
                    break;
            }

            // Mensajes de sexo
            switch ($sexo) {
                case 'M':
                    echo "<p>👨 Usted eligió el sexo masculino</p>";
                    break;
                case 'F':
                    echo "<p>👩 Usted eligió el sexo femenino</p>";
                    break;
                case 'O':
                    echo "<p>🌈 Usted eligió otro sexo</p>";
                    break;
                default:
                    echo "<p>❓ Sexo no reconocido</p>";
                    break;
            }
            ?>
        <?php else: ?>
            <p>No se recibieron datos</p>
        <?php endif; ?>

        <a href="Inicio.php">⬅ Volver al formulario</a>
    </div>

    <!-- footer -->
    <?php include_once('../../../structure/footer.php'); ?>
</body>

</html>