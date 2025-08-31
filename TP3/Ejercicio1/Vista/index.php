<?php
$msg  = $_GET['msg']  ?? '';
$tipo = $_GET['tipo'] ?? '';
$link = $_GET['link'] ?? '';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Archivo</title>
    <link rel="stylesheet" href="./../../../Frameworks/bootstrap.min.css">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow p-4">
            <h3 class="mb-4">Subir Archivo</h3>

            <!-- Formulario -->
            <form action="./../Control/subirArchivo.php" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
                <div class="mb-3">
                    <label for="archivo" class="form-label">Selecciona un archivo: (.doc o .pdf, máx 2MB)</label>
                    <input type="file" name="archivo" id="archivo" class="form-control" required>
                    <div class="invalid-feedback">Por favor selecciona un archivo.</div>
                </div>
                <button type="submit" class="btn btn-primary">Subir</button>
            </form>

            <?php
            if ($msg) {
                echo '<div class="alert alert-' . htmlspecialchars($tipo ?: 'info') . ' mt-3" role="alert">';
                echo htmlspecialchars($msg);

                if (!empty($link)) {
                    echo "<br><a href='" . htmlspecialchars($link) . "' target='_blank'>📂 Abrir archivo</a>";
                }
                echo '</div>';
            }
            ?>

        </div>
    </div>

    <script src="./../../../Frameworks/bootstrap.min.js"></script>
    <script>
        (function() {
            'use strict';
            const forms = document.querySelectorAll('.needs-validation');
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', e => {
                    if (!form.checkValidity()) {
                        e.preventDefault();
                        e.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        })();
    </script>
</body>

</html>