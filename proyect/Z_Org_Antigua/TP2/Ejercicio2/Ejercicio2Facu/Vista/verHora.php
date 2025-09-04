<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horas cursadas</title>
    <link href="./../../../../Frameworks/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Horas cursadas</h1>
        <a href="http://localhost/PWD_2025/TP2/Ejercicio2/Ejercicio2Facu/Vista/inicio.php" class="btn btn-secondary">← Volver</a>
    </div>
    <hr>

    <div class="card">
        <div class="card-body">
            <?php
            $horasPWD = [
                $_GET["horasL"],
                $_GET["horasM"],
                $_GET["horasMi"],
                $_GET["horasJ"],
                $_GET["horasV"]
            ];
            $dias = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes"];

            foreach($dias as $i => $dia) {
                echo "<p><b>$dia:</b> {$horasPWD[$i]} horas</p>";
            }

            $horasTotal = array_sum($horasPWD);
            echo "<hr>";
            echo "<p class='fs-3 fw-bold'>Total de horas: $horasTotal horas</p>";
            ?>
        </div>
    </div>

    <script src="./../../../../Frameworks/bootstrap.min.js"></script>
</body>
</html>
